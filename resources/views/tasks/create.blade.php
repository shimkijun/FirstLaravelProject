@extends('layouts.app')

@section('title','Create Task')

@section('content')
    <h2 class="font-bold text-3xl">Create Task</h2>
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="/tasks" method="post">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                    Title
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                 @error('title') border border-red-700 @enderror" 
                id="title" type="text" placeholder="title" name="title" value="{{ old('title') ? old('title') : '' }}" >
                @error('title')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body" >
                    Body
                </label>
                <textarea class="shadow appearance-none borde rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-full
                @error('body') border border-red-700 @enderror"
                id="body" name="body" placeholder="body" >{{ old('body') ? old('body') : '' }}</textarea>
                @error('body')
                    <span class="text-red-700">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Submit
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2019 Acme Corp. All rights reserved.
        </p>
    </div>
@endsection