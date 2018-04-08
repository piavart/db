@extends('layouts.app')

@section('content')

    @foreach ( $visits as $visit)
        {{ $visit->id }}<br>
        {{ $visit->ip }}<br>
        {{ $visit->user_agent }}<br>
        {{ var_dump( $visit->extend ) }}
        <br><br>
    @endforeach

@endsection
