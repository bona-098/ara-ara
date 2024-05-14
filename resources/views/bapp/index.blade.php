@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Bapp</h6>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBappModal">
                            Tambah BAPP
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahBappModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah BAPP</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form untuk menambah BAPP -->
                                        <form action="{{ route('bapp.store') }}" method="POST">
                                            @csrf
                                            <!-- Input fields untuk BAPP -->
                                            <div class="form-group">
                                                <label for="hari_tanggal">Hari Tanggal</label>
                                                <input type="date" class="form-control" id="hari_tanggal"
                                                    name="hari_tanggal">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_quotation">No Quotation</label>
                                                <input type="text" class="form-control" id="no_quotation"
                                                    name="no_quotation">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_code_unit">No Code Unit</label>
                                                <input type="text" class="form-control" id="no_code_unit"
                                                    name="no_code_unit">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_model">No Model</label>
                                                <input type="text" class="form-control" id="no_model" name="no_model">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_start_date">Job Time Start Date</label>
                                                <input type="date" class="form-control" id="job_time_start_date"
                                                    name="job_time_start_date">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_start_time">Job Time Start Time</label>
                                                <input type="time" class="form-control" id="job_time_start_time"
                                                    name="job_time_start_time">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_finish_date">Job Time Finish Date</label>
                                                <input type="date" class="form-control" id="job_time_finish_date"
                                                    name="job_time_finish_date">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_finish_time">Job Time Finish Time</label>
                                                <input type="time" class="form-control" id="job_time_finish_time"
                                                    name="job_time_finish_time">
                                            </div>
                                            <div class="form-group">
                                                <label for="wo">WO</label>
                                                <input type="text" class="form-control" id="wo" name="wo">
                                            </div>
                                            <div class="form-group">
                                                <label for="mhr_total">MHR Total</label>
                                                <input type="number" class="form-control" id="mhr_total" name="mhr_total">
                                            </div>
                                            <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Hari Tanggal</th>
                                        <th scope="col">No Quotation</th>
                                        <th scope="col">No Code Unit</th>
                                        <th scope="col">No Model</th>
                                        <th scope="col">Job Time Start Date</th>
                                        <th scope="col">Job Time Start Time</th>
                                        <th scope="col">Job Time Finish Date</th>
                                        <th scope="col">Job Time Finish Time</th>
                                        <th scope="col">WO</th>
                                        <th scope="col">MHR Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bappData as $bapp)
                                        <tr>
                                            <td>{{ $bapp->hari_tanggal }}</td>
                                            <td>{{ $bapp->no_quotation }}</td>
                                            <td>{{ $bapp->no_code_unit }}</td>
                                            <td>
                                                <!-- Ganti menjadi tautan langsung ke halaman detail -->
                                                <a
                                                    href="{{ route('bapp.detail', ['id' => $bapp->id]) }}">{{ $bapp->no_model }}</a>
                                            </td>
                                            <td>{{ $bapp->job_time_start_date }}</td>
                                            <td>{{ $bapp->job_time_start_time }}</td>
                                            <td>{{ $bapp->job_time_finish_date }}</td>
                                            <td>{{ $bapp->job_time_finish_time }}</td>
                                            <td>{{ $bapp->wo }}</td>
                                            <td>{{ $bapp->mhr_total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Bapp</h6>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBappModal">
                            Tambah BAPP
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="tambahBappModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah BAPP</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form untuk menambah BAPP -->
                                        <form action="{{ route('bapp.store') }}" method="POST">
                                            @csrf
                                            <!-- Input fields untuk BAPP -->
                                            <div class="form-group">
                                                <label for="hari_tanggal">Hari Tanggal</label>
                                                <input type="date" class="form-control" id="hari_tanggal"
                                                    name="hari_tanggal">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_quotation">No Quotation</label>
                                                <input type="text" class="form-control" id="no_quotation"
                                                    name="no_quotation">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_code_unit">No Code Unit</label>
                                                <input type="text" class="form-control" id="no_code_unit"
                                                    name="no_code_unit">
                                            </div>
                                            <div class="form-group">
                                                <label for="no_model">No Model</label>
                                                <input type="text" class="form-control" id="no_model" name="no_model">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_start_date">Job Time Start Date</label>
                                                <input type="date" class="form-control" id="job_time_start_date"
                                                    name="job_time_start_date">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_start_time">Job Time Start Time</label>
                                                <input type="time" class="form-control" id="job_time_start_time"
                                                    name="job_time_start_time">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_finish_date">Job Time Finish Date</label>
                                                <input type="date" class="form-control" id="job_time_finish_date"
                                                    name="job_time_finish_date">
                                            </div>
                                            <div class="form-group">
                                                <label for="job_time_finish_time">Job Time Finish Time</label>
                                                <input type="time" class="form-control" id="job_time_finish_time"
                                                    name="job_time_finish_time">
                                            </div>
                                            <div class="form-group">
                                                <label for="wo">WO</label>
                                                <input type="text" class="form-control" id="wo" name="wo">
                                            </div>
                                            <div class="form-group">
                                                <label for="mhr_total">MHR Total</label>
                                                <input type="number" class="form-control" id="mhr_total" name="mhr_total">
                                            </div>
                                            <!-- Tambahkan input fields lainnya sesuai kebutuhan -->
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Hari Tanggal</th>
                                        <th scope="col">No Quotation</th>
                                        <th scope="col">No Code Unit</th>
                                        <th scope="col">No Model</th>
                                        <th scope="col">Job Time Start Date</th>
                                        <th scope="col">Job Time Start Time</th>
                                        <th scope="col">Job Time Finish Date</th>
                                        <th scope="col">Job Time Finish Time</th>
                                        <th scope="col">WO</th>
                                        <th scope="col">MHR Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bappData as $bapp)
                                        <tr>
                                            <td>{{ $bapp->hari_tanggal }}</td>
                                            <td>{{ $bapp->no_quotation }}</td>
                                            <td>{{ $bapp->no_code_unit }}</td>
                                            <td>
                                                <!-- Ganti menjadi tautan langsung ke halaman detail -->
                                                <a
                                                    href="{{ route('bapp.detail', ['id' => $bapp->id]) }}">{{ $bapp->no_model }}</a>
                                            </td>
                                            <td>{{ $bapp->job_time_start_date }}</td>
                                            <td>{{ $bapp->job_time_start_time }}</td>
                                            <td>{{ $bapp->job_time_finish_date }}</td>
                                            <td>{{ $bapp->job_time_finish_time }}</td>
                                            <td>{{ $bapp->wo }}</td>
                                            <td>{{ $bapp->mhr_total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
