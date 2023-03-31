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

<div class="container py-4">

    <div class="row">
        <div class="col">
            <div class="blog-posts">

                <div class="float-right badge badge-warning badge-md" style=" top: 300px; right:45px; position: fixed; z-index:1;">
                    <h1 class='timer m-0 font-weight-bold' style="display: inline-flex;" data-minutes-left={{ $test->duration }}></h1>
                </div>

                <div class="col-md-10 col-lg-10 mx-auto mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">

                    <div class="card card-background-image-hover border-0" style="background-image: url({{ asset('frontend/img/blog/square/blog-1.jpg') }});">
                        <div class="card-body text-center p-5">
                            <i class="icon-layers icons text-color-primary text-10"></i>
                            <h4 class="card-title mt-2 mb-3 text-5 font-weight-bold">{{ $test->title }}</h4>

                            <form action="{{ route('test.result') }}" id="text_form" method="post">
                                @csrf
                                <input type="hidden" name="test_id" value="{{ $test->id }}">
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($questions as $q)
                                <div class="col-md-12 col-lg-12 mx-auto mb-3 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                                    <div class="card border-radius-0 bg-color-light border-0 box-shadow-1 text-left">
                                        <div class="card-body">
                                            <h4 class="card-title mb-2 text-4 font-weight-bold">{{ $i++  }}. {{ $q->question }}</h4>


                                            <ul class="list list-primary list-borders mcq-list text-4">


                                                <li><input type="radio" name="answers[{{ $q->id }}]" style="" value="1">
                                                    @if($q->is_image)
                                                    <img src="{{ asset('question_images/' . $q->option_1) }}" alt="">
                                                    @else
                                                    {{ $q->option_1 }}
                                                    @endif
                                                </li>


                                                <li><input type="radio" name="answers[{{ $q->id }}]" value="2">
                                                    @if($q->is_image)
                                                    <img src="{{ asset('question_images/' . $q->option_2) }}" alt="">
                                                    @else
                                                    {{ $q->option_2 }}
                                                    @endif

                                                </li>


                                                <li><input type="radio" name="answers[{{ $q->id }}]" value="3">
                                                    @if($q->is_image)
                                                    <img src="{{ asset('question_images/' . $q->option_3) }}" alt="">
                                                    @else
                                                    {{ $q->option_3 }}
                                                    @endif </li>



                                                <li><input type="radio" name="answers[{{ $q->id }}]" value="4">
                                                    @if($q->is_image)
                                                    <img src="{{ asset('question_images/' . $q->option_4) }}" alt="">
                                                    @else
                                                    {{ $q->option_4 }}
                                                    @endif </li>



                                            </ul>

                                        </div>
                                    </div>

                                </div>

                                @endforeach

                                <div class="form-group">
                                    <input type="submit" class="btn btn-modern btn-rounded btn-success mb-2" value="Submit Answer">
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // $('.timer').startTimer();

</script>
@endsection
