@extends('frontend.layout.template')

@section('content')

<section class="page-header page-header-classic" style="padding-top: 100px; margin:0;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Tests</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">Tests</h1>

            </div>
        </div>
    </div>
</section>

<section class="section border-0 my-0">
    <div class="row">
        <div class="col-11 mx-auto">

            <div class="blog-posts text-center">

                <h2 class="font-weight-bold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">Coding Skill Tests</h2>
                <hr>
                <div class="row">

                    @foreach ($tests as $test)
                    <div class="col-md-4 col-lg-4 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

                        <div class="card card-background-image-hover border-0 h-100" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }}); box-shadow: 0 3px 15px black;">

                            <div class="thumb-info-price bg-color-secondary font-weight-semibold" style="">

                                <span>FREE</span>
                            </div>

                            <div class="card-body text-center p-5">
                                <i class="icon-layers icons text-color-primary text-10"></i>
                                <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold">{{ $test->title }}</h4>
                                <p class="card-text">{{ $test->description }}</p>
                                <a href="{{ route('test.view', $test->id) }}" class="btn btn-primary btn-modern">View Test</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>

    </div>

</section>



@endsection
