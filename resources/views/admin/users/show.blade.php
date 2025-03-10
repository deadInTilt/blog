
@extends('admin.layouts.main')
@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">{{$user->name}}</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                            <tbody>
                                <tr class="align-middle">
                                    <td>ID</td>
                                    <td>Имя</td>
                                    <td>Email</td>
                                    <td colspan="2">Действие</td>
                                </tr>
                                <tr class="align-middle">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href=" {{route('user.edit', $user->id)}} " class="brand-link">
                                            <img
                                                src="{{ asset('assets/images/pencil-solid.svg') }}"
                                                alt="look"
                                                class="brand-image opacity-75 shadow"
                                                style="max-width: 20px;"></a>
                                    </td>
                                    <td>
                                        <form action=" {{route('user.delete', $user->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="border-0 bg-white" >
                                                <i class="fa-solid fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
    </main>
@endsection
