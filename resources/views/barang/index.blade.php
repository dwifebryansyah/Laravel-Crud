@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<a href="{{ route('barang.create') }}" class="btn btn-md btn-primary mb-3">Tambah Barang</a>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-stripped">
                    	<thead>
                    		<th>No</th>
                    		<th>Nama</th>
                    		<th>Harga</th>
                    		<th>Kategori</th>
                    		<th>Stok</th>
                    		<th style="text-align: center;">Action</th>
                    	</thead>
                    	<tbody>
                    		
                    		@foreach($barangs as $barang)
                    			
                    		<tr>
                    		<td>{{$barang->id}}</td>
                    		<td>{{$barang->nama}}</td>
                    		<td>{{$barang->harga}}</td>
                    		<td>{{$barang->kategori}}</td>
                    		<td>{{$barang->stok}}</td>
                    		<td>
                                <form method="post" action="{{ route('barang.destroy',$barang->id) }}">
                                    @csrf

                                    @method('delete')
                    			<a class="btn btn-sm btn-primary" href="{{ route('barang.show',$barang->id) }}">Show</a>
                    			<a class="btn btn-sm btn-success" href="{{ route('barang.edit',$barang->id) }}">Edit</a>
                    			<button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                    		</td>	
                    		</tr>
                    		
                    		@endforeach
                    	</tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
