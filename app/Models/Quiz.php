<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'question',
        'option_a',
        'option_b',
        'option_c',
        'correct_answer'
    ];

    // relasi ke course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
