@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">User</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}"><i class="bx bx-group"></i></a>

                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New user</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <hr />

    <div class="card border-top border-0 border-4 border-primary">
        <div class="card-body p-5">
            <div class="card-title d-flex align-items-center">
                <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                </div>
                <h5 class="mb-0 text-primary">User Form</h5>
            </div>
            <hr>

            <form action="{{ route('users.store') }}" method="POST" class="row g-3 needs-validation" novalidate>
                @csrf
                <div class="col-md-6">
                    <label for="inputLastName1" class="form-label">Name</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-user"></i></span>
                        <input type="text" class="form-control border-start-0" id="name" name="name" placeholder="Enter Name" required>
                        <div class="invalid-feedback">Please Enter a Name.</div>
                    </div>
                </div>

                <div class="col-6">
                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-message"></i></span>
                        <input type="text" class="form-control border-start-0" id="inputEmailAddress" name="email" placeholder="Email Address" required>
                        <div class="invalid-feedback">Please Enter a Valid Email.</div>
                    </div>
                </div>
                <div class="col-6">
                    <label for="inputChoosePassword" class="form-label">Choose Password</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-lock-open"></i></span>
                        <input type="text" class="form-control border-start-0" name="password" id="inputChoosePassword" placeholder="Choose Password" required>
                        <div class="invalid-feedback">Please Enter a Password.</div>
                    </div>
                </div>
                <div class="col-6">
                    <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class="bx bxs-lock"></i></span>
                        <input type="text" class="form-control border-start-0" name="repassword" id="inputConfirmPassword" placeholder="Confirm Password" required>
                        <div class="invalid-feedback">Please Confirm Password.</div>
                    </div>
                </div>
                <div class="col-4">
                    <label for="validationCustom04" class="form-label">Role</label>
                    <select class="form-select" id="validationCustom04" name="is_admin" required>
                        <option selected disabled value="">Choose Role</option>
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                    <div class="invalid-feedback">Please select a valid Role.</div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-danger px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
