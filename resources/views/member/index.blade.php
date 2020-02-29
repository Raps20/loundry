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
					
					<h1>Data Member</h1>

				</div>

				<div class="col-md-6">

					@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')
				
					<a href="{{ url('member/create') }}" class="btn btn-success float-right mr-1">Tambah</a>
					@endif
					
				</div>

				<table class="table table-hover">
					<thead>
					    <tr>
					      	<th>No.</th>
					      	<th>Nama</th>
					      	<th>Alamat</th>
					      	<th>Jenis Kelamin</th>
					      	<th>No. Telp</th>
					      	<th>Aksi</th>
					    </tr>
					</thead>

					  @foreach($data_member as $member)
					  <tbody>
					    <tr>
					    	<td>{{$loop->iteration}}</td>
					    	<td>{{$member->nama}}</td>
					    	<td>{{$member->alamat}}</td>
					    	<td>{{$member->jenis_kelamin}}</td>
					    	<td>{{$member->tlp}}</td>
					    	<td>

							    		@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')

					    		<a href="{{url('/transaksi/tambah',$member->id)}}" class="btn btn-info">Transaksi</a>
					    		<a href="{{url('/member/edit',$member->id)}}" class="btn btn-warning">Edit</a>
					    		<a href="{{url('/member/delete',$member->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus')">Delete</a>
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