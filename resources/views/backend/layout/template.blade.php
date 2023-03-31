<!doctype html>
{{-- <html lang="en" class="color-sidebar sidebarcolor4 color-header headercolor5"> --}}
<html lang="en" class="semi-dark">

<head>
    @include('backend.includes.header')
    @include('backend.includes.css')

</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        @include('backend.includes.sidebar')
        @include('backend.includes.topbar')


        <!--start page wrapper -->
        <div class="page-wrapper">
            @include('sweetalert::alert')
            @yield('content')
            @include('backend.includes.footer')
        </div>

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        @include('backend.includes.switcher')
        @include('backend.includes.scripts')
</body>

</html>
