@extends('layout')
@section('title', 'Projector - lightweight project manager')

@section('content')
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                @include('widgets.favorite-projects', ['projects' => $projects])
            </div>
            <div class="column">
                @include('widgets.important-tasks', ['tasks' => $tasks])
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column">
                @include('widgets.latest-activity', ['latest_activities' => $latest_activities])
            </div>
            <div class="column"></div>
        </div>
    </div>
</section>
@endsection
