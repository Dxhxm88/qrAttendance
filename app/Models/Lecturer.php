<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'avatar',
        'staff_id',
        'google_id',
    ];


    // One lecturer has many class sessions
    public function class_sessions()
    {
        return $this->hasMany(ClassSession::class);
    }


    // One lecturer belong to many class
    public function classs()
    {
        return $this->belongsToMany(Classs::class);
    }
}
