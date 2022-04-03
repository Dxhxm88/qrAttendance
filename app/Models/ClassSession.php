<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session_start',
        'session_end',
        'lecturer_id',
        'classs_id',
    ];


    // One class session belong to one lecturer
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class);
    }

    // One class session belong to one class
    public function classs()
    {
        return $this->belongsTo(Classs::class);
    }

    // One class session has many attendance
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    // One class session has one qrcode
    public function qrcode()
    {
        return $this->hasOne(Qrcode::class);
    }
}
