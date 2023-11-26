@extends('layouts.master')

@section('title', 'Contact Me')

@section('content')
    <header>
        <h1>Contact Me</h1>
        <p>Have a question or want to collaborate? Feel free to reach out!</p>
    </header>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section>
        <form action="/contact" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="message">Message:</label>
            <textarea name="message" id="message" rows="4" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </section>
@endsection
