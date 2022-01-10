<?php

namespace App\Models;


use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Secret extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('\App\Models\User');
    }

}
