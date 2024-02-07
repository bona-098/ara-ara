@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajukanCuti">
            + Ajukan Cuti
        </button>

        <!-- Modal -->
        <div class="modal fade" id="ajukanCuti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajukan Cuti</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('cuti.store') }}" enctype="multipart/form-data"
                            id="formAjukanCuti">
                            @csrf
                            <div class="mb-3">
                                <label for="karyawan_id" class="form-label">Nama Karyawan</label>
                                <select class="form-control" id="karyawan_id" name="karyawan_id" required>
                                    <option value="" selected disabled>Pilih Karyawan</option>
                                    @foreach ($ky as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="keperluan" class="form-label">Keperluan</label>
                                <input type="text" class="form-control" id="keperluan" name="keperluan" required>
                            </div>
                            <div class="mb-3">
                                <label for="awal_cuti" class="form-label">Awal Cuti</label>
                                <input type="date" class="form-control" id="awal_cuti" name="awal_cuti" required>
                            </div>
                            <div class="mb-3">
                                <label for="akhir_cuti" class="form-label">Akhir Cuti</label>
                                <input type="date" class="form-control" id="akhir_cuti" name="akhir_cuti" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_cuti" class="form-label">Total Cuti</label>
                                <input type="number" class="form-control" id="total_cuti" name="total_cuti" required>
                            </div>
                            <div class="mb-3">
                                <label for="sisa_cuti" class="form-label">Sisa Cuti</label>
                                <input type="number" class="form-control" id="sisa_cuti" name="sisa_cuti" required>
                            </div>
                            <div class="mb-3">
                                <label for="periode_cuti" class="form-label">Periode Cuti</label>
                                <select class="form-control" id="periode_cuti" name="periode_cuti" required>
                                    <option value="3bulanan">3 Bulanan</option>
                                    <option value="tahunan">Tahunan</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary" id="simpanCuti">Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <h2>Daftar Cuti Karyawan</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Keperluan</th>
                        <th>Mulai Cuti</th>
                        <th>Akhir Cuti</th>
                        <th>Total Cuti</th>
                        <th>Sisa Cuti</th>
                        <th>Periode Cuti</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lks as $cuti)
                        <tr>
                            <td>{{ $cuti->karyawan->nama }}</td>
                            <td>{{ $cuti->keperluan }}</td>
                            <td>{{ $cuti->awal_cuti }}</td>
                            <td>{{ $cuti->akhir_cuti }}</td>
                            <td>{{ $cuti->total_cuti }}</td>
                            <td>{{ $cuti->sisa_cuti }}</td>
                            <td>{{ $cuti->periode_cuti }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
