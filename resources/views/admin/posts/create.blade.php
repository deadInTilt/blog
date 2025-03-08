@vite(['resources/css/app.css', 'resources/js/app.js'])
@extends('admin.layouts.main')
@section('content')
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6"><h3 class="mb-0">Posts</h3></div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href=" {{ route('post.index') }}">Back</a></li>
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
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header"><div class="card-title">Добавление поста</div></div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form>
                                <!--begin::Body-->
                                <div class="card-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="title" placeholder="Введите заголовок поста"
                                        value=" {{ old('title') }}">
                                        @error('title')
                                            <div class="text-danger">Поле необходимо к заполнению</div>
                                        @enderror
                                    </div>
                                    <div class="div.form-group">
                                        <textarea id="summernote" name="content">
                                            {{ old('content') }}
                                        </textarea>
                                        @error('content')
                                        <div class="text-danger">Поле необходимо к заполнению</div>
                                        @enderror
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
