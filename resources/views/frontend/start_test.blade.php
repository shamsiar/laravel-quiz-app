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
                <h1 data-title-border="">Start Test</h1>

            </div>
        </div>
    </div>
</section>



<section class="section border-0 my-0 py-0">


    <div class="col-md-10 col-lg-10 col-sm-12 mx-auto mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

        <div class="card card-background-image-hover border-0" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }});">


            <div class="card-body text-center">
                <div class="d-flex justify-content-between">

                    <div class="">
                        <i class="icon-layers icons text-color-primary text-10"></i>
                        <h4 class="card-title mt-2 mb-3 text-5 font-weight-bold">{{ $test->title }}</h4>

                    </div>
                    <div class="">
                        <div class="badge badge-warning badge-md">
                            <h1 class='timer m-0 font-weight-bold' style="display: inline-flex;" data-minutes-left={{
                                $test->duration }}></h1>
                        </div>

                    </div>
                </div>




                <form action="{{ route('test.result') }}" id="text_form" method="post">
                    @csrf
                    <input type="hidden" name="test_id" value="{{ $test->id }}">
                    @php
                    $i = 1;
                    @endphp
                    @foreach ($questions as $q)
                    <div class="mb-3 appear-animation animated bounceInRight appear-animation-visible q-{{ $i }}" data-appear-animation="bounceInRight" data-appear-animation-delay="0" data-appear-animation-duration="1s" style="animation-duration: 1s; animation-delay: 0ms; display:none;">


                        <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 text-left">
                            <div class="card-body">
                                <h4 class="card-title mb-3 text-4 font-weight-bold">{{ $i++ }}.
                                    {{ $q->question }}</h4>

                                <ul class="list list-primary list-borders mcq-list text-4 text-dark">

                                    <li class="d-flex">
                                        <label>

                                            <input type="radio" name="answers[{{ $q->id }}]" style="" value="1">
                                            @if ($q->is_image)
                                            <img src="{{ asset('question_images/' . $q->option_1) }}" class="img-fluid img-thumbnail" alt="">
                                            @else
                                            {{ $q->option_1 }}
                                            @endif
                                        </label>
                                    </li>


                                    <li class="d-flex">

                                        <label>

                                            <input type="radio" name="answers[{{ $q->id }}]" value="2">
                                            @if ($q->is_image)
                                            <img src="{{ asset('question_images/' . $q->option_2) }}" class="img-fluid img-thumbnail" alt="">
                                            @else
                                            {{ $q->option_2 }}
                                            @endif
                                        </label>

                                    </li>


                                    <li class="d-flex">
                                        <label>

                                            <input type="radio" name="answers[{{ $q->id }}]" value="3">

                                            @if ($q->is_image)
                                            <img src="{{ asset('question_images/' . $q->option_3) }}" class="img-fluid img-thumbnail" alt="">
                                            @else
                                            {{ $q->option_3 }}
                                            @endif
                                        </label>
                                    </li>

                                    <li class="d-flex">

                                        <label>


                                            <input type="radio" name="answers[{{ $q->id }}]" value="4">
                                            @if ($q->is_image)
                                            <img src="{{ asset('question_images/' . $q->option_4) }}" class="img-fluid img-thumbnail" alt="">
                                            @else
                                            {{ $q->option_4 }}
                                            @endif
                                        </label>
                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-modern btn-rounded btn-tertiary mb-2 next">Next<i class="icon-arrow-right icons ml-2"></i><i class="icon-arrow-right icons"></i></button>

                        </div>

                    </div>
                    @endforeach

                </form>
            </div>
        </div>
    </div>

</section>

<script>
    var test = @json($test);
    var total = test.number_of_questions;

</script>
@endsection
