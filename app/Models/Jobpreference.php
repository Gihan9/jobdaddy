<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobpreference extends Model
{
    protected $table = 'Jobpreference';

    protected $fillable = [
        'job',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
