<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // belogs to many courses
    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

}
