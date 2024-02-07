@extends('layouts.sidebar')
@section('content')
    <div class="container-fluid pt-4 px-4">
        <h2>Absen Karyawan</h2>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>NRP</th>
                        @foreach ($dates as $date)
                            <th>{{ $date }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    {{-- Loop through each employee --}}
                    @foreach ($absens as $karyawan_id => $employeeAbsens)
                        @php
                            $firstAbsen = $employeeAbsens->first();
                        @endphp
                        <tr>
                            {{-- Display name and NRP only once --}}
                            <td>{{ $firstAbsen->karyawan->nama }}</td>
                            <td>{{ $firstAbsen->karyawan->nrp_baru }}</td>
                            {{-- Loop through each date --}}
                            @foreach ($dates as $date)
                                {{-- Find the absen for this date --}}
                                @php
                                    $absen = $employeeAbsens->firstWhere('tanggal', $date);
                                @endphp
                                {{-- Check if absen is found for this date --}}
                                @if ($absen)
                                    <td>{{ $absen->status }}</td>
                                @else
                                    <td></td> {{-- No absen data available for this date --}}
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
