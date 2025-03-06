
@extends('admin.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Tags</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tags</li>
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
                            <th colspan="3">
                                <div style="display: flex; justify-content: space-between;">
                                    Действие
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                        <tr class="align-middle">
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->title }}</td>
                            <td>
                                <a href="{{route('tag.show', $tag->id)}} " class="brand-link">
                                    <img
                                        src="{{ asset('assets/images/eye-solid.svg') }}"
                                        alt="look"
                                        class="brand-image opacity-75 shadow"
                                        style="max-width: 20px;"/>
                                </a>
                            <td>
                                <a href=" {{route('tag.edit', $tag->id)}} " class="brand-link">
                                    <img
                                        src="{{ asset('assets/images/pencil-solid.svg') }}"
                                        alt="look"
                                        class="text-success"
                                        style="max-width: 20px;"/>
                                </a>
                            </td>
                            <td>
                                <form action=" {{route('tag.delete', $tag->id) }}" method="POST">
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
                <div class="col-sm-6"><h3 class="mb-3">Добавить тег</h3></div>
                <div class="col-12">
                    <a href="{{ route('tag.create') }}" class="btn btn-primary btn-lg">Добавить</a>
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection
