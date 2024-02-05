@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPengumuman">
                        + Buat Pengumuman
                    </button>
                    <div class="modal fade" id="tambahPengumuman" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buat Penguman</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('pengumuman.store') }}"
                                        enctype="multipart/form-data" id="formtambahPengumuman">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deskripsi" class="form-label">Deskripsi</label>
                                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Foto</label>
                                            <input class="form-control" type="file" id="formFile" name="foto">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary"
                                                id="simpanPengumuman">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Pengumuman</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peng as $p)
                                        <tr>
                                            <td>{{ $p->judul }}</td>
                                            <td>{{ $p->deskripsi }}</td>
                                            <td>
                                                @if ($p->foto)
                                                    <img src="{{ asset('pengumumin/foto/' . $p->foto) }}"
                                                        alt="Foto Pengumuman" width="100">
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            {{-- Tambahkan modal hapus untuk setiap pengumuman --}}
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#hapusPengumuman{{ $p->id }}">
                                                    Hapus
                                                </button>
                                            </td>
                                        </tr>
                                        <!-- Modal Hapus Pengumuman -->
                                        <div class="modal fade" id="hapusPengumuman{{ $p->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <!-- Isi modal untuk mengkonfirmasi penghapusan -->
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi
                                                            Penghapusan</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Anda yakin ingin menghapus pengumuman ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Tutup</button>
                                                        <form method="POST"
                                                            action="{{ route('pengumuman.destroy', $p->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Script JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Tangkap elemen formulir dan tombol simpan
            var formPengumuman = document.getElementById('formtambahPengumuman');
            var simpanPengumumanBtn = document.getElementById('simpanPengumuman');

            // Tambahkan event listener untuk mengirim formulir
            simpanPengumumanBtn.addEventListener('click', function() {
                // Lakukan pengiriman formulir menggunakan AJAX atau sesuai kebutuhan aplikasi Anda
                $.ajax({
                    url: formPengumuman.action,
                    method: formPengumuman.method,
                    data: new FormData(formPengumuman),
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Setelah pengiriman berhasil, tutup modal
                        $('#tambahPengumuman').modal('hide');
                        // Refresh halaman atau update tampilan pengumuman jika diperlukan
                        // location.reload(); // uncomment ini jika ingin refresh halaman
                    },
                    error: function(error) {
                        console.log(error);
                        // Handle error, tampilkan pesan atau lakukan sesuatu yang sesuai dengan kebutuhan
                    }
                });
            });
        });
    </script>
@endsection
