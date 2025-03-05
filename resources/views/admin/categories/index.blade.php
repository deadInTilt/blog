
@extends('admin.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Categories</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <!--begin::Row-->
            <div class="row">
                <div class="card mb-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px">№</th>
                            <th>Наименование</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr class="align-middle">
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->title }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <!-- /.card-body -->
                </div>
                <div class="col-12">
                    <a href="{{ route('category.create') }}" class="btn btn-primary btn-lg">Добавить</a>
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection
