<!DOCTYPE html>
<html>
<head>
    <title>Invoice Pemesanan Seragam - {{ $no_order }}</title>
    <style>
        table, td, th {
            border: 1px solid black;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding:15px;
        }
    </style>
</head>
<body>
    <h1>Invoice Pemesanan Seragam</h1>
    <p>Berikut ini kami lampirkan invoice untuk pemesanan seragam</p>
    <table>
        <tr>
            <td>No. Order</td>
            <td><b>{{ $no_order }}</b></td>
        </tr>
        <tr>
            <td>No. Pendaftaran PSB</td>
            <td><b>{{ $no_reg }}</b></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>{{ $name }}</td>
        </tr>
        <tr>
            <td>Sekolah</td>
            <td>{{ $jenjang }}IT - Bogor</td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>{{ $kelas }}</td>
        </tr>
        <tr>
            <td>Ukuran Baju/Blouse</td>
            <td>{{ $atasan }}</td>
        </tr>
        <tr>
            <td>Ukuran Celana/Rok</td>
            <td>{{ $bawahan }}</td>
        </tr>
    </table>

    <p>Terima kasih</p>
</body>
</html>
