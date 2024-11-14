@extends('layouts.app')

@section('title', 'Task list')



@section('content')

<div>
    <div>
        <ul>
        @forelse ($tasks as $task)
       <li>
            <a href="{{ route('tasks.show', ['id' => $task]) }}">{{ $task->title }}</a>
       </li>
        @empty
            <p>No tasks</p>
        @endforelse
    </ul>
    </div>
</div>

@endsection
