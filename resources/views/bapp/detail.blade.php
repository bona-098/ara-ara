<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kamaju Bendili</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link rel="icon" type="image/jpg" href="/img/logo_kamaju.jpg">
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Add this line to include jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Tambahkan link ke Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Tambahkan link ke Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Bappunit</h6>
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
                                    <tr>
                                        <td>{{ $bappUnit->hari_tanggal }}</td>
                                        <td>{{ $bappUnit->no_quotation }}</td>
                                        <td>{{ $bappUnit->no_code_unit }}</td>
                                        <td>{{ $bappUnit->no_model }}</td>
                                        <td>{{ $bappUnit->job_time_start_date }}</td>
                                        <td>{{ $bappUnit->job_time_start_time }}</td>
                                        <td>{{ $bappUnit->job_time_finish_date }}</td>
                                        <td>{{ $bappUnit->job_time_finish_time }}</td>
                                        <td>{{ $bappUnit->wo }}</td>
                                        <td>{{ $bappUnit->mhr_total }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Data Bappmanpower</h6>
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#tambahBappModal">
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
                                        <form action="{{ route('bapp.storeBappManpower', ['id' => $bappUnit->id]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="karyawan_id">Karyawan</label>
                                                <select class="form-control" id="karyawan_id" name="karyawan_id">
                                                    @foreach ($karyawanList as $karyawan)
                                                        <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="service_product">Service Product</label>
                                                <input type="text" class="form-control" id="service_product"
                                                    name="service_product">
                                            </div>
                                            <div class="form-group">
                                                <label for="service_product_desc">Service Product Desc</label>
                                                <input type="text" class="form-control" id="service_product_desc"
                                                    name="service_product_desc">
                                            </div>
                                            <div class="form-group">
                                                <label for="mhr">MHR</label>
                                                <input type="number" class="form-control" id="mhr"
                                                    name="mhr">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="tambahBappModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah BAPP</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form
                                            action="{{ route('bapp.storeBappManpower', ['bappId' => $bappUnit->id]) }}"
                                            method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="karyawan_id">Karyawan</label>
                                                <select class="form-control" id="karyawan_id" name="karyawan_id">
                                                    @foreach ($karyawanList as $karyawan)
                                                        <option value="{{ $karyawan->id }}">{{ $karyawan->nama }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="service_product">Service Product</label>
                                                <input type="text" class="form-control" id="service_product"
                                                    name="service_product">
                                            </div>
                                            <div class="form-group">
                                                <label for="service_product_desc">Service Product Desc</label>
                                                <input type="text" class="form-control" id="service_product_desc"
                                                    name="service_product_desc">
                                            </div>
                                            <div class="form-group">
                                                <label for="mhr">MHR</label>
                                                <input type="number" class="form-control" id="mhr"
                                                    name="mhr">
                                            </div>
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
                                        <th scope="col">NRP Manpower</th>
                                        <th scope="col">Nama Manpower</th>
                                        <th scope="col">Service Product</th>
                                        <th scope="col">Service Product Desc</th>
                                        <th scope="col">MHR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bappManpower as $b)
                                        <tr>
                                            <td>{{ $b->karyawan->nrp_baru }}</td>
                                            <td>{{ $b->karyawan->nama }}</td>
                                            <td>{{ $b->service_product }}</td>
                                            <td>{{ $b->service_product_desc }}</td>
                                            <td>{{ $b->mhr }}</td>
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

</body>

</html>
