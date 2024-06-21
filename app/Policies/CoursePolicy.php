<?php

namespace App\Policies;

use App\Models\Course;
use App\Models\User;

class CoursePolicy
{

    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    
    public function view(User $user, Course $course)
    {
        return $user->hasPermissionTo('view courses');
    }

    public function create(User $user)
    {
        return $user->hasPermissionTo('create courses');
    }

    public function update(User $user, Course $course)
    {
        return $user->hasPermissionTo('edit courses') || $user->id === $course->instructor_id;
    }

    public function delete(User $user, Course $course)
    {
        return $user->hasPermissionTo('delete courses') || $user->id === $course->instructor_id;
    }
}

    
