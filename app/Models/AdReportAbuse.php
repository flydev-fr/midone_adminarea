<?php
namespace App\Models;

use App\Models\Ad;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdReportAbuse extends Model
{

    protected $fillable = [ 'ad_id', 'user_id', 'text'];
    protected $table = 'ad_report_abuses';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('created_at', 'asc');
        });
    }


    public function ad(){
        return $this->belongsTo('App\Models\Ad', 'ad_id','id');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


    public function scopeGetByUserId($query, $user_id= null)
    {
        if (!empty($user_id)) {
            if ( is_array($user_id) ) {
                $query->whereIn(with(new AdReportAbuse)->getTable().'.user_id', $user_id);
            } else {
                $query->where(with(new AdReportAbuse)->getTable().'.user_id', $user_id);
            }
        }
        return $query;
    }

    public function scopeGetByAdId($query, $ad_id= null)
    {
        if (!empty($ad_id)) {
            if ( is_array($ad_id) ) {
                $query->whereIn(with(new AdReportAbuse)->getTable().'.ad_id', $ad_id);
            } else {
                $query->where(with(new AdReportAbuse)->getTable().'.ad_id', $ad_id);
            }
        }
        return $query;
    }



    public static function getValidationRulesArray() : array
    {
        $validationRulesArray = [
            'ad_id'        => 'required|exists:'.( with(new Ad)->getTable() ).',id',
            'user_id'        => 'required|exists:'.( with(new User)->getTable() ).',id',
        ];
        return $validationRulesArray;
    }

}
