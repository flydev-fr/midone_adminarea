<?php
namespace App\Models;

use App\Models\Ad;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdCategory extends Model
{

    protected $fillable = [ 'ad_id', 'category_id'];
    protected $table = 'ad_categories';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function ad(){
        return $this->belongsTo('App\Models\Ad', 'ad_id','id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id','id');
    }

    public function scopeGetByAdId($query, $ad_id= null)
    {
        if (!empty($ad_id)) {
            if ( is_array($ad_id) ) {
                $query->whereIn(with(new AdCategory)->getTable().'.ad_id', $ad_id);
            } else {
                $query->where(with(new AdCategory)->getTable().'.ad_id', $ad_id);
            }
        }
        return $query;
    }

    public function scopeGetByCategoryId($query, $category_id= null)
    {
        if (!empty($category_id)) {
            if ( is_array($category_id) ) {
                $query->whereIn(with(new AdCategory)->getTable().'.category_id', $category_id);
            } else {
                $query->where(with(new AdCategory)->getTable().'.category_id', $category_id);
            }
        }
        return $query;
    }

    public static function getAdCategoryValidationRulesArray() : array
    {
        $validationRulesArray = [
            'ad_id'        => 'required|exists:'.( with(new Ad)->getTable() ).',id',
            'category_id'  => 'required|exists:'.( with(new Category)->getTable() ).',id',
        ];
        return $validationRulesArray;
    }

}
