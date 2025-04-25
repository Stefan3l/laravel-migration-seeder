@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('contenuto')
    
    <h1 class="text-center mt-5"> Lista dei treni </h1>

    <x-table :trains="$trains">
    </x-table>

@endsection