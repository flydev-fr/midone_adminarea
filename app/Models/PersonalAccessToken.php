<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    protected $table      = 'personal_access_tokens';
    protected $primaryKey = 'id';
    public $timestamps    = false;

    protected $fillable = [];

    /* CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_t */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id', 'tokenable_id');
    }

    static public function getPersonalAccessTokenAbilitiesByUserId($user_id) : array
    {

       $personalAccessToken= PersonalAccessToken::getByUserId($user_id)->first();
        //        \Log::info(  varDump($personalAccessToken, ' -1 $personalAccessToken::') );
        //        \Log::info(  varDump($personalAccessToken->abilities, ' -2 $personalAccessToken->abilities::') );
        if($personalAccessToken === null) return [];
        $abilitiesStr = str_replace( ['[',']','"'],'', $personalAccessToken->abilities);
        //        \Log::info(  varDump($personalAccessToken->abilities, ' -2 $personalAccessToken->abilities::') );
        $personalAccessTokenAbilities = pregSplit('/,/', $abilitiesStr );
        return is_array($personalAccessTokenAbilities) ? $personalAccessTokenAbilities : [];
    }

    public function scopeGetByUserId($query, $user_id= null)
    {
        if (!empty($user_id)) {
            $query->where(with(new PersonalAccessToken)->getTable().'.tokenable_id', $user_id);
        }
        return $query;
    }

/*
    public static function getPersonalAccessTokenValidationRulesArray( $personal_ad_bookmark_id = null) : array
    {
        $validationRulesArray = [
            'ad_id'      => 'required|exists:'.( with(new Ad)->getTable() ).',id',
            'user_id'    => 'required|exists:'.( with(new User)->getTable() ).',id',
        ];

        \Log::info('+12+getPersonalAccessTokenValidationRulesArray ::');
        \Log::info($validationRulesArray);

        return $validationRulesArray;
    }*/

}
