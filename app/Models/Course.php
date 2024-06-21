<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Lesson;
use App\Models\User;

class Course extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'title',
        'price',
        'category',
        'instructor_id',
        'difficulty_level',
        'img_thumbnail',
        'description',
        'learning_objectives',
        'requirements',
        'total_course_duration',
    ];


    // Define the relationship with User
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id');
    }

    // Define the relationship with Lessons
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}
