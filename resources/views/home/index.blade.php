@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <header>
        <h1>Welcome to My Portfolio</h1>
    </header>

    <section>
        <h2>About Me</h2>
        <p>
            Hi there! I'm {{ $name }}.</p>
            {{$summary}}</p>
            {{$nb}}
        </p>
    </section>
@endsection
