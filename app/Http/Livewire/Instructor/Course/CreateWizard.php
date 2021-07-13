<?php

namespace App\Http\Livewire\Instructor\Course;

use Livewire\Component;

class CreateWizard extends Component
{
    public $page;
    
    protected $listeners = 
    [
        'changePage'
    ];

    public function mount()
    {

    }

    public function render()
    {
        return view('livewire.instructor.course.create-wizard')
            ->layout('layouts.wizard');
    }

    public function changePage($page)
    {
        $this->page = $page;
    }

}
