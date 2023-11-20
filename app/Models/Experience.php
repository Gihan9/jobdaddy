<?php

namespace App\Models;


use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model implements AuthenticatableContract
{
    use Authenticatable;
    protected $table = 'Experience';

    protected $fillable = [
        'job_title', 'company_name', 's_date', 'e_date', 'location',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
