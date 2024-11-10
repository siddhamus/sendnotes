<?php

namespace App\Livewire;

use Livewire\Component;

class LessonShow extends Component
{
    public $lesson;

    public function mount($lessonId)
    {
        $this->lesson = Lesson::findOrFail($lessonId);
    }

    public function render()
    {
        return view('livewire.lesson-show', ['lesson' => $this->lesson]);
    }
}
