<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'student_id',
        'class_session_id',
    ];


    // Each attendance belong to one student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    // One attendance belong to one class session
    public function classSession()
    {
        return $this->belongsTo(ClassSession::class);
    }
}
