<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Task;
use Livewire\WithPagination;

class Datatable extends Component
{
    use WithPagination;

    /**
     * @var
     */
    public $sortBy = "name";
    public $sortDirection = 'desc';
    public $perPage = 5;


    public function render()
    {
        $tasks = Task::orderBy($this->sortBy, $this->sortDirection)
        ->paginate($this->perPage);

        return view('livewire.datatable', compact('tasks'));
    }

    public function sortBy($type)
    {
        if($this->sortDirection == 'desc'){
            $this->sortDirection = 'asc';
        }
        else{
            $this->sortDirection = "desc";
        }

        $this->sortBy = $type;
    }
}
