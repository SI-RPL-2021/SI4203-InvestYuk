<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'course_name', 'course_desc', 'enroll_key', 'list_kelas'
    ];

    protected $casts = [
        'list_kelas' => 'array'
    ];
}
