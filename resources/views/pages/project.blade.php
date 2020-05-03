@extends('layout')
@section('title', $project->name)

@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                <h1 class="title is-2">{{ $project->name }}</h1>
                <p>{{ $project->description }}</p>
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
        <div class="columns">
            <div class="column">
                @include('widgets.latest-activity', ['latest_activities' => $latest_activities])
            </div>
            <div class="column">
                @include('widgets.project-members', ['members' => $project->members])
            </div>
        </div>
    </div>
</section>
@endsection
