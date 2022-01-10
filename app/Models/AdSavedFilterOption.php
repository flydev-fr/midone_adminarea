<?php
namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;

class AdSavedFilterOption extends Model
{
    protected $table      = 'ad_saved_filter_options';
    protected $primaryKey = 'id';
    public $timestamps    = false;

    protected $fillable = [ 'ad_saved_filter_id', 'key', 'value'];
/* id	bigint(20) unsigned Автоматическое приращение
ad_saved_filter_id	bigint(20) unsigned
key	varchar(100)
value	varchar(255)
created_at	timestamp [CURRENT_TIMESTAMP] */
    public function adSavedFilter()
    {
        return $this->belongsTo('App\Models\AdSavedFilter');
    }

    public function ad()
    {
        return $this->belongsTo('App\Models\Ad');
    }

    public function scopeGetByAdSavedFilterId($query, $ad_saved_filter_id= null)
    {
        if (!empty($ad_saved_filter_id)) {
            if ( is_array($ad_saved_filter_id) ) {
                $query->whereIn(with(new AdSavedFilterOption)->getTable().'.ad_saved_filter_id', $ad_saved_filter_id);
            } else {
                $query->where(with(new AdSavedFilterOption)->getTable().'.ad_saved_filter_id', $ad_saved_filter_id);
            }
        }
        return $query;
    }


    public static function getAdSavedFilterOptionValidationRulesArray( $ad_saved_filter_option_id = null) : array
    {
        $validationRulesArray = [
            'ad_saved_filter_id'    => 'required|exists:'.( with(new AdSavedFilter)->getTable() ).',id',
            'key' => 'required|max:100',
            'value' => 'nullable|max:255',
        ];

        \Log::info('+12+getAdSavedFilterOptionValidationRulesArray ::');
        \Log::info($validationRulesArray);

        return $validationRulesArray;
    }

}
