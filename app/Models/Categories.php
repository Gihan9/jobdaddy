<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $table = 'Categories';

    public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }
}
