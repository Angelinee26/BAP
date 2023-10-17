<?php
use App\Models\programstudi;
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

@section('title','Program Studi')
@section('content')

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Program Studi</p>     
        {{-- <table style= "margin-top: 16px"> --}}
        <table id="example2" class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Nama Program Studi</th>
                <th>Deskripsi</th>
            </tr>

            <tr>
            <?php
               $programstudis = programstudi::all();
            ?>
                @foreach ($programstudis as $programstudi)
                    <tr>
                        <td>{{$programstudi->id}}</td>
                        <td>{{$programstudi->nama}}</td>
                        <td>{{$programstudi->deskripsi}}</td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
