<?php

namespace App\Http\Livewire\Instructor\Course\Create;

use Livewire\Component;

class Info extends Component
{
    public function render()
    {
        return view('livewire.instructor.course.create.info');
    }

    public function next()
    {
        $this->emitUp('changePage', 'category');
    }

    public function prev()
    {
        $this->emitUp('changePage', 'type');
    }
}
