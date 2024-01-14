<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'Jobs';

    protected $fillable = [
        'user_id',
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
        'filter',
        'phone',
        'artwork', 
        'keyword1',
        'keyword2',
        'keyword3',
        'keyword4',
        'keyword5',
        // Add other fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(Company::class);
    }

    public function keywords()
    {
        return $this->hasMany(Keyword::class);
    }

    protected $casts = [
        'created_at' => 'datetime',
    ];
}
