<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'avatar',
        'student_id',
        'google_id',
        'classs_id',
    ];


    // One student belong to one class
    public function classs()
    {
        return $this->belongsTo(Classs::class);
    }

    // One student has many attendance
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}
