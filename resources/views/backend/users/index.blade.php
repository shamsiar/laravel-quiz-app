@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Users</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}"><i class="bx bx-group"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">User Management</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a class="btn btn-primary" href="{{ route('users.create') }}">
                    <i class="bx bxs-plus-square"></i>Add New User</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">User List</h6>
    <hr />

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @if ($user->is_admin)
                                <span class="badge bg-success">Admin</span>
                                @else
                                <span class="badge bg-info">User</span>
                                @endif

                            </td>
                            <td>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">

                                    <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $user->id) }}"><i class="lni lni-pencil-alt"></i></a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="button" id="delete-user" class="btn btn-sm btn-danger show_confirm"><i class="lni lni-trash"></i></button>




                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


<!--app JS-->
{{-- <script src="assets/js/app.js"></script> --}}
@endsection
