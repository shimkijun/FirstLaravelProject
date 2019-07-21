@extends('layouts.app')

@section('title','Create detail')

@section('content')
    <h2 class="font-bold text-3xl">Detail Task</h2>
    {{ $task-> title}} <br>
    {{ $task-> body}} <br>
    <a href="/tasks/{{ $task->id}}/edit">edit</a><br>
    <form action="/tasks/{{ $task->id}}" method="POST">
        @method('DELETE')
        @csrf
        <button>delete</button>
    </form>
@endsection