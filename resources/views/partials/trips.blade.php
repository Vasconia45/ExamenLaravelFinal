<tr>
    <td>{{ $trip->fecha }}</td>
    <td>{{ $trip->origen }}</td>
    <td>{{ $trip->destino }}</td>
    <td>
        <form action="" method="POST">
        @csrf
        <button class="btn btn-success">Comprar</button>
        </form>
    </td>
    <td>Plazas restantes: {{ $trip->plazas }}</td>
</tr>