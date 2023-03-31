@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xl-2">


        <div class="col">
            <div class="card radius-10 bg-danger">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-white">Total Users</h4>
                            <h4 class="my-1 text-white">{{ $data['users'] }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-group"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-warning">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h4 class="mb-0 text-white">Test Results</h4>
                            <h4 class="my-1 text-white">{{ $data['results'] }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-transparent text-white"><i class="bx bx-line-chart-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card radius-10 bg-primary">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-white">Total Tests</h4>
                            <h4 class="my-1 text-white">{{ $data['tests'] }}</h4>

                        </div>
                        <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-category"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 bg-success">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h4 class="mb-0 text-white">Total Questions</h4>
                            <h4 class="my-1 text-white">{{ $data['questions'] }}</h4>
                        </div>
                        <div class="widgets-icons bg-light-transparent text-white ms-auto"><i class="bx bxs-book"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--end row-->

</div>
@endsection
