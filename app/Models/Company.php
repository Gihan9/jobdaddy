<?php

namespace App\Models;


use Illuminate\Auth\EloquentUserProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use Notifiable;
    protected $table = 'Company';

    protected $fillable = [
         'phone', 'password', 
    ];

    /**
     * Validate the user credentials.
     *
     * @param  mixed  $user
     * @param  array  $credentials
     * @return bool
     */
    public function validateCredentials($user, array $credentials)
    {
        return password_verify($credentials['password'], $user->getAuthPassword());
    }

    public function companyProfile()
    {
        return $this->hasOne(CompanyProfile::class);
    }

    public function companyQnAs()
    {
        return $this->hasMany(Companyqa::class);
    }
}


