@extends('layouts.app')

@section('title', 'Task list')

@section('content')

<div>

<nav class="mb-4">
    <a href={{route('tasks.create')}} class="link">Create Task</a>
</nav>

<div>
    <div>
        <ul>
        @forelse ($tasks as $task)
       <li>
            <a href="{{ route('tasks.show', ['task' => $task->id]) }}" @class(['line-through' =>$task->completed])>{{ $task->title }}</a>
       </li>
        @empty
            <p>No tasks</p>
        @endforelse
    </ul>
    </div>

@if ($tasks->count())

<nav class="mt-4">{{$tasks->links()}}</nav>

@endif

</div>

@endsection
