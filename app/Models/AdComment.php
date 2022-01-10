<?php
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Ad;

class AdComment extends Model
{

    /* id	bigint(20) unsigned Автоматическое приращение
ad_id	bigint(20) unsigned
parent_ad_comment_id	bigint(20) unsigned NULL
user_id	int(10) unsigned NULL
approved	tinyint(1) [0]
comment	mediumtext
rating	tinyint(3) unsigned NULL
created_at */
    protected $fillable = [ 'ad_id', 'parent_ad_comment_id', 'user_id', 'approved',' comment', 'rating'];
    protected $table = 'ad_comments';
    protected $primaryKey = 'id';
    public $timestamps = false;

//    protected $with = ['ad'];

//    protected $with = ['children'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('id', 'desc');
        });
    }



    public function ad(){
        return $this->belongsTo('App\Models\Ad', 'ad_id','id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id','id')->withDefault([
            'name' => 'Unknown user'
        ]);

        /*     return $this->belongsTo('App\Models\Author')->withDefault([
        'name' => 'Guest Author'
    ]); */
    }

    public function children()
    {
        return $this->hasMany('App\Models\AdComment', 'parent_ad_comment_id', 'id');
    }



    public function scopeGetByAdId($query, $ad_id= null)
    {
        if (!empty($ad_id)) {
            if ( is_array($ad_id) ) {
                $query->whereIn(with(new AdComment)->getTable().'.ad_id', $ad_id);
            } else {
                $query->where(with(new AdComment)->getTable().'.ad_id', $ad_id);
            }
        }
        return $query;
    }


    public function scopeGetByUserId($query, $user_id= null)
    {
        if (!empty($user_id)) {
            if ( is_array($user_id) ) {
                $query->whereIn(with(new AdComment)->getTable().'.user_id', $user_id);
            } else {
                $query->where(with(new AdComment)->getTable().'.user_id', $user_id);
            }
        }
        return $query;
    }

    public function scopeGetByParentAdCommentId($query, $parent_ad_comment_id= null)
    {
        if (!empty($parent_ad_comment_id)) {
            if ( is_array($parent_ad_comment_id) ) {
                $query->whereIn(with(new AdComment)->getTable().'.parent_ad_comment_id', $parent_ad_comment_id);
            } else {
                $query->where(with(new AdComment)->getTable().'.parent_ad_comment_id', $parent_ad_comment_id);
            }
        }
        return $query;
    }

//parent_ad_comment_id
/* public function latestPost()
{
    return $this->hasOne(\App\Post::class)->latest();
}

И после, в вашем контроллере, вы можете выполнить такую "магию":


$users = Topic::with('latestPost')->get()->sortByDesc('latestPost.created_at'); */


    public function scopeOnlyApproved($query) {
        return $query->where('approved', true);
    }

    public function scopeGetByApproved($query, $approved = null)
    {
        if (!isset($approved) or strlen($approved) == 0) {
            return $query;
        }
        return $query->where(with(new AdComment)->getTable().'.approved', $approved);
    }




    public static function getValidationRulesArray() : array
    {
        $validationRulesArray = [
//            'ad_id'        => 'required|exists:'.( with(new User)->getTable() ).',id',
            'ad_id'        => 'required|exists:'.( with(new Ad)->getTable() ).',id',
        ];
        return $validationRulesArray;
    }

}
