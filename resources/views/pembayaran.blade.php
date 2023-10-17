<?php
use App\Models\pembayaran;
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

@section('title','Pembayaran')
@section('content')

    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: center ; margin: 40px 0 0 0 ; text-decoration: underline">Pembayaran</p>     
        {{-- <table style= "margin-top: 16px"> --}}
        <table id="example2" class="table table-bordered table-hover">
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Amount</th>
                <th>Payment Date</th>
                <th>Payment Method</th>
            </tr>

            <tr>
            <?php
               $pembayarans = pembayaran::all();
            ?>
                @foreach ($pembayarans as $pembayaran)
                    <tr>
                        <td>{{$pembayaran->id}}</td>
                        <td>{{$pembayaran->studentid}}</td>
                        <td>{{$pembayaran->amount}}</td>
                        <td>{{$pembayaran->paymentdate}}</td>
                        <td>{{$pembayaran->paymentmethod}}</td>
                    </tr>
                @endforeach
        </table>
    </div>
@endsection
