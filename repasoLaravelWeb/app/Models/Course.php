<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\TeacherCourses;

class Course extends Model
{
    use softDeletes;

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function teacherCourses(){
        $this->hasMany(TeacherCourses::class, 'id_course');
    }
}
