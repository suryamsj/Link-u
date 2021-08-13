@extends('template.layout')

@section('title', 'Tambah Link')

@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Tambah link anda</h3>
                    <p class="text-subtitle text-muted">Tambahkan link yang ingin di perpendek menggunakan Link U.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Link U</a></li>
                            <li class="breadcrumb-item">Link</li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Tambah link</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                Tambahkan Linkmu
                                <a href="{{ route('links.index') }}" class="btn btn-sm btn-primary float-end">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('links.store') }}" method="post" class="form form-vertical">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="full_url">Url Lengkap</label>
                                                    <input type="text"
                                                        class="form-control @error('full_url') is-invalid @enderror"
                                                        placeholder="http://contoh.id/" id="full_url"
                                                        value="{{ old('full_url') }}" name="full_url" required>
                                                    @error('full_url')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="costume_url">Url Pendek</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"
                                                            id="costume_url">{{ URL::to('/') }}/</span>
                                                        <input type="text"
                                                            class="form-control @error('costume_url') is-invalid @enderror"
                                                            aria-label="Sizing example input" aria-describedby="costume_url"
                                                            value="{{ Str::random(6) }}" name="costume_url" required>
                                                        @error('costume_url')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('script')
    @if (Session::has('gagal'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Gagal',
                text: '{{ Session::get('gagal') }}'
            })
        </script>
    @endif
@endsection
