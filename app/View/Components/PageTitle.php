<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageTitle extends Component
{
    public $title;

    public function __construct($title = null)
    {
        $this->title = $title ?? config('app.name', 'IBNiti');
    }

    public function render()
    {
        return view('components.page-title');
    }
}