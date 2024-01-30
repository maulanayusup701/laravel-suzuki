@extends('back-end.layouts.main')
@section('content')
    <div id="app">
        @include('back-end.layouts.components.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>{{ $title }}</h3>
            </div>
            <div class="page-content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $title }}</h4>
                            </div>

                            <div class="card-body">
                                <div class="card">
                                    <form class="form form-vertical" action="/dashboard/information/{{ $info->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="address">Alamat</label>
                                                        <input type="text" id="address" class="form-control" name="address" value="{{ $info->address ?? '-' }}">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" id="email" class="form-control" name="email" value="{{ $info->email ?? '-' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label for="whatsapp">Whatsapp</label>
                                                        <input type="text" id="whatsapp" class="form-control" name="whatsapp" value="{{ $info->whatsapp ?? '-' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="facebook">Facebook</label>
                                                        <input type="text" id="facebook" class="form-control" name="facebook" value="{{ $info->facebook ?? '-' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="instagram">Instagram</label>
                                                        <input type="text" id="instagram" class="form-control" name="instagram" value="{{ $info->instagram ?? '-' }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label for="x">Tweeter / X</label>
                                                        <input type="text" id="x" class="form-control" name="x" value="{{ $info->x ?? '-' }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-success btn-sm me-1 mb-1 text-white">Simpan</i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('back-end.layouts.components.footer')
        </div>
    </div>
@endsection
