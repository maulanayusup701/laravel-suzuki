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
                            <div class="px-4 pt-4">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama</th>
                                                <th>Aksi</th>
                                                <th>Log</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($carousell->count() > 0 )
                                                @foreach ($carousell as $item)
                                                    <tr>
                                                        <td class="col">
                                                            <label class="form-label">{{ $loop->iteration}}</label>
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
                                                            <a href="{{ route('carousell.edit', $item->id) }}"
                                                                class="btn btn-primary btn-sm mb-2">
                                                                <i class="bi bi-pencil-fill"></i></a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('back-end.layouts.components.footer')
    </div>
@endsection