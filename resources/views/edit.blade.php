@extends('layouts.app')

@section('content')
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" value="{{ $barang->kode_barang }}" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        </div>
        <div class="form-group">
            <label for="harga_barang">Harga Barang</label>
            <input type="number" class="form-control" id="harga_barang" name="harga_barang" value="{{ $barang->harga_barang }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_barang">Deskripsi Barang</label>
            <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang">{{ $barang->deskripsi_barang }}</textarea>
        </div>
        <div class="form-group">
            <label for="satuan_id">Satuan</label>
            <select class="form-control" id="satuan_id" name="satuan_id
