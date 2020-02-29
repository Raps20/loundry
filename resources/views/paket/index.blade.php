@extends('layouts.app')
@section('content')


	<div class="row">
		<div class="col-md-12">

					@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
			<div class="row">
				<div class="col-md-6">
					
					<h1>Data Paket</h1>

				</div>

				<div class="col-md-6">
					@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')
				
					<a href="{{ url('paket/create') }}" class="btn btn-success float-right mr-1">Tambah</a>
					@endif
				</div>

				<table class="table table-hover">
					<thead>
					    <tr>
					      	<th>No.</th>
					      	<th>Nama Outlet</th>
					      	<th>Jenis</th>
					      	<th>Nama Paket</th>
					      	<th>Harga</th>
					      	<th>Aksi</th>
					    </tr>
					</thead>

					  @foreach($data_paket as $paket)
					  <tbody>
					    <tr>
					    	<td>{{$loop->iteration}}</td>
					    	<td>{{$paket->outlet->nama}}</td>
					    	<td>{{$paket->jenis}}</td>
					    	<td>{{$paket->nama_paket}}</td>
					    	<td>Rp. {{$paket->harga}}</td>
					    	<td>
					    		@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')
					    		<a href="{{url('/paket/edit',$paket->id)}}" class="btn btn-warning">Edit</a>
					    		<a href="{{url('/paket/delete',$paket->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus')">Delete</a>
					    		@endif
					    	</td>
					    </tr>
					  </tbody>
					  @endforeach
				</table>
				
			</div>
					
				
		</div>
	</div>

			

@endsection