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
                                    <form class="form form-vertical" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="type">Product Name</label>
                                                        <input type="text" id="name" class="form-control" name="name" placeholder="NEW ERTIGA GL MT MC" required autofocus>
                                                    </div>
                                                </div>
                                                <div class="col-12">    
                                                    <div class="form-group">
                                                        <label for="otr">OTR</label>
                                                        <input type="number" id="otr" class="form-control" name="otr" placeholder="253800000">
                                                    </div>
                                                </div>
                                                <div class="col-12">    
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Mobil New Ertiga GL MT MC adalah pilihan yang sangat menarik bagi para pengemudi yang menginginkan kombinasi kenyamanan, performa, dan gaya yang memukau."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-center">
                                                    <img src="" class="img-preview img-fluid mb-3" id="frame" style="max-height: 150px; overflow: hidden">
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="image">Gambar</label>
                                                        <input type="file" id="image" class="form-control" name="image" onchange="preview()">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success btn-sm me-1 mb-1 text-white">Simpan</button>
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
