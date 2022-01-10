<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class UserProp extends Model
{
    protected $table      = 'user_props';
    protected $primaryKey = 'id';
    public $timestamps    = false;

    protected $fillable = [ 'user_id', 'name', 'value'];

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function scopeGetByUserId($query, $user_id= null)
    {
        if (!empty($user_id)) {
            $query->where(with(new UserProp)->getTable().'.user_id', $user_id);
        }
        return $query;
    }

    public static function getUserPropValidationRulesArray( $user_id, $user_prop_id, $user_prop_name) : array
    {
        $userTable = with(new User)->getTable();
        $validationRulesArray = [
            'user_id' => ['required', "exists:{$userTable},id"],
            'name' => [
                'required',
                'max:50',

                Rule::unique('user_props') // ->ignore($user_id, 'user_id')
                    ->where(function ($query) use ($user_id, $user_prop_name) {
                        return $query->where('user_id', $user_id)
                                     ->where('name', $user_prop_name);
                    })
            ],
            'value' => ['required', 'max:255'],
        ];
        return $validationRulesArray;
    }

}
