@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Test</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('tests.index') }}"><i class="bx bx-category"></i></a>

                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Test</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <hr />

    <div class="card border-top border-0 border-4 border-primary">
        <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-category me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">Test Form</h5>
            </div>
            <hr>

            <form action="{{ route('tests.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-md-6">
                    <label for="title" class="form-label">Title</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-start-0" id="title" name="title" placeholder="Enter Title" required>
                        <div class="invalid-feedback">Please Enter a Title.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="duration" class="form-label">Duration</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-start-0" id="duration" name="duration" value="35" required>
                        <div class="invalid-feedback">Please Enter a Value.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="pass_mark" class="form-label">Pass Mark</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-start-0" id="pass_mark" name="pass_mark" value="5" required>
                        <div class="invalid-feedback">Please Enter a value.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="number_of_questions" class="form-label">Number of Questions</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-start-0" id="number_of_questions" name="number_of_questions" value="20" required>
                        <div class="invalid-feedback">Please Enter a value.</div>
                    </div>
                </div>

                <div class="col-6">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description..." rows="3"></textarea>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-danger px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
