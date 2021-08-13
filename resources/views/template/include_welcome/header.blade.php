<!-- Start Header -->
<header class="py-5">
    <div id="blob"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-1 text-center text-xl-start">
                    <h1 class="mb-2">Link U</h1>
                    <p class="mb-4">Persingkat link anda menjadi
                        lebih cepat, mudah dan
                        aman dengan
                        menggunakan
                        Link U.</p>
                    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-daftar px-4" href="{{ route('register') }}">Daftar</a>
                        <a class="btn btn-login px-4" href="{{ route('login') }}">Masuk</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 text-center d-none d-xl-block">
                <img class="img-fluid rounded-3 my-1" src="{{ asset('asset/img/online-animate.svg') }}"
                    alt="Gambar Header" />
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
