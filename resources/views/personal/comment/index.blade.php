
@extends('personal.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Comments</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="">Personal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Comments</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row">
                <div class="card mb-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">№</th>
                            <th>Наименование</th>
                            <th colspan="2">
                                <div style="display: flex; justify-content: space-between;">
                                    Действие
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr class="align-middle">
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->message }}</td>
                                <td>
                                    <a href=" {{route('personal.comment.edit', $comment->id)}} " class="brand-link">
                                        <img
                                            src="{{ asset('assets/images/pencil-solid.svg') }}"
                                            alt="look"
                                            class="text-success"
                                            style="max-width: 20px;"/>
                                    </a>
                                </td>
                                <td>
                                    <form action=" {{route('personal.comment.delete', $comment->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="border-0 bg-white" >
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection
