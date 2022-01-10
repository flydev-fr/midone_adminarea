<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class PersonalAdBookmark extends Model
{
    protected $table      = 'personal_ad_bookmarks';
    protected $primaryKey = 'id';
    public $timestamps    = false;

    protected $fillable = [ 'user_id', 'ad_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function ad()
    {
        return $this->belongsTo('App\Models\Ad');
    }

    public function scopeGetByUserId($query, $user_id= null)
    {
        if (!empty($user_id)) {
            if ( is_array($user_id) ) {
                $query->whereIn(with(new PersonalAdBookmark)->getTable().'.user_id', $user_id);
            } else {
                $query->where(with(new PersonalAdBookmark)->getTable().'.user_id', $user_id);
            }
        }
        return $query;
    }

    public function scopeGetByAdId($query, $ad_id = null)
    {
        if ( ! empty($ad_id)) {
            if (is_array($ad_id)) {
                $query->whereIn(with(new PersonalAdBookmark)->getTable() . '.ad_id', $ad_id);
            } else {
                $query->where(with(new PersonalAdBookmark)->getTable() . '.ad_id', $ad_id);
            }
        }

        return $query;
    }


    public static function getPersonalAdBookmarkValidationRulesArray( $personal_ad_bookmark_id = null) : array
    {
        $validationRulesArray = [
            'ad_id'      => 'required|exists:'.( with(new Ad)->getTable() ).',id',
            'user_id'    => 'required|exists:'.( with(new User)->getTable() ).',id',
        ];

        \Log::info('+12+getPersonalAdBookmarkValidationRulesArray ::');
        \Log::info($validationRulesArray);

        return $validationRulesArray;
    }

}
