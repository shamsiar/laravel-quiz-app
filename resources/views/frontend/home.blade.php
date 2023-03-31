@extends('frontend.layout.template')

@section('content')
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url({{ asset('frontend/img/page-header/page-header-background-transparent.jpg') }});">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 style="color:black;">UNIC<strong class="font-weight-extra-bold">MINDS</strong></h1>
            </div>
            <div class="col-md-12 align-self-center p-static order-2 text-center">

                <h1 style="">Online Coding Tests for Kids & Teens</h1>
            </div>
            {{-- <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Features</li>
                    </ul>
                </div> --}}
        </div>
    </div>
</section>

<div class="container py-4">

    <section class="section bg-color-light border-0 my-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center">
                    <h2 class="font-weight-bold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">About Us</h2>
                    <p class="text-color-dark pb-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1700" style="animation-delay: 1700ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam. Pellentesque id finibus elit, vitae finibus est. Sed mollis orci eget ex euismod vulputate. Praesent fermentum dignissim congue. Praesent sapien mi.</p>
                    <a href="{{ route('about_us') }}" class="btn btn-primary text-1 btn-outline custom-btn-style-1 font-weight-semibold appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1900" data-plugin-options="{'accY': 100}" style="animation-delay: 1900ms;">READ MORE</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section border-0 my-0">
        <div class="row">
            <div class="col">
                <div class="blog-posts text-center">

                    <h2 class="font-weight-bold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" style="animation-delay: 1500ms;">Coding Skill Tests</h2>


                    {{-- <h3 class="text-center mb-4"> </h3> --}}
                    <hr>
                    <div class="row">

                        @foreach ($tests as $test)
                        <div class="col-md-4 col-lg-4 mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

                            <div class="card card-background-image-hover border-0" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }});">
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

                    {{-- <div class="row">
                        <div class="col">
                            <ul class="pagination float-right">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </ul>
                        </div>
                    </div> --}}

                </div>
            </div>

        </div>

    </section>



</div>
@endsection
