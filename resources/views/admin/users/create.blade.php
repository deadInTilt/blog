
@extends('admin.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Users</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href=" {{ route('user.index') }}">Back</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                <div class="col-12">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header"><div class="card-title">Добавление пользователя</div></div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="mb-3">Имя
                                        <input type="text" class="form-control" name="name" placeholder="Введите имя пользователя">
                                        @error('name')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">Email
                                        <input type="text" class="form-control" name="email" placeholder="Введите email">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">Роль
                                        <select class="form-select" id="validationCustom04" name="role">
                                            <option selected="" disabled="" value="">Выберите роль</option>
                                            @foreach($roles as $id => $role)
                                                <option value="{{ $id }}"
                                                    {{ $id == old('role') ? ' selected' : '' }}
                                                >{{ $role }}</option>
                                            @endforeach
                                            @error('role')
                                            <div class="text-danger">{{$message}}</div>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-lg">Добавить</button>
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Row-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->
</main>
@endsection
