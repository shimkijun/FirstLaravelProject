@extends('layouts.app')

@section('title','tasks list')

@section('content')
    <h2 class="font-bold text-3xl">Task List</h2>
    <ul class="flex lg-4">
        @foreach($tasks as $task)
            <li class="w-1/4 mx-2">
                <a href="/tasks/{{$task-> id}}">
                    <div class="rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://picsum.photos/200" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $task-> title }}</div>
                            <p class="text-gray-700 text-base">
                                {{ $task-> body }}
                            </p>
                        </div>
                        <div class="px-6 py-4">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $task-> created_at}}</span>
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $task-> updated_at}}</span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection