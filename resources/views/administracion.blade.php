@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Valoracion</th>
                <th>Kilometros</th>
                <th>Trip</th>
            </thead>
            <tbody>
                @each('partials.drivers', $drivers, 'driver', 'partials.empty')
            </tbody>
        </table>
    </div>
@endsection