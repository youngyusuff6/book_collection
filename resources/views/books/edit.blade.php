@extends('layouts.app')
@section('title') Edit Book @endsection
@section('content')
    <x-navigation />
    @livewire('book-form', ['id' => $id])
@endsection

