<?php

namespace App\Livewire\Courses;

use Livewire\Component;
use App\Models\Course;

class CourseList extends Component
{
    public $courses;

    public function mount()
    {
        // Fetch the courses from the database
        $this->courses = Course::all();
    }

    public function render()
    {
        return view('livewire.courses.course-list', ['courses' => $this->courses]);
    }
}