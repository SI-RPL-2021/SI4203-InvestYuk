<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAndCourses extends Model
{
    use HasFactory;

    protected $table = 'user_and_courses';

    protected $fillable = [
        'id', 'course_name', 'id_course', 'id_user', 'status'
    ];
}
