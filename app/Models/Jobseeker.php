<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    protected $table = 'Jobseekers';

    protected $fillable = ['name', 'age', 'sex', 'marital_status', 'designation', 'phone', 'location', 'profile_picture', 'cv_path', 'salary_range'];
    public function user()
    {
        return $this->belongsTo(Jobuser::class);
    }


    public function skills()
    {
        return $this->hasMany(Skill::class, 'user_id');
    }
}
