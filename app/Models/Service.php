<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\Rule;

class Service extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    public $timestamps = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'label', 'active','monthly_charge', 'ordering'
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('ordering', 'asc');
        });
    }


    private static $activeLabelValueArray = [ '1'=>'Active', '0'=>'Not active'];
    public static function getActiveLabelValueArray($key_return = true): array
    {
        if(!$key_return) {
            return self::$activeLabelValueArray;
        }
        $resArray = [];
        foreach (self::$activeLabelValueArray as $key => $value) {
            if ($key_return) {
                $resArray[] = ['key' => $key, 'label' => $value];
            }
        }
        return $resArray;
    }
    public static function getActiveLabel(string $active): string
    {
        if ( ! empty(self::$activeLabelValueArray[$active])) {
            return self::$activeLabelValueArray[$active];
        }
        return self::$activeLabelValueArray[0];
    }



    public function scopeGetByName($query, $name = null)
    {
        if (empty($name)) {
            return $query;
        }
        return $query->where( with(new Service)->getTable() . '.name', 'like', '%'.$name.'%');
    }

    /* check if provided name is unique for services.name field */
    public static function getSimilarServiceByName( string $name, int $id= null, bool $return_count = false )
    {
        $quoteModel = Service::where( 'name', $name );
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

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = workTextString($value);
    }


    public static function getValidationRulesArray($service_id= null) : array
    {
        $validationRulesArray = [
            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique(with(new Service)->getTable())->ignore($service_id),
            ],
            'label' => [
                'required',
                'string',
                'max:255',
                Rule::unique(with(new Service)->getTable())->ignore($service_id),
            ],
        ];
        return $validationRulesArray;
    } // public static function getValidationRulesArray($service_id= null) : array

}
