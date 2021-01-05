@extends('layouts.app')

@section('title', 'All Kwotes')

@section('content')

    <!-- Section -->
        <section>
            <div class="posts">
                @foreach ($quotes as $quote)
                <article>
                    <div>
                        <p class="border-l-4 border-solid border-red-400 pl-2">
                            {{ $quote->quote }}
                        </p>
                    </div>
                    <p class="actions mt-4 font-bold italic">
                        {{ $quote->author }}
                    </p>
                    <p class="text-right">Likes: {{ $quote->likes }}</p>
                </article>
                @endforeach
                
            </div>
        </section>

@endsection