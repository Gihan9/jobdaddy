<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;



class Jobuser extends Model implements AuthenticatableContract
{

    use Authenticatable;

    protected $fillable = ['name', 'email', 'password'];
    protected $table = 'Jobuser';

    public function profile()
    {
        return $this->hasOne(Jobseeker::class);
    }
}
