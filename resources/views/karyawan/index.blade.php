@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKaryawanModal">
                        + Tambah Karyawan
                    </button> --}}

                    <!-- Modal -->
                    <div class="modal fade" id="tambahKaryawanModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Karyawan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Isi formulir atau konten modal di sini -->
                                    <form id="formTambahKaryawan">
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastName" class="form-label">Nik</label>
                                            <input type="id" class="form-control" id="id" name="id"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_hp" class="form-label">Nomor Hp</label>
                                            <input type="contact" class="form-control" id="email" name="nomor_hp"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="country" name="country"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="zip" class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="zip" name="zip"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="Member">Baru</option>
                                                <option value="Member">Pindah</option>
                                                <!-- Tambahkan opsi lainnya sesuai kebutuhan -->
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Karyawan</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">NRP Baru</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">User (terupdate)</th>
                                        <th scope="col">Area Kerja</th>
                                        <th scope="col">Job Position</th>
                                        <th scope="col">ZIP</th>
                                        <th scope="col">Lama Kerja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($karya as $k)
                                        <tr>
                                            <th scope="row">{{ $k->nrp_baru }}</th>
                                            <td>{{ $k->nama }}</td>
                                            <td>{{ $k->nrp_baru }}</td>
                                            <td>{{ $k->user_terupdate }}</td>
                                            <td>{{ $k->area_kerja }}</td>
                                            <td>{{ $k->job_position_after }}</td>
                                            <td>{{ $k->lama_kerja }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
