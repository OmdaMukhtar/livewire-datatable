<div style="margin-top:100px">

    <div class="row">
        <div class="col form-online">
            Per page : &nbsp;
            <select wire:model="perPage">
                <option value="">5</option>
                <option value="">10</option>
                <option value="">25</option>
                <option value="">50</option>
                <option value="">1000</option>
            </select>
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

    <div>
        shows {{ $tasks->firstItem() }} to {{ $tasks->lastItem() }} out of  {{ $tasks->total() }}
    </div>
    {{ $tasks->links() }}

</div>
