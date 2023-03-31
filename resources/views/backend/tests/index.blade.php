@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tests</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('tests.index') }}"><i class="bx bx-category"></i></a>

                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Test Management</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a class="btn btn-primary" href="{{ route('tests.create') }}">
                    <i class="bx bxs-plus-square"></i>Add New Test</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Test List</h6>
    <hr />

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Duration(min)</th>
                            <th>Pass Mark</th>
                            <th>Total Questions</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($tests as $test)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $test->title }}</td>
                            <td>{{ $test->duration }}</td>
                            <td>{{ $test->pass_mark }}</td>
                            <td>{{ $test->number_of_questions }}</td>

                            <td>
                                <form action="{{ route('tests.destroy', $test->id) }}" method="POST">

                                    <a class="btn btn-sm btn-primary" href="{{ route('tests.edit', $test->id) }}"><i class="lni lni-pencil-alt"></i></a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="button" id="delete-test" class="btn btn-sm btn-danger show_confirm"><i class="lni lni-trash"></i></button>


                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Duration(min)</th>
                            <th>Pass Mark</th>
                            <th>Total Questions</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
