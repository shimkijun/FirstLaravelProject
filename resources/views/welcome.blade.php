@extends('layout')

@section('title')
    home
@endsection

@section('contents')
main page
    @foreach($books as $book)
    <li>{{ $book }}</li>
    @endforeach
@endsection