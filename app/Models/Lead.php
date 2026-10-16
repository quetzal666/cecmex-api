<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'course_id',
        'message',
        'status',
    ];

    // Un prospecto puede estar interesado en un curso
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}