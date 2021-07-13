<?php

namespace App\Http\Livewire\Instructor\Course\Create;

use Livewire\Component;

class Type extends Component
{
    public function render()
    {
        return view('livewire.instructor.course.create.type');
    }

    public function continue()
    {
        $this->emitUp('changePage', 'info');
    }
}
