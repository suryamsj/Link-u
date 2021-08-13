@extends('template.layout')

@section('title', 'Profile')

@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Ubah Password</h3>
                <p class="text-subtitle text-muted">Ubah password anda.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Link U</a></li>
                        <li class="breadcrumb-item"><a href="#">Profile</a></li>
                        <li class="breadcrumb-item active"><a href="#">Ubah Password</a></li>
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
                            Ubah password
                        </div>
                        <div class="card-body">
                            <form action="{{ route('profile.update.password') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="current_password">Password Lama</label>
                                    <input type="password"
                                        class="form-control @error('current_password') is-invalid @enderror"
                                        id="current_password" name="current_password">
                                    @error('current_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password Baru</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Konfirmasi Password Baru</label>
                                    <input type="password"
                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                        id="confirm_password" name="confirm_password">
                                    @error('confirm_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
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
@endsection
