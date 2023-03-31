@extends('backend.layout.template')

@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Questions</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{ route('questions.index') }}"><i class="bx bx-book"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Question Management</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a class="btn btn-primary" href="{{ route('questions.create') }}">
                    <i class="bx bxs-plus-square"></i>Add New Question</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Question List</h6>
    <hr />

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Test Name</th>
                            <th>Answer</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 0;
                        @endphp
                        @foreach ($questions as $question)
                        @php $ans = 'option_' . $question->answer; @endphp
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $question->question }}</td>
                            <td>{{ $question->test->title }}</td>
                            <td>{{ $ans }}</td>
                            <td>
                                <form action="{{ route('questions.destroy', $question->id) }}" method="POST">

                                    <a class="btn btn-sm btn-primary" href="{{ route('questions.edit', $question->id) }}"><i class="lni lni-pencil-alt"></i></a>

                                    @csrf
                                    @method('DELETE')
                                    <button type="button" id="delete-question" class="btn btn-sm btn-danger show_confirm"><i class="lni lni-trash"></i></button>


                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Test Name</th>
                            <th>Answer</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
