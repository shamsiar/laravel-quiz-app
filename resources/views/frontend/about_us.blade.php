@extends('frontend.layout.template')

@section('content')

<section class="page-header page-header-classic" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">About</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">About Us</h1>

            </div>
        </div>
    </div>
</section>

<div class="container pb-1">

    <div class="row pt-4">
        <div class="col">
            <div class="overflow-hidden mb-3">
                <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" style="animation-delay: 100ms;">
                    <span>The New Way to </span>
                    <span class="word-rotator-words bg-primary" style="width: 144.75px;">
                        <b class="is-hidden">Success</b>
                        <b class="is-hidden">Advance</b>
                        <b class="is-visible">Progress</b>
                    </span>
                </h2>
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-lg-10">
            <div class="overflow-hidden">
                <p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="250" style="animation-delay: 250ms;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non <span class="alternative-font">metus.</span> pulvinar. Sociis natoque penatibus et magnis dis parturient montes.
                </p>
            </div>
        </div>
        <div class="col-lg-2 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="450" style="animation-delay: 450ms;">
            <a href="#" class="btn btn-modern btn-primary mt-1">Join Our Team!</a>
        </div>
    </div>
</div>


<section class="section section-default border-0 my-5 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="animation-delay: 750ms;">
    <div class="container py-4">

        <div class="row align-items-center">
            <div class="col-md-6 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                <div class="owl-carousel owl-theme nav-inside mb-0 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}" style="height: auto;">


                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-920px, 0px, 0px); transition: all 0s ease 0s; width: 2760px;">
                            <div class="owl-item active" style="width: 450px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid" src="{{ asset('frontend/img/generic/generic-corporate-3-2-full.jpg') }}">
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 450px; margin-right: 10px;">
                                <div>
                                    <img alt="" class="img-fluid" src="{{ asset('frontend/img/generic/generic-corporate-3-3-full.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="owl-dots">
                        <button role="button" class="owl-dot active"><span></span></button>
                        <button role="button" class="owl-dot"><span></span></button>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-dark font-weight-normal text-5 mb-0 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1200" style="animation-delay: 1200ms;">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                </div>
                <p class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400" style="animation-delay: 1400ms;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam <a href="#">vehicula</a> sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam. Donec ante risus, dapibus sed lectus non, lacinia vestibulum nisi. Morbi vitae augue quam. Nullam ac laoreet libero.</p>
                <p class="mb-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600" style="animation-delay: 1600ms;">Consectetur adipiscing elit. Aliquam iaculis sit amet enim ac sagittis. Curabitur eget leo varius, elementum mauris eget, egestas quam.</p>
            </div>
        </div>

    </div>
</section>


@endsection
