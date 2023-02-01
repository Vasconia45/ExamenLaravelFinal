<tr>
    <td>{{ $driver->nombre }}</td>
    <td>{{ $driver->trip_id }}</td>
    <td>
        <form action="{{ route('deleteAsign', $driver->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-success">Delete</button>
        </form>
    </td>
</tr>