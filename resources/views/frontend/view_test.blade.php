@extends('frontend.layout.template')

@section('content')
<section class="page-header page-header-classic" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Test</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">View Test</h1>

            </div>
        </div>
    </div>
</section>

<div class="container py-4">

    <div class="row">
        <div class="col">
            <div class="blog-posts">

                <div class="col-md-6 col-lg-6 mx-auto mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

                    <div class="card card-background-image-hover border-0" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }});">
                        <div class="card-body text-center p-5">
                            <i class="icon-layers icons text-color-primary text-10"></i>
                            <h4 class="card-title mt-2 mb-2 text-5 font-weight-bold">{{ $test->title }}</h4>
                            <p class="card-text">{{ $test->description }}</p>

                            <ul class="list list-icons list-primary list-borders text-left">
                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Duration:</strong> {{ $test->duration }} Minutes.
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Questions:</strong> {{ $test->number_of_questions }}
                                </li>
                                <li>
                                    <i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Pass
                                        Mark:</strong> {{ $test->pass_mark }}
                                </li>

                            </ul>

                            <p class="card-text">If the question is unanswered, then it will be considered as an incorrect response.<br>
                                All the best!
                            </p>
                            <a href="{{ route('test.start', $test->id) }}" class="btn btn-primary btn-modern"> Start Test </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
