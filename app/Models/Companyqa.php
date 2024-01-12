<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companyqa extends Model
{
   
    use HasFactory;

     protected $table = 'Companyqa';

    protected $fillable = ['user_id', 'question', 'answer'];

    public function user()
    {
        return $this->belongsTo(Company::class);
    }
}
