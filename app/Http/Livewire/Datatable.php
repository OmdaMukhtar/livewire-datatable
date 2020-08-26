<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;

class Datatable extends Component
{
    public function render()
    {
        $tasks = Task::all();
        return view('livewire.datatable', compact('tasks'));
    }
}
