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
                            <div class="card-header d-flex justify-content-between pt-4 pb-1">
                                <a href="{{ route('product.create') }}" class="btn btn-success mb-2"><span>Tambah
                                        Product</span></a>
                                <form action="{{ route('product.index') }}" method="GET" class="d-flex gap-2">
                                    <input type="text" class="form-control" name="search" placeholder="Cari">
                                    <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <div class="px-4 pt-4">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Product</th>
                                                <th>OTR</th>
                                                <th>Aksi</th>
                                                <th>Log</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($products->count() > 0)
                                                @foreach ($products as $item)
                                                    <tr>
                                                        <td class="col">
                                                            <label class="form-label">{{ $loop->iteration }}</label>
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">
                                                                <img src="{{ asset('storage/'. $item->image) }}" class="rounded-lg" alt="" style="height: 80px;">
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">{{ $item->name }}</label>
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <label
                                                                class="form-label">{{ 'RP ' . number_format("$item->otr", 0, ',', '.') }}</label>
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <a href="{{ route('product.edit', $item->id) }}"
                                                                class="btn btn-primary btn-sm mb-2" type="button"><i
                                                                    class="bi bi-pencil-fill"></i></a>
                                                            <form action="{{ route('product.destroy', $item->id) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="btn btn-sm btn-danger" type="submit"
                                                                    onclick="return confirm('Apakah anda yakin ingin menghapus berita ini?')"><i
                                                                        class="bi bi-archive-fill"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">{{ $item->created_at }}</label>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <td colspan="8" class="text-center">Belum ada Products</td>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('back-end.layouts.components.footer')
    </div>

@endsection
