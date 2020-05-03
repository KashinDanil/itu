@extends('layout')
@section('title', $project->name . ' - tasks')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <h1 class="title is-2">{{ $project->name }} - tasks</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="section is-paddingless">
        <div class="container">
            <div class="columns">
                <div class="column">
                    @include('widgets.tasks', ['tasks' => $project->tasks()->orderBy('priority_id', 'desc')->get()])
                </div>
            </div>
        </div>
    </section>
@endsection
