@extends('layouts.app')

@section('content')
<div>
    <form action="{{ route('asign') }}" method="POST">
        @csrf
        <select id="trips" class="form-control" name="trips" value="{{ old('trips') }}" autocomplete="genero">
            @foreach($trips as $trip)
            <option value="{{ $trip->id }}">{{ $trip->id }}</option>
            @endforeach
        </select>



        <select id="drivers" class="form-control" name="drivers" value="{{ old('drivers') }}" autocomplete="genero">
            @foreach($drivers as $driver)
            <option value="{{ $driver->id }}">{{ $driver->nombre }}</option>
            @endforeach
        </select>
        <button class="btn btn-success">Asign</button>
    </form>

    <table class="table table-bordered">
        <thead>
            <th>Nombre</th>
            <th>ID Trip</th>
        </thead>
        <tbody>
            @each('partials.AsignDrivers', $drivers, 'driver', 'partials.empty')
        </tbody>
    </table>
</div>
@endsection