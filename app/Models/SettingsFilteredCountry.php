<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class SettingsFilteredCountry extends Model
{
    protected $table = 'settings_filtered_countries';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country_code', 'select_in_location', 'select_in_phone', 'created_at'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('country_code', 'asc');
        });
    }

    public function scopeGetByCountryCode($query, $country_code = null)
    {
        if (empty($country_code)) {
            return $query;
        }
        return $query->where(with(new SettingsFilteredCountry)->getTable() . '.country_code', $country_code);
    }

    /* check if provided country_code is unique for settings_filtered_countries.country_code field */
    public static function getSimilarSettingsFilteredCountryByCountryCode( string $country_code, int $id= null, bool $return_count = false )
    {
        $quoteModel = settingsFilteredCountry::where( 'country_code', $country_code );
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

}
