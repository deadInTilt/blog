
@extends('personal.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Liked posts</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="">Personal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liked posts</li>
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
                        @foreach($posts as $post)
                            <tr class="align-middle">
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>
                                    <a href="{{route('post.show', $post->id)}} " class="brand-link">
                                        <img
                                            src="{{ asset('assets/images/eye-solid.svg') }}"
                                            alt="look"
                                            class="brand-image opacity-75 shadow"
                                            style="max-width: 20px;"/>
                                    </a>

                                </td>
                                <td>
                                    <form action=" {{route('personal.liked.delete', $post->id) }}" method="POST">
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
