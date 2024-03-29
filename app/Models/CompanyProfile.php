<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'Company_Profile';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'website',
        'location',
        'date',
        'phone',
        'profile_picture',
        'about',
        'email',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(Company::class);
    }
}
