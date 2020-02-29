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
					
					<h1>Data Outlet</h1>

				</div>

				<div class="col-md-6">
				@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')
					<a href="{{ url('outlet/create') }}" class="btn btn-success float-right mr-1">Tambah</a>
					@endif
				</div>

				<table class="table table-hover">
					<thead>
					    <tr>
					      	<th>ID</th>
					      	<th>Nama</th>
					      	<th>Alamat</th>
					      	<th>No. Telp</th>
					      	<th>Aksi</th>
					    </tr>
					</thead>

					  @foreach($data_outlet as $outlet)
					  <tbody>
					    <tr>
					    	<td>{{$outlet->id}}</td>
					    	<td>{{$outlet->nama}}</td>
					    	<td>{{$outlet->alamat}}</td>
					    	<td>{{$outlet->tlp}}</td>
					    	<td>
					    		@if(Auth::user()->role == 'Admin')
					    		<a href="{{url('/outlet/edit',$outlet->id)}}" class="btn btn-warning">Edit</a>
					    		<a href="{{url('/outlet/delete',$outlet->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus')">Delete</a>
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