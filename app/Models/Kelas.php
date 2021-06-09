<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    // Table Name
    protected $table = 'kelas';
    protected $fillable = [
        'name_kelas', 'teacher_id', 'desc_kelas', 'name_topic', 'file_topic', 'name_video', 'file_video', 'name_kuis', 'studentSeen', 'studentFinished'
    ];

    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
