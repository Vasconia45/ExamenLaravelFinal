@extends('layouts.app')

@section('content')
    <div>
        <table class="table table-bordered">
            <thead>
                <th>Fecha</th>
                <th>Origen</th>
                <th>Destino</th>
            </thead>
            <tbody>
                @each('partials.trips', $trips, 'trip', 'partials.empty')
            </tbody>
        </table>
    </div>
@endsection