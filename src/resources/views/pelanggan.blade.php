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
        <h1>Form input pelanggan</h1>
        <hr>
        <form action="{{ route("pelanggan.simpan") }}" method="POST">
            <div class="form-group">
                @csrf
                <label for="idpelanggan">id pelanggan</label>
                <input type="text" class="form-control" name="idpelanggan">
            </div>
            <div class="form-group">
                <label for="namapelanggan">Nama pelanggan</label>
                <input type="text" name="namapelanggan" class="form-control"id="">
            </div>
            <div class="form-group">
                <label for="alamatpelanggan">Alamat</label>
                <input type="text" name="alamatpelanggan" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="notelepon">notelepon</label>
                <input type="text" name="notelepon" class="form-control" id="">
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i>batal</a>
            </div>
        </form>
    </div>

    <div class="container">
        <h1>List pelanggan</h1>
        <hr>
        <table class = "table table-borderless">
            <thead>
                <tr>
                  <th>Id pelanggan</th>
                  <th>Nama pelanggan</th>
                  <th>Alamat pelanggan</th>
                  <th>No telepon</th>
                  <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pelanggan as $item)
                <tr>
                    <td>{{ $item->idpelanggan }}</td>
                    <td>{{ $item->namapelanggan }}</td>
                    <td>{{ $item->alamatpelanggan }}</td>
                    <td>{{ $item->notelepon }}</td>
                    <td><a href="{{ route("pelanggan.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right"
                      onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i></a></td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection
