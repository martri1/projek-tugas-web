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
        <a href="{{ route("barang.form")}}" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i>Tambah barang</a>
        <div class="clearfix"></div>

        <div class="row">
            @foreach ($barang as $item)
            <div class="col-md-3">
                <div class="card mt-2">
                    <div class="card-header bg-primary">
                        <h5>{{ $item->kodebarang }}</h5>
                        <p>{{ $item->namabarang }}</p>
                    </div>
                    <div class="card-body">
                        <p>Ukuran : {{ $item->ukuran }}</p>
                        <p>Merk : {{ $item->merek }}</p>
                        <p>Satuan : {{ $item->satuan }}</p>
                        <p>Harga : {{ $item->harga }}</p>
                        <p>Stok : {{ $item->stok }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route("barang.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right"
                            onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i> Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
