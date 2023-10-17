<?php
use App\Models\jadwalkuliah;
?>

@extends('layouts.app2')
{{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style> --}}

@section('title','Jadwal Perkuliahan')
@section('content')

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Jadwal Perkuliahan</p>     
        {{-- <table style= "margin-top: 16px"> --}}
        <table id="example2" class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Kode Mata Kuliah</th>
                <th>Kode Term</th>
                <th>Kode Dosen</th>
                <th>Day</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Ruangan</th>
            </tr>

            <tr>
            <?php
               $jadwalkuliahs = jadwalkuliah::all();
            ?>
                @foreach ($jadwalkuliahs as $jadwalkuliah)
                    <tr>
                        <td>{{$jadwalkuliah->id}}</td>
                        <td>{{$jadwalkuliah->kodematakuliah}}</td>
                        <td>{{$jadwalkuliah->kodeterm}}</td>
                        <td>{{$jadwalkuliah->kodedosen}}</td>
                        <td>{{$jadwalkuliah->day}}</td>
                        <td>{{$jadwalkuliah->jammulai}}</td>
                        <td>{{$jadwalkuliah->jamselesai}}</td>
                        <td>{{$jadwalkuliah->ruangan}}</td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
