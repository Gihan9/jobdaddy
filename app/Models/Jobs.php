<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'Jobs';

    protected $fillable = [
        'company_id',
        'position',
        'company_name',
        'company_logo',
        'category', 
        'description',
        'website',
        'em_type',
        'work_type',
        'salary',
        'location',
        'phone',
        'artwork', 
        'keyword1',
        'keyword2',
        'keyword3',
        'keyword4',
        'keyword5',
        // Add other fields as needed
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }
}
