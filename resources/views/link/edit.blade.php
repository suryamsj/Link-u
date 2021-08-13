@extends('template.layout')

@section('title', 'Ubah Linkmu')

@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Ubah link anda</h3>
                    <p class="text-subtitle text-muted">Ubah link yang sudah anda buat di Link U.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Link U</a></li>
                            <li class="breadcrumb-item">Link</li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="#">Ubah link</a>
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
                                Ubah Linkmu
                                <a href="{{ route('links.index') }}" class="btn btn-sm btn-primary float-end">Kembali</a>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('links.update', $link->id) }}" method="post"
                                    class="form form-vertical">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="costume_url">Linkmu</label>
                                                    <input type="text"
                                                        class="form-control @error('costume_url') is-invalid @enderror"
                                                        placeholder="Linkmu" id="costume_url"
                                                        value="{{ $link->costume_url }}" name="costume_url" required>
                                                    @error('costume_url')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="full_url">Website</label>
                                                    <input type="text"
                                                        class="form-control @error('full_url') is-invalid @enderror"
                                                        placeholder="Website" id="full_url" value="{{ $link->full_url }}"
                                                        name="full_url" required disabled>
                                                    @error('full_url')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
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
            </div>
        </section>
    </div>
@endsection
