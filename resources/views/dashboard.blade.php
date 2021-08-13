@extends('template.layout')

@section('title', 'Beranda')

@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Beranda</h3>
                    <p class="text-subtitle text-muted">Menampilkan beberapa informasi mengenai link yang telah anda buat di
                        Link U.</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Link U</a></li>
                            <li class="breadcrumb-item active"><a href="#">Beranda</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Total Akses</h6>
                                        <h6 class="font-extrabold mb-0">{{ $total_views }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldPlus"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Total Link</h6>
                                        <h6 class="font-extrabold mb-0">{{ $total_link }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jumlah orang yang mengakses link / Bulan</h4>
                            </div>
                            <div class="card-body">
                                <div id="analytic"></div>
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
    <script>
        var month = {{ $month }};
        var links = {{ $links }};
        var optionsProfileVisit = {
            annotations: {
                position: 'back'
            },
            dataLabels: {
                enabled: false
            },
            chart: {
                type: 'bar',
                height: 300
            },
            fill: {
                opacity: 1
            },
            plotOptions: {},
            series: [{
                name: 'Total Clicked',
                data: links
            }],
            colors: '#435ebe',
            xaxis: {
                categories: month,
            },
        }
        var chartProfileVisit = new ApexCharts(document.querySelector("#analytic"), optionsProfileVisit);
        chartProfileVisit.render();
    </script>
@endsection
