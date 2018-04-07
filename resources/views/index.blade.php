@extends('layouts.app')

@section('content')

    @foreach ( $visits as $visit)
        {{ $visit->id }}<br>

        <br><br>
    @endforeach

@endsection
