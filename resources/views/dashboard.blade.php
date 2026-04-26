@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<section class="content">

    <div class="content-header">
        <a href="/tambah-lapak" class="btn-tambah">
            + Tambah Data Lapak
        </a>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Total Pendapatan</h3>
            <h1>Rp 5.000.000</h1>
        </div>

        <div class="card">
            <h3>Total Transaksi</h3>
            <h1>120</h1>
        </div>

        <div class="card">
            <h3>Lapak Aktif</h3>
            <h1>8</h1>
        </div>

    </div>
</section>
@endsection
