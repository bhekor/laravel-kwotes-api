@extends('layouts.app')

@section('title', 'Welcome Kwotes Site!')

@section('content')

    <!-- Banner -->
        <section id="banner">
            <div class="content">
                <header class="mb-4">
                    <h1 class="font-bolder text-5xl py-4 mb-3">Welcome, Kwotes<br />
                    by Bhekor</h1>
                    <p>A libary of all popular quotes from different authors and popular icons.</p>
                </header>
                <p>
                    <ol>
                        <li>1. List of Kwotes</li>
                        <li>2. API Resources</li>
                        <li>3. Authentication</li>
                        <li>4. CRUD Functionality</li>
                    </ol>
                    <strong>Base Endpoint:</strong> /api/v1/kwotes
                </p>
                <ul class="actions mt-4">
                    <li><a href="#" class="button big">Learn More</a></li>
                </ul>
            </div>
            <span class="image object">
                <img src="{{ asset('images/pic10.jpg') }}" alt="" />
            </span>
        </section>

    <!-- Section -->
        <section>
            <header class="major">
                <h2 class="text-2xl font-medium">Popular Kwotes</h2>
            </header>
            <div class="posts">

            </div>
        </section>

@endsection