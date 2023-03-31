<!doctype html>
<html lang="en">

<head>
    @include('frontend.includes.header')
    @include('frontend.includes.css')

</head>

<body>
    <div class="body">

        {{-- @include('frontend.includes.sidebar') --}}
        @include('frontend.includes.navbar')

        <div role="main" class="main">
            @include('sweetalert::alert')

            @yield('content')

        </div>
        @include('frontend.includes.footer')
        @include('frontend.includes.scripts')
</body>

</html>
