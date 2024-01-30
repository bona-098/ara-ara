@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#pengajuancuti">
                        Ajukan Cuti
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="pengajuancuti" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Pengajuan Cuti</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Isi formulir atau konten modal di sini -->
                                    <form id="pengajuancuti">
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label">Nama Karyawan</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastName" class="form-label">NRP</label>
                                            <input type="text" class="form-control" id="nrp" name="nrp"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="nomor_hp" class="form-label">Tanggal Mulai Kerja</label>
                                            <input type="date" class="form-control" id="tanggal_mulai_kerja"
                                                name="tanggal_mulai_kerja" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="country" class="form-label">Jabatan</label>
                                            <input type="text" class="form-control" id="jabatan" name="jabatan"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="zip" class="form-label">Area Kerja</label>
                                            <input type="text" class="form-control" id="area_kerja" name="area_kerja"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="zip" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <h6>hendak mengajukan permohonan cuti sebagai berikut:</h6>
                                            <label for="zip" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal_cuti" name="tanggal_cuti"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Keperluan</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                        <h6 class="mb-4">Data Cuti</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Karyawan</th>
                                        <th scope="col">NRP</th>
                                        <th scope="col">Tanggal Mulai Kerja</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Area Kerja</th>
                                        <th scope="col">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>2451245</td>
                                        <td>15-01-2024</td>
                                        <td>Mekanik</td>
                                        <td>Sangatta</td>
                                        <td>Samarinda Kota</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>2451245</td>
                                        <td>085348409442</td>
                                        <td>15-01-2024</td>
                                        <td>20-01-2024</td>
                                        <td>Sedang Cuti</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>2451245</td>
                                        <td>085348409442</td>
                                        <td>15-01-2024</td>
                                        <td>20-01-2024</td>
                                        <td>Selesai</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
