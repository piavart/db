@extends('layouts.app')

@section('content')

    @foreach ( $visits as $visit)
        {{ $visit->ip }}<br>
        {{ $visit->user_agent }}<br>

        <br><br>
    @endforeach

@endsection
