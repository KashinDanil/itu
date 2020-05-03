@extends('layout', ['project' => $task->project])
@section('title', $task->name . ' - ' . $task->project->name)

@section('content')
    <section class="section">
        <div class="container">

            @if (session('message'))
                <div class="notification is-success">
                    <button class="delete"></button>
                    {{ session('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="notification is-danger">
                    <button class="delete"></button>
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <a href="{{ $task->project->path() }}" class="tag is-info">#{{ $task->project->name }}</a>
            @foreach($task->tags as $tag)
                <a href="{{ $tag->path() }}" class="tag tag--{{ $tag->slug }}">#{{ $tag->name }}</a>
            @endforeach

            <h1 class="title is-2">{{ $task->name }}</h1>

            <div class="app__task-summary">
                <div class="app__task-summary-item">
                    <strong>Assignee:</strong> {{ $task->assignee->name }}
                </div>
                <div class="app__task-summary-item">
                    <strong>Priority:</strong> {{ $task->priority->name }}
                </div>
            </div>

            <div class="content app__task-description">
                {{ $task->description }}
            </div>

            <div class="js-comments-list app__task-comments">
                <comments-list
                    load-url="{{ route('comments.index', ['project' => $task->project, 'task' => $task]) }}"
                    post-url="{{ route('comments.create', ['project' => $task->project, 'task' => $task]) }}">
                </comments-list>
            </div>

        </div>
    </section>
@endsection
