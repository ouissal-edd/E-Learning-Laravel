<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // cat
    public function cat()
    {
        return $this->belongsTo('App\Models\Cat');
    }

    // course belogs to one trainer
    public function trainer()
    {
        return $this->belongsTo('App\Models\Trainer');
    }

    // course has many students
    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }

}
