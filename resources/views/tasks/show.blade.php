@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Tarea ID: {{ $task->id }}</h1>
        <span class="badge bg-warning text-dark">{{ $task->priority?->name }}</span>
        <hr>
        <h2>{{ $task->name }}</h2>
        <p>{{ $task->description }}</p>
        <div>
            @foreach ($task->tags as $tag)
                <span class="badge bg-primary">{{ $tag->name }}</span>
            @endforeach
        </div>
        <hr>
        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary">Editar</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Regresar</a>

    </div>
@endsection
