<!doctype html>
<html lang="en">

@include('public.includes.public_header')

    <body class="topics-listing-page" id="top">

        <main>

        @include('public.includes.public_nav')

        @yield('content')


        @include('public.includes.footer')

</body>
</html>
