<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Link U | Perpendek Url</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/aos.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('asset/css/costume.css') }}">
</head>

<body>
    <div id="blob" class="d-none d-xl-block">
        <img src="{{ asset('asset/img/blob-haikei.svg') }}" alt="" srcset="">
    </div>
    @include('template.include_welcome.navbar')

    <!-- Start Main -->
    <main class="flex-shrink-0">

        @include('template.include_welcome.header')

        <!-- Section Start Shortlink -->
        <section class="py-5 shortlink" id="perpendek">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="#" method="POST">
                            <input type="text">
                            <button type="submit">Perpendek</button>
                        </form>
                        <p>Dengan klik tombol perpendek, anda bisa memperpendek
                            link anda dengan cepat dan mudah tanpa
                            harus login.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section End Shortlink -->

        <!-- Section Start Feature -->
        <section class="py-5 feature" id="fitur">
            <div class="container">
                <div class="row">
                    <h1>Fitur</h1>
                    <p>Beberapa fitur yang tersedia di Link U.</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="kotak-fitur">
                            <div class="my-5">
                                <div class="ikon-fitur">
                                    <i class="uil uil-shield-check"></i>
                                </div>
                                <h1>Cepat</h1>
                                <p>Tidak perlu menunggu lama, link yang sudah di perpendek di Link U tidak membutuhkan
                                    waktu yang lama dalam membuka link asli.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kotak-fitur">
                            <div class="my-5">
                                <div class="ikon-fitur">
                                    <i class="uil uil-shield-check"></i>
                                </div>
                                <h1>Mudah</h1>
                                <p>Link U memiliki halaman dashboard yang memudahkan pengguna untuk memperpendek link.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kotak-fitur">
                            <div class="my-5">
                                <div class="ikon-fitur">
                                    <i class="uil uil-shield-check"></i>
                                </div>
                                <h1>Aman</h1>
                                <p>Link yang sudah anda perpendek di Link U, kami pastikan aman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section End Feature -->

        <!-- Section Start Information -->
        <section class="py-5 information">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="kotak-info">
                            <div class="ikon-info">
                                <i class="uil uil-user"></i>
                            </div>
                            <h1>Total Pengguna</h1>
                            <p>{{ $total_user }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kotak-info">
                            <div class="ikon-info">
                                <i class="uil uil-eye"></i>
                            </div>
                            <h1>Total Pengunjung</h1>
                            <p>{{ $total_views }}</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="kotak-info">
                            <div class="ikon-info">
                                <i class="uil uil-link"></i>
                            </div>
                            <h1>Total Link</h1>
                            <p>{{ $total_link }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section End Information -->
    </main>
    <!-- End Main -->

    @include('template.include_welcome.footer')

    <!-- JAVASCRIPT -->
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/aos.js') }}"></script>
    <script src="{{ asset('asset/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('asset/js/main.js') }}"></script>
</body>

</html>
