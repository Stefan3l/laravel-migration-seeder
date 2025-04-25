@extends('layouts.layout')

@section('title')
    Home
@endsection

@section('contenuto')
    <h1>Benvenuto nella home page</h1>
    <p>Questa è la home page del nostro sito.</p>   

    <x-table :trains="$trains">
    </x-table>

@endsection