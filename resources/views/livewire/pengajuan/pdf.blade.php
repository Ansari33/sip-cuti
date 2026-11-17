<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR PENGAJUAN CUTI</title>
</head>
<style>
    table {
        border-collapse: collapse;
        /* Collapses adjacent cell borders into a single border */
        width: 100%;
        margin-bottom: 15px;
        margin-top: 15px;
    }

    td {
        padding: 10px;
    }

    h4 {
        text-align: center;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .tglctk {
        margin: 200px, 0px, 10px, 0px;
    }
</style>

<body>


    <h4>DAFTAR PENGAJUAN CUTI</h4>
    <table border="1">
        <tr>
            <td width="30%">Nama</td>
            <td width="70%">{{ $pegawai->nama }}</td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>{{ $pegawai->nip }}</td>
        </tr>
        <tr>
            <td>Level Jabatan</td>
            <td>{{ $pegawai->jabatan }}</td>
        </tr>
        <tr>
            <td>Pangkat</td>
            <td></td>
        </tr>
        <tr>
            <td>Golongan Ruang</td>
            <td>{{ $pegawai->pangkat_gol }}</td>
        </tr>

    </table>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Pengaju</th>
                <th>Jenis Cuti</th>
                <th>Lama Cuti</th>
                <th>Tanggal Pengajuan</th>
                <th>Mulai</th>
                <th>Berakhir</th>
                <th>Status</th>
            </tr>
        </thead>
        @foreach($data as $dta => $d)
        <tr>
            <td width="5%">{{$loop->iteration}}</td>
            <td width="15%">{{$d->nip.' - '.$d->nama}}</td>
            <td width="15%">{{$d->jenis_cuti}}</td>
            <td width="15%">{{$d->lama_cuti}}</td>
            <td width="25%">{{$d->tanggal_pengajuan}}</td>
            <td width="40%">{{$d->tanggal_mulai}}</td>
            <td width="15%">{{$d->tanggal_berakhir}}</td>
            <td width="15%">{{$d->status}}</td>
        </tr>
        @endforeach
    </table>
    <table>
        
    </table>
    <span>

    </span>
    <table>
        
    </table>

</body>

</html>