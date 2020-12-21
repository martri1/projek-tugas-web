@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route("barang.simpan") }}" method="POST">
            <div class="form-group">
                @csrf
                <label for="kodebarang">kode barang</label>
                <input type="text" class="form-control" name="kodebarang">
            </div>
            <div class="form-group">
                <label for="namabarang">nama barang</label>
                <input type="text" name="namabarang" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="ukuran">ukuran</label>
                <input type="text" name="ukuran" class="form-control"id="">
            </div>
            <div class="form-group">
                <label for="merek">merk</label>
                <input type="text" name="merek" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="satuan">satuan</label>
                <input type="text" name="satuan" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="harga">harga</label>
                <input type="text" name="harga" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="stok">stok</label>
                <input type="text" name="stok" class="form-control" id="">
            </div>
            <div class="form-group float-right">
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i>batal</a>
            </div>
        </form>
    </div>
@endsection
