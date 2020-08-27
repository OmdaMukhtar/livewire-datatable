<div style="margin-top:50px">

    <div class="row mb-2">
        <div class="col form-inline">
            Per page : &nbsp;
            <select wire:model="perPage" class="form-control">
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>1000</option>
            </select>
        </div>

        <div class="col-md-6">
            <input type="text" wire:model.debounce.30ms="search"
                class="form-control"
                placeholder="search task..">
        </div>
    </div>

    <table class="table bordered" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>#</th>
            <th wire:click="sortBy('name')"
                class="th-sm" style="cursor: pointer">Task
            </th>
            <th wire:click="sortBy('status')" class="th-sm" style="cursor: pointer">Status
            </th>
            <th wire:click="sortBy('created_at')" class="th-sm" style="cursor: pointer">Start date
            </th>
            <th class="text-center">Setting</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->created_at }}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-warning">
                        <span class="fa fa-pencil"></span>
                    </a>
                    <button wire:click="delete({{ $task->id }})" class="btn btn-danger">
                        <span class="fa fa-remove"></span>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-9">
            {{ $tasks->links() }}
        </div>
        <div class="col-md-3">
            shows {{ $tasks->firstItem() }} to {{ $tasks->lastItem() }} out of  {{ $tasks->total() }}
        </div>
    </div>

</div>
