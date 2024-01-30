@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKaryawanModal">
                        + Tambah Karyawan
                    </button>

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
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">ZIP</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>jhon@email.com</td>
                                        <td>USA</td>
                                        <td>123</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>mark@email.com</td>
                                        <td>UK</td>
                                        <td>456</td>
                                        <td>Member</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>jacob@email.com</td>
                                        <td>AU</td>
                                        <td>789</td>
                                        <td>Member</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
