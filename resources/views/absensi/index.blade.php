@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <h2>Rekap Absensi Bulanan</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        @foreach ($employees as $employee)
                            <th>Nama</th>
                            <th>Absen</th>
                            <th>Masuk</th>
                            <th>Keluar</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dates as $date)
                        <tr>
                            <td>{{ $date }}</td>
                            @foreach ($employees as $employee)
                                <td>{{ $employee }}</td>
                                <td>{{ $absensi[$date][$employee]['status'] }}</td>
                                <td
                                    style="background-color: {{ $absensi[$date][$employee]['late'] ? 'red' : 'transparent' }}">
                                    {{ $absensi[$date][$employee]['jam_masuk'] }}
                                </td>
                                <td>{{ $absensi[$date][$employee]['jam_keluar'] }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
