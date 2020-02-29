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
					
					<h1>Data User</h1>

				</div>

				<div class="col-md-6">
					@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')
					<a href="{{ url('user/create') }}" class="btn btn-success float-right mr-1">Tambah</a>
					@endif
				</div>

				<table class="table table-hover">
					<thead>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Role</th>
							<th>Nama Outlet</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>
					@foreach($data_user as $user)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$user->nama}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->role}}</td>
						<td>{{$user->outlet->nama}}</td>
						<td>
							@if(Auth::user()->role == 'Admin')
							<a href="{{url('/user/edit',$user->id)}}" class="btn btn-warning">Edit</a>
							<a href="{{url('/user/delete',$user->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus')">Delete</a>
							@endif
						</td>
					</tr>
					@endforeach
					</tbody>
				</table>
				
			</div>
					
				
		</div>
	</div>
@endsection