<?php

namespace App\Http\Livewire\Instructor;

use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        return view('livewire.instructor.courses')
            ->layout('layouts.app');
    }
}
