<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN KINERJA {{ $bulanStr[$bulan] }} {{$tahun}}</title>
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


    <h4>LAPORAN KINERJA {{ $bulanStr[$bulan] }} {{$tahun}}</h4>
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

    <span class="tglctk">Tanggal Cetak :</span>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Kegiatan</th>
                <th>Uraian Kegiatan</th>
                <th>Volume</th>
            </tr>
        </thead>
        @foreach($data as $dta => $d)
        <tr>
            <td width="5%">{{$loop->iteration}}</td>
            <td width="15%">{{$d->tanggal}}</td>
            <td width="25%">{{$d->kegiatan}}</td>
            <td width="40%">{{$d->uraian_kegiatan}}</td>
            <td width="15%">{{$d->volume}}</td>
        </tr>
        @endforeach
    </table>
    <table>
        <tr>
            <td></td>
            <td > <span style="margin-left: 120px;">Waingapu, {{ date('d').' '.ucwords(strtolower($bulanStr[intval(date('m'))])).' '.date('Y')}}</span></td>
        </tr>
        <tr>
            <td>Mengetahui</td>
            <td></td>
        </tr>

        <tr>
            <td>{{$atasan->jabatan}} <br>
                Kantor Kementerian Agama <br>
                Kab. Sumba Timur
            </td>
            <td> <span style="margin-left: 100px;"> Pegawai </span></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><u>{{$atasan->nama}}</u><br>
                Nip. {{$atasan->nip}}
            </td>
            <td>
                <u><span style="margin-left: 80px;">{{$pegawai->nama}}</span></u><br>
                <span style="margin-left: 80px;">Nip. {{$pegawai->nip}} </span>
            </td>
        </tr>
    </table>
    <span>

    </span>
    <table>
        
    </table>

</body>

</html>