<div style="margin-top:100px">

    <div class="row mb-2">
        <div class="col form-inline">
            Per page : &nbsp;
            <select wire:model="perPage" class="form-control">
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
                <option value="">1000</option>
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
          </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->created_at }}</td>
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
