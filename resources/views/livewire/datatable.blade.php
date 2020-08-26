<div class="mt-100">
    <table class="table" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>#</th>
            <th class="th-sm">Task
            </th>
            <th class="th-sm">Status
            </th>
            <th class="th-sm">Start date
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
</div>
