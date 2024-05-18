@extends('layouts.frontend.app')

@section('title')
{{ $title }}
@endsection


@section('content')
    {{ $slot }}
@endsection