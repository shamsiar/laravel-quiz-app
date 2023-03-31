@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Question</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('questions.index') }}"><i class="bx bx-book"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Question</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <hr />

    <div class="card border-top border-0 border-4 border-primary">
        <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-book me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">Question Form</h5>
            </div>
            <hr>

            <form action="{{ route('questions.store') }}" method="POST" enctype="multipart/form-data" class="row g-3 needs-validation" novalidate>

                @csrf
                <div class="col-12">
                    <label for="question" class="form-label">Question</label>
                    <div class="input-group">
                        <input type="text" class="form-control border-start-0" id="question" name="question" placeholder="Enter Name" required>
                        <div class="invalid-feedback">Please Enter a Question.</div>
                    </div>
                </div>

                <div class="row row my-2 border p-2" style="border-radius:10px;">
                    <div class="col-6">
                        <label for="option_1" class="form-label">Option 1</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-start-0" id="option_1" name="option_1" placeholder="Option 1">
                            <div class="invalid-feedback">Please Enter a Valid Option.</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="option_1" class="form-label">Or Upload an image.</label>
                        <div class="input-group">
                            <input type="file" class="form-control border-start-0" id="option_1" name="option_1">
                        </div>
                    </div>

                </div>

                <div class="row row my-2 border p-2" style="border-radius:10px;">
                    <div class="col-6">
                        <label for="option_2" class="form-label">Option 2</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-start-0" id="option_2" name="option_2" placeholder="Option 2">
                            <div class="invalid-feedback">Please Enter a Valid Option.</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="option_2" class="form-label">Or Upload an image.</label>
                        <div class="input-group">
                            <input type="file" class="form-control border-start-0" id="option_2" name="option_2">
                        </div>
                    </div>
                </div>

                <div class="row row my-2 border p-2" style="border-radius:10px;">
                    <div class="col-6">
                        <label for="option_3" class="form-label">Option 3</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-start-0" id="option_3" name="option_3" placeholder="Option 3">
                            <div class="invalid-feedback">Please Enter a Valid Option.</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="option_3" class="form-label">Or Upload an image.</label>
                        <div class="input-group">
                            <input type="file" class="form-control border-start-0" id="option_3" name="option_3">
                        </div>
                    </div>
                </div>

                <div class="row row my-2 border p-2" style="border-radius:10px;">
                    <div class="col-6">
                        <label for="option_4" class="form-label">Option 4</label>
                        <div class="input-group">
                            <input type="text" class="form-control border-start-0" id="option_4" name="option_4" placeholder="Option 4">
                            <div class="invalid-feedback">Please Enter a Valid Option.</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="option_4" class="form-label">Or Upload an image.</label>
                        <div class="input-group">
                            <input type="file" class="form-control border-start-0" id="option_4" name="option_4">
                        </div>
                    </div>

                </div>

                <div class="col-4">
                    <label for="answer" class="form-label">Answer</label>

                    <select class="form-select" id="answer" name="answer" required>
                        <option selected disabled value="">Choose Answer</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                    <div class="invalid-feedback">Please Enter a Valid Answer.</div>
                </div>
                <div class="col-4">
                    <label for="test_id" class="form-label">Test Name</label>
                    <select class="form-select" id="test_id" name="test_id" required>
                        <option selected disabled value="">Choose Test</option>
                        @foreach ($tests as $test)
                        <option value="{{ $test->id }}">{{ $test->title }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">Please select a valid Test.</div>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-danger px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
