<?php
use App\Models\matakuliah;
?>

@extends('layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
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
    </style>

@section('title','Profil')
@section('content')

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">MATA KULIAH</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Kode Mata Kuliah</th>
                <th>Mata Kuliah</th>
                <th>SKS</th>
            </tr>

            <tr>
            <?php
               $matakuliahs = matakuliah::all();
            ?>
                @foreach ($matakuliahs as $matakuliah)
                    <tr>
                        <td>{{$matakuliah->id}}</td>
                        <td>{{$matakuliah->kodeMatakuliah}}</td>
                        <td>{{$matakuliah->matakuliah}}</td>
                        <td>{{$matakuliah->sks}}</td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
