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
                                <a href="{{ route('testimonial.create') }}" class="btn btn-success mb-2"><span>Tambah
                                        Testimoni</span></a>
                                <form action="{{ route('testimonial.index') }}" method="GET" class="d-flex gap-2">
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
                                                <th>Nama Lengkap</th>
                                                <th>Komentar</th>
                                                <th>Aksi</th>
                                                <th>Log</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($testis->count() > 0 )
                                                @foreach ($testis as $item)
                                                    <tr>
                                                        <td class="col">
                                                            <label class="form-label">{{ $item->id }}</label>
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">
                                                                <img src="{{ asset('storage/'. $item->image) }}" class="rounded-lg" alt="" style="height: 80px;">
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">{{ $item->fullname }}</label>
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">{{ $item->comment }}</label>
                                                            </label>
                                                        </td>
                                                        <td class="col">
                                                            <a href="{{ route('testimonial.edit', $item->id) }}"
                                                                class="btn btn-primary btn-sm mb-2">
                                                                <i class="bi bi-pencil-fill"></i></a>
                                                            <form action="{{ route('testimonial.destroy', $item->id) }}"
                                                                method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="btn btn-sm btn-danger" type="submit"
                                                                    onclick="return confirm('Apakah anda yakin ingin menghapus berita ini?')"><i
                                                                        class="bi bi-archive-fill"></i></button>
                                                            </form>
                                                        </td>
                                                        <td class="col">
                                                            <label class="form-label">{{ $item->created_at }}</label>
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <td colspan="8" class="text-center">Belum ada Testimoni</td>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                                {{ $testis->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('back-end.layouts.components.footer')
    </div>

@endsection