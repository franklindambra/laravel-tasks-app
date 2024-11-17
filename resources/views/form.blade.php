@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')


@section('content')
<div>
<form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store')}}">
    @csrf

    @isset($task)
        @method('PUT')
    @endisset

    <div class="mb-4">
        <label for="title">Title</label>
        <input text="text" name="title" id="title" value="{{ $task->title ?? old('title')}}" 
        @class(['border-red-500' => $errors->has('title')])
        />
        
        @error('title')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4">
        <label for="description">description</label>
        <textarea text="text" name="description" id="description" rows="5" @class(['border-red-500' => $errors->has('description')])>
            {{ $task->description ?? old('description')}}
        </textarea>
        @error('description')
        <p class="error">{{$message}}</p>
        @enderror
    </div>


    <div class="mb-4">
        <label for="long_description">Long Description</label>
        <textarea text="text" name="long_description" id="long_description" rows="10" @class(['border-red-500' => $errors->has('long_description')])> {{ $task->long_description ?? old('long_description')}}</textarea>
        @error('long_description')
        <p class="error">{{$message}}</p>
        @enderror
    </div>

    <div class="mb-4 flex items-center gap-2">
        <button class="btn" type="submit">{{ isset($task) ? 'Update' : 'Create' }}</button>
        <a href="{{route('tasks.index')}}" class="link">Cancel</a>
    </div>
    

</form>

@endsection
