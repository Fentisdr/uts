@extends('layouts.app')

@section('content')
    <h1>Tambah Barang</h1>
    <form action="{{ route('barang.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang" required>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" required>
        </div>
        <div class="form-group">
            <label for="harga_barang">Harga Barang</label>
            <input type="number" class="form-control" id="harga_barang" name="harga_barang" required>
        </div>
        <div class="form-group">
            <label for="deskripsi_barang">Deskripsi Barang</label>
            <textarea class="form-control" id="deskripsi_barang" name="deskripsi_barang"></textarea>
        </div>
        <div class="form-group">
            <label for="satuan_id">Satuan</label>
            <select class="form-control" id="satuan_id" name="satuan_id" required>
                @foreach($satuans as $satuan)
                    <option value="{{ $satuan->id }}">{{ $satuan->nama_satuan }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
