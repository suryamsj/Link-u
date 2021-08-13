@extends('template.layout')

@section('title', 'Profile')

@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profile</h3>
                <p class="text-subtitle text-muted">Data diri anda.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Link U</a></li>
                        <li class="breadcrumb-item active"><a href="#">Profile</a></li>
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
                            Data diri anda
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" value="{{ $user->name }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $user->email }}"
                                    disabled>
                            </div>
                            <div class="form-group float-end">
                                <a href="{{ route('profile.edit', $user->id) }}"
                                    class="btn btn-primary btn-sm">Ubah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
@if (Session::has('berhasil'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: '{{ Session::get('berhasil') }}'
        })
    </script>
@endif
@if (Session::has('gagal'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: '{{ Session::get('gagal') }}'
        })
    </script>
@endif
@endsection
