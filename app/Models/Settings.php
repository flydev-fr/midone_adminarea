<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Library\CheckValueType;


class Settings extends Model
{
    protected $table      = 'settings';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'value', 'updated_at',
    ];



    public static function scopeGetByName($query, $name)
    {
        return $query->where(with(new Settings)->getTable() . '.name', '=', $name);
    }

    public static function getValue($name, int $checkValueType= null, $default_value = null)
    {
        $settingsValue = Settings::getByName($name)->first();
        if (empty($settingsValue->value)) {
            return $default_value;
        }
        return $settingsValue->value;
    }

}
