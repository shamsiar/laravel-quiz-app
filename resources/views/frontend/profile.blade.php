@extends('frontend.layout.template')

@section('content')

<section class="page-header page-header-classic" style="padding-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col p-static">
                <span class="page-header-title-border visible" style="width: 145.509px;"></span>
                <h1 data-title-border="">Profile</h1>

            </div>
        </div>
    </div>
</section>

<div class="container py-4">

    <div class="row">
        <div class="col-lg-12">
            <div class="tabs tabs-vertical tabs-left">
                <ul class="nav nav-tabs">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#profile" data-toggle="tab">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#results" data-toggle="tab">Test Results</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#certificate" data-toggle="tab">Certificate</a>
                    </li>

                </ul>
                <div class="tab-content">

                    <div id="profile" class="tab-pane active">

                        <div class="col-lg-9">

                            <div class="overflow-hidden mb-1">
                                <h2 class="font-weight-normal text-7 mb-3"><strong class="font-weight-extra-bold">My</strong> Profile</h2>
                            </div>

                            <form action="{{ route('profile.update', $user->id) }}" method="post" class="needs-validation">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-4 required">Full name</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" name="name" required type="text" value="{{ $user->name }}">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-4 required">Email</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" required type="email" name="email" value=" {{ $user->email }}">


                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-4 required">Password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" required name="password" type="password" value="">

                                    </div>
                                </div>
                                {{-- <div class="form-group row">
                                    <label class="col-lg-3 font-weight-bold text-dark col-form-label form-control-label text-2 required">Confirm password</label>
                                    <div class="col-lg-9">
                                        <input class="form-control" required type="password" value="">
                                    </div>
                                </div> --}}
                                <div class="form-group row">
                                    <div class="form-group col-lg-9">

                                    </div>
                                    <div class="form-group col-lg-3">
                                        <input type="submit" value="Update Profile" class="btn btn-primary btn-modern float-right" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                    <div id="results" class="tab-pane">

                        <div class="overflow-hidden mb-1">
                            <h2 class="font-weight-normal text-7 mb-3"><strong class="font-weight-extra-bold">Test</strong> Results</h2>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Test Title</th>
                                    <th>Score</th>
                                    <th>Result</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($results as $result)
                            <tbody>
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $result->test->title }}</td>
                                    <td>{{ $result->score }}</td>
                                    <td class="text-tertiary font-weight-bold">{{ $result->is_pass ? 'PASS' : 'FAIL' }}</td>


                                    <td>{{ date('d F Y', strtotime($result->created_at)) }}</td>




                                </tr>

                            </tbody>

                            @endforeach

                        </table>

                    </div>
                    <div id="certificate" class="tab-pane">
                        <p>Certificate</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>

@endsection
