@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <button type="button"class="btn btn-primary" data-toggle="modal" data-target="#ajukanLembur">
                        + Ajukan Lembur
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ajukanLembur" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Buat Penguman</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('lembur.store') }}" enctype="multipart/form-data"
                                        id="formajukanLembur">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="karyawan_id" class="form-label">Nama Karyawan</label>
                                            <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                                                <option value="" selected disabled>Pilih Karyawan</option>
                                                @foreach ($monyet as $m)
                                                    <option value="{{ $m->id }}">{{ $m->nrp_baru }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="tanggal" class="form-label">Tanggal</label>
                                            <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="hari" class="form-label">Hari</label>
                                            <input type="text" class="form-control" id="hari" name="hari"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="roster" class="form-label">Roster</label>
                                            <input type="text" class="form-control" id="roster" name="roster"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="uraian" class="form-label">Uraian</label>
                                            <textarea class="form-control" id="uraian" name="uraian" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_dari" class="form-label">Jam Mulai</label>
                                            <input type="time" class="form-control" id="jam_dari" name="jam_dari"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_sampai" class="form-label">Jam Selsai</label>
                                            <input type="time" class="form-control" id="jam_sampai" name="jam_sampai"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jumlah" class="form-label">Jumlah</label>
                                            <input type="text" class="form-control" id="jumlah" name="jumlah"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="total_lembur" class="form-label">Total Lembur</label>
                                            <input type="text" class="form-control" id="total_lembur" name="total_lembur"
                                                required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary"
                                                id="simpanLembur">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Lembur</h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Karyawan</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Hari</th>
                                        <th scope="col">Roster</th>
                                        <th scope="col">Jam Mulai</th>
                                        <th scope="col">Jam Selesai</th>
                                        <th scope="col">Total Lembur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lks as $k)
                                        <tr>
                                            <th scope="row">{{ $k->karyawan->nrp_baru }}</th>
                                            <td>{{ $k->tanggal }}</td>
                                            <td>{{ $k->hari }}</td>
                                            <td>{{ $k->roster }}</td>
                                            <td>{{ $k->jam_dari }}</td>
                                            <td>{{ $k->jam_sampai }}</td>
                                            <td>{{ $k->total_lembur }}</td>
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
