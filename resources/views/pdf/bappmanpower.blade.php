<!DOCTYPE html>
<html>

<head>
    <title>Data Bappmanpower</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div>
        <h2>Data Bappmanpower</h2>

        <table>
            <thead>
                <tr>
                    <th>NRP Manpower</th>
                    <th>Nama Manpower</th>
                    <th>Service Product</th>
                    <th>Service Product Desc</th>
                    <th>MHR</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bappData as $bappmanpower)
                    <tr>
                        <td>{{ $bappmanpower->nrp_manpower }}</td>
                        <td>{{ $bappmanpower->nama_manpower }}</td>
                        <td>{{ $bappmanpower->service_product }}</td>
                        <td>{{ $bappmanpower->service_product_desc }}</td>
                        <td>{{ $bappmanpower->mhr }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <embed src="data:application/pdf;base64,{{ base64_encode($pdfHtml) }}" type="application/pdf" width="100%"
            height="600px" /> --}}

    </div>
</body>

</html>
