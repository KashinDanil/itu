@extends('layout')
@section('title', 'Projects')

@section('content')
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <x-generic-panel>
                        <x-slot name="title">Projects</x-slot>
                        @include('components.project-list', ['projects' => $projects])
                    </x-generic-panel>
                </div>
            </div>
        </div>
    </section>
@endsection
