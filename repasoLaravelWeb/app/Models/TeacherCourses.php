<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
use App\Models\Teacher;
use App\Models\Course;

class TeacherCourses extends Model
{
    use softDeletes;

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function teacher(){
        return $this->belongsTo(Teacher::class, 'id_teacher');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'id_course');
    }
}
