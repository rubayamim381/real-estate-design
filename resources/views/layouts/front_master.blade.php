<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Real Estate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- niceadmin cdn --}}
    @include('layouts.partials.cdn')
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    @include('frontend.pages.includes.main_navbar')

    <main class="main">

        <section class="section dashboard">
            <div class="row mx-0">

                @yield('content')

            </div>
        </section>

    </main>

    @include('layouts.partials.script')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>
