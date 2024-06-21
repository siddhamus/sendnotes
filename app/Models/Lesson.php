<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'course_id',
        'description',
        'duration',
        'status',
        // Add other attributes as necessary
    ];

    // Define the relationship with Course
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
