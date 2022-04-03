<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $fillable = [
        'checkin_code',
        'checkout_code',
        'class_session_id',
    ];

    // one qrcode belong to one class session
    public function classSession()
    {
        return $this->belongsTo(ClassSession::class);
    }
}
