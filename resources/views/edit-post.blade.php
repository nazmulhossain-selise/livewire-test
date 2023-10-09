@extends('layout')

@section('content')
    @livewire('EditPost', ['post' => $post])
@endsection