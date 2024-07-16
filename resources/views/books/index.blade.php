@extends('layouts.app')
@section('title') All Books @endsection

@section('content')
    <x-navigation />
    @livewire('books-index')
@endsection
