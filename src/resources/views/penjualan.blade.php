@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-4">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-dark" href="home">BARANG<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-dark" href="karyawan">KARYAWAN<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-dark" href="pelanggan">DATA PELANGGAN<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-dark" href="penjualan">PENJUALAN<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="container">
        <h1>Form input penjualan</h1>
        <hr>
        <form action="{{ route("penjualan.simpan") }}" method="POST">
            <div class="form-group">
                @csrf
                <label for="idkaryawan">id karyawan</label>
                <input type="text" class="form-control" name="idkaryawan">
            </div>
            <div class="form-group">
                <label for="idpelanggan">idpe pelanggan</label>
                <input type="text" name="idpelanggan" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="id_barang">id barang</label>
                <input type="text" name="id_barang" class="form-control"id="">
            </div>
            <div class="form-group">
                <label for="namabarang">Nama barang</label>
                <input type="text" name="namabarang" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="tanggalpenjualan">tanggal penjualan</label>
                <input type="date" name="tanggalpenjualan" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="jumlah">jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="harga">harga</label>
                <input type="text" name="harga" class="form-control" id="">
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i>batal</a>
            </div>
        </form>
    </div>

    <div class="container">
        <h1>List penjualan</h1>
        <hr>
        <table class = "table table-borderless">
            <thead>
                <tr>
                  <th>Id Karyawan</th>
                  <th>Id pelanggan</th>
                  <th>Id barang</th>
                  <th>Nama barang</th>
                  <th>Tanggal penjualan</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($penjualan as $item)
                <tr>
                    <td>{{ $item->idkaryawan }}</td>
                    <td>{{ $item->idpelanggan}}</td>
                    <td>{{ $item->id_barang}}</td>
                    <td>{{ $item->namabarang}}</td>
                    <td>{{ $item->tanggalpenjualan}}</td>
                    <td>{{ $item->jumlah}}</td>
                    <td>{{ $item->harga}}</td>
                    <td><a href="{{ route("penjualan.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right"
                      onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i></a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
