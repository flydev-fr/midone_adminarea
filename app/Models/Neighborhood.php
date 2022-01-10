<?php

namespace App\Models;

use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use Illuminate\Database\Eloquent\Model;

class Neighborhood extends Model
{
    use SpatialTrait;

    protected $fillable = [
        'name',
        'geometry',
    ];

    protected $spatialFields = [
        'geometry'
    ];
}
