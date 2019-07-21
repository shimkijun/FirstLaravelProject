@extends('layout')

@section('title')
    project
@endsection

@section('contents')
    <h2>Proejct List</h2>
    @foreach($projects as $project)
        Title : {{ $project->title }} <br>
        Description : {{ $project->description }}<br>
    @endforeach
@endsection