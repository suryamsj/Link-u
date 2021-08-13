@extends('template.layout')

@section('title', 'Link mu')

@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Daftar link anda</h3>
                <p class="text-subtitle text-muted">Menampilkan daftar link yang sudah anda buat di Link U.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Link U</a></li>
                        <li class="breadcrumb-item">Link</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="#">Daftar link</a>
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
                            Link Kamu
                            <div class="float-end">
                                <a href="{{ route('links.create') }}" class="btn btn-sm btn-primary">Tambah link</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="tableurl">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Url</th>
                                        <th>Website</th>
                                        <th>Dilihat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($link as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ route('redirect', $item->costume_url) }}</td>
                                            <td>{{ $item->full_url }}</td>
                                            <td>{{ $item->views }}</td>
                                            <td>
                                                <form id="form" action="{{ route('links.destroy', $item->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('links.edit', $item->id) }}"
                                                        class="btn btn-sm btn-primary">Ubah</a>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        id="btn-delete">Hapus</button>
                                                    <a href="{{ route('redirect', $item->costume_url) }}"
                                                        class="btn btn-sm btn-success" target="blank">Lihat</a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('script')
<script>
    let tableUrl = document.querySelector('#tableurl');
    let dataTable = new simpleDatatables.DataTable(tableUrl);

    const btn = document.querySelector('#btn-delete');
    const form = document.querySelector('#form');
    btn.onclick = (event) => {
        event.preventDefault();
        Swal.fire({
                title: 'Apakah kamu yakin?',
                text: "Link yang akan kamu hapus tidak akan bisa dibuka lagi",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak'
            })
            .then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
    };
</script>
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
