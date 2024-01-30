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
                            <div class="card-body">
                                <div class="card">
                                    <form class="form form-vertical" action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-body">
                                            <dsiv class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="type">Type Product</label>
                                                        <input type="text" id="type" class="form-control" name="type" placeholder="NEW ERTIGA GL MT MC" value="{{ $product->type}}" required autofocus>
                                                    </div>
                                                </div>
                                                <div class="col-12">    
                                                    <div class="form-group">
                                                        <label for="otr">OTR</label>
                                                        <input type="number" id="otr" class="form-control" name="otr" placeholder="253800000" value="{{ $product->otr}}">
                                                    </div>
                                                </div>
                                                <div class="col-12">    
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Mobil New Ertiga GL MT MC adalah pilihan yang sangat menarik bagi para pengemudi yang menginginkan kombinasi kenyamanan, performa, dan gaya yang memukau.">{{ $product->description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-center">
                                                    <input type="hidden" id="oldImage" class="form-control" name="oldImage" value="{{ $product->image}}">
                                                    @if($product->image != null)
                                                        <img src="{{ asset('storage/'.$product->image) }}" class="img-preview img-fluid mb-3" id="frame" style="max-height: 150px; overflow: hidden">
                                                    @else
                                                        <img src="" class="img-preview img-fluid mb-3" id="frame" style="max-height: 150px; overflow: hidden">
                                                    @endif
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="image">Gambar</label>
                                                        <input type="file" id="image" class="form-control" name="image" onchange="preview()">
                                                    </div>
                                                </div>
                                            </dsiv>
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
