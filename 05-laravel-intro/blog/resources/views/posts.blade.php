<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    Posts
                </div>
            </header>

            <!-- Page Content -->
            <main class="">
                @foreach($posts as $post)
                <div class="m-4 bg-white shadow p-2.5 rounded">
                    <div>
                        @if($post->image)
                            <img src="{{ $post->get_image }}">
                        @elseif($post->iframe)
                            {!! $post->iframe !!}
                        @endif
                        <h5 class="text-2xl text-gray-700 font-semibold">{{ $post->title }}</h5>
                        <p class="text-gray-600">{{ $post->get_excerpt }}</p>
                        <a class="text-blue-400" href="{{ route('post', $post) }}">Leer más</a>
                    </div>
                    <p class="text-gray-700">
                        <em>&ndash; {{ $post->user->name }}</em>
                        {{ $post->created_at->format('d M Y')}}
                    </p>
                </div>
                @endforeach
                {{ $posts->links() }}
            </main>
        </div>
    </body>
</html>