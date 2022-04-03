<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    // One class has many students
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    // One class has many lecturer
    public function lecturers()
    {
        return $this->hasMany(Lecturer::class);
    }

    // One class has many class sessions
    public function classSessions()
    {
        return $this->hasMany(ClassSession::class);
    }
}
