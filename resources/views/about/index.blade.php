

<!-- @extends('layouts.master')

@section('title', 'About Me')

@section('content')
    <header>
        <h1>About Me</h1>
    </header>

    <section>
        <h2>Introduction</h2>
        <p>
            Hi there! I'm Ifthakhar Ahmed, a web developer with a passion for creating beautiful and functional websites.
            I have a background in Computer Science adn Engineering and 1 year of work experience.
        </p>
    </section>

    <section>
        <h2>Education</h2>
        <p>
            East West University
            <p>
                Computer Science and Engineering
            </p>
        </p>
    </section>

    <section>
        <h2>Work Experience</h2>
        <ul>
            Bista Solution Inc.
            Aug-2022 to Dec-2022</p>
            <li>Successfully completed basic ODOO.</li>
            <li>Completed basic Projects in ODOO.</li>
            <li>Improved communication skills</li>
        </ul>
    </section>

    <section>
        <h2>Certifications</h2>
        <p>
            [I will add later]
        </p>
    </section>
@endsection -->


@extends('layouts.master')

@section('title', 'About Me')

@section('content')
    <header>
        <h1>About Me</h1>
    </header>

    <section>
        <h2>Introduction</h2>
        <p>
            Hi there! I'm {{ $name }}, a web developer with a focus on Laravel.
            {{ $description }}
        </p>
    </section>

    <section>
        <h2>Education</h2>
        <p>
            {{ $education }}
        </p>
    </section>

    <section>
        <h2>Work Experience</h2>
        <p>
            {{ $workExperience }}
        </p>
    </section>

    <section>
        <h2>Certifications</h2>
        <p>
            {{ $certifications }}
        </p>
    </section>
@endsection