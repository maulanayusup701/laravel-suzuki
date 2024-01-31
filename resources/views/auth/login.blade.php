@extends('auth.layouts.main')
@section('content')
    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset ('front-end/img/login.webp') }}');"></div>
        <div class="contents order-2 order-md-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <h3>Login to <strong>Suzuki Purwakarta</strong></h3>
                        <p class="mb-4">Silakan masuk terlebih dahulu</p>
                        <form action="/login-store" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="text" class="form-control" placeholder="your-email@gmail.com" 
                                    id="username" name="email">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Your Password" id="password" name="password">
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block btn-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
