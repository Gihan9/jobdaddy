<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobseeker extends Model
{
    protected $table = 'Jobseekers';

    protected $fillable = ['name', 'age', 'sex', 'marital_status', 'designation', 'phone', 'location', 'profile_picture', 'cv_path'];
    public function user()
    {
        return $this->belongsTo(Jobuser::class);
    }
}
