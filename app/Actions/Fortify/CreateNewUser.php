<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

//use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Actions\Fortify\CreatesNewUsers;

// /_wwwroot/lar/hostels4j/resources/fortify/CreatesNewUsers.php
use Spatie\Permission\Models\Permission;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param array $input
     *
     * @return \App\Models\User
     */
    public function create(array $input, bool $make_validation, array $hasPermissions)
    {
        if ($make_validation) {
            $userValidationRulesArray = User::getUserValidationRulesArray(null, ['status', 'password_confirmation']);
            if (\App::runningInConsole()) {
                unset($userValidationRulesArray['password_confirmation']);
            }

            $validator = Validator::make($input, $userValidationRulesArray);
            if ($validator->fails()) {
                $errorMsg = $validator->getMessageBag();
                if (\App::runningInConsole()) {
                    echo '::$errorMsg::' . print_r($errorMsg, true) . '</pre>';
                }

                return $errorMsg;
            }
        } // if($make_validation) {

        $newUserData = [
            'name'         => $input['name'],
            'email'        => $input['email'],
        ];

        if (isset($input['account_type'])) {
            $newUserData['account_type'] = $input['account_type'];
        }
        if (isset($input['phone'])) {
            $newUserData['phone'] = $input['phone'];
        }
        if (isset($input['website'])) {
            $newUserData['website'] = $input['website'];
        }
        if (isset($input['notes'])) {
            $newUserData['notes'] = $input['notes'];
        }

        if (isset($input['password'])) {
            $newUserData['password'] = Hash::make($input['password']);
        }
        if (isset($input['status'])) {
            $newUserData['status'] = $input['status'];
        }
        if (isset($input['confirmation_code'])) {
            $newUserData['confirmation_code'] = $input['confirmation_code'];
        }
        if (isset($input['activated_at'])) {
            $newUserData['activated_at'] = $input['activated_at'];
        }
        if (isset($input['avatar'])) {
            $newUserData['avatar'] = $input['avatar'];
        }

        try {
            DB::beginTransaction();

            $newUser = User::create($newUserData);
            foreach ($hasPermissions as $nextHasPermission) {
                $appAdminPermission = Permission::findByName($nextHasPermission);
                if ($appAdminPermission) {
                    $newUser->givePermissionTo($appAdminPermission);
                }

            }
            DB::commit();
            return $newUser;

        } catch (QueryException $e) {
            DB::rollBack();
            $errorMessages = new \Illuminate\Support\MessageBag;
            $errorMessages->add('name', $e->getMessage());
            if (\App::runningInConsole()) {
                echo 'ERROR:' . print_r($e->getMessage(), true) . '</pre>';
            }
            return $errorMessages;
        }
        return false;
    }
}
