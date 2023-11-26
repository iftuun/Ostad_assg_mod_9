@extends('layouts.master')

@section('title', 'Projects')

@section('content')
    <header>
        <h1>Projects</h1>
    </header>

    <section>
        @forelse ($projects as $project)
            <div class="project">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                @if ($project->image)
                    <img src="{{ $project->image }}" alt="{{ $project->title }}">
                @endif
                @if ($project->url)
                    <p><a href="{{ $project->url }}" target="_blank">Visit Project</a></p>
                @endif
            </div>
        @empty
            <p>No projects available.</p>
        @endforelse
    </section>
@endsection

