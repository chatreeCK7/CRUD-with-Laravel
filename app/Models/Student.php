<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'student_id',
        'email',
        'mobile_number',
        'password'
    ];
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
