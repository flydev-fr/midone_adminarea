<?php
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdSavedFilter extends Model
{
    protected $fillable = [ 'user_id', 'title', 'is_default'];
    protected $table = 'ad_saved_filters';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'asc');
        });
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function scopeGetByUserId($query, $user_id= null)
    {
        if (!empty($user_id)) {
            if ( is_array($user_id) ) {
                $query->whereIn(with(new AdSavedFilter)->getTable().'.user_id', $user_id);
            } else {
                $query->where(with(new AdSavedFilter)->getTable().'.user_id', $user_id);
            }
        }
        return $query;
    }

    public function scopeGetByIsDefault($query, $is_default = null)
    {
        if (!isset($is_default) or strlen($is_default) == 0) {
            return $query;
        }
        return $query->where(with(new AdSavedFilter)->getTable().'.is_default', $is_default);
    }


    public static function getSimilarAdSavedFilterByTitle( string $title, int $user_id, int $id= null, $return_count= false )
    {
        $quoteModel = AdSavedFilter::where( 'title', $title );
        $quoteModel = $quoteModel->where( 'user_id', '=' , $user_id );
        if ( !empty( $id ) ) {
            $quoteModel = $quoteModel->where( 'id', '!=' , $id );
        }

        if ( $return_count ) {
            return $quoteModel->get()->count();
        }
        $retRow= $quoteModel->get();
        if ( empty($retRow[0]) ) return false;
        return $retRow[0];
    }



    public static function getAdSavedFilterValidationRulesArray($user_id, $ad_saved_filter_id= null, array $skipFieldsArray= []) : array
    {
        $additional_ad_saved_filter_validation_rule= 'check_ad_saved_filter_unique_by_title:'.$user_id.','.( !empty($ad_saved_filter_id)?$ad_saved_filter_id:'');

        $validationRulesArray = [
            'title' => [
                'required',
                'string',
                'max:100',
                $additional_ad_saved_filter_validation_rule
            ],
            'user_id'     => 'required|exists:'.( with(new User)->getTable() ).',id',
            'is_default'         => 'nullable|in:' . '0,1',
        ];
        foreach( $skipFieldsArray as $next_field ) {
            if(!empty($validationRulesArray[$next_field])) {
                unset($validationRulesArray[$next_field]);
            }
        }
        return $validationRulesArray;
    }

}
