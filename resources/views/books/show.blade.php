@extends('layouts.app')
@section('title', $book.'`s book')
@section('content')

    <x-navigation />
    @livewire('book-show', ['id' => $id])
@endsection
