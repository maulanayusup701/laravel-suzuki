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
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ $title }}</h4>
                            </div>
                            {{-- @dd($user)  --}}
                            <div class="card-body">
                                <div class="card">
                                    <form class="form form-vertical" action="/dashboard/user/{{ $user->id }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-body">
                                            <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="fullname">Fullname</label>
                                                            <input type="text" id="fullname" class="form-control"
                                                                name="fullname" value="{{ $user->fullname ?? '-' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="username">Username</label>
                                                            <input type="text" id="username" class="form-control"
                                                                name="username" value="{{ $user->username ?? '-' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="email">Email</label>
                                                            <input type="text" id="email" class="form-control"
                                                                name="email" value="{{ $user->email ?? '-' }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="password">Password</label>
                                                            <input type="password" id="password" class="form-control"
                                                                name="password" placeholder="********">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-success btn-sm me-1 mb-1 text-white">
                                                            Simpan</i></button>
                                                    </div>
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
