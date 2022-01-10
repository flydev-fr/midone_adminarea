<?php

namespace App\Actions\Fortify;

interface CreatesNewUsers
{
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return mixed
     */
    public function create(array $input, bool $make_validation, array $hasPermissions);
}
