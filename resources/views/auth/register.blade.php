<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LINK U - Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/auth.css') }}">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo_linku.png" alt="Logo"></a>
                    </div>
                    <h1 class="auth-title">Daftar</h1>
                    <p class="auth-subtitle mb-5">Input data anda untuk menggunakan Link U.</p>

                    <form action="{{ route('register.auth') }}" method="POST">
                        @csrf
                        <div class="form-group mb-4">
                            <input type="text" class="form-control form-control-xl @error('name') is-invalid @enderror"
                                placeholder="Nama lengkap" name="name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror"
                                placeholder="Email" name="email">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="password"
                                class="form-control form-control-xl @error('password') is-invalid @enderror"
                                placeholder="Password" name="password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="password"
                                class="form-control form-control-xl @error('password_confirmation') is-invalid @enderror"
                                placeholder="Konfirmasi password" name="password_confirmation">
                            @error('password_confirmation')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Daftar</button>
                    </form>
                    <div class="text-center mt-5 text-lg fs-4">
                        <p class='text-gray-600'>Sudah mempunyai akun? <a href="{{ route('login') }}"
                                class="font-bold">Login</a>.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
    <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
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
</body>

</html>
