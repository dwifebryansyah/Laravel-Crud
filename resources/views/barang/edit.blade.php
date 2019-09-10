@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="form-group">
                    <div class="card-header">
                    Form Update Barang
                    <a class="btn btn-sm btn-danger" href="{{ route('barang.index') }}" style="margin-left: 60%;">
                        Kembali
                    </a></div>
                </div>  
                <div class="card-body" style="background-color: green">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{ route('barang.update', $barang->id ) }}">
                        @csrf

                        @method('patch')
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" name="nama" value="{{ $barang->nama }}"></input>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input class="form-control" name="harga" value="{{ $barang->harga }}"></input>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input class="form-control" name="kategori" value="{{ $barang->kategori }}"></input>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input class="form-control" name="stok" value="{{ $barang->stok }}"></input>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection