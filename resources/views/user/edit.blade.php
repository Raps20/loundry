@extends('layouts.app')
@section('content')


			<div class="row">
				<div class="col-6">
					
					<h4>Edit User</h4>


					
				<form action="{{url('/user/update',$user->id)}}" method="post">
					{{csrf_field()}}
				    <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama</label>
				    	<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$user->nama}}" required>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Username</label>
				    	<input type="text" name="username" class="form-control" id="exampleFormControlInput1" value="{{$user->username}}" required>
				  	</div>
				  
				  	

				  	<div class="form-group form">
				  		<label for="exampleFormControlInput1">Role</label>
					  	<select class="custom-select form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
					  		
						  	<option selected disabled>Choose Role</option>
						 	<option value="Admin" @if($user->role == 'Admin') selected @endif>Admin</option>
						  	<option value="Kasir" @if($user->role == 'Kasir') selected @endif>Kasir</option>
						  	<option value="Owner" @if($user->role == 'Owner') selected @endif>Owner</option>
						  	<option value="Petugas" @if($user->role == 'Petugas') selected @endif>Petugas</option>
						</select>
						@error('role')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                @enderror
					</div>

					<div class="form-group">
				    	<label for="exampleFormControlInput1">ID Outlet</label>
				    	<select class="custom-select form-control @error('id_outlet') is-invalid @enderror" name="id_outlet" value="{{ old('id_outlet') }}" required autocomplete="id_outlet" autofocus>

						 	@foreach($data_outlet as $outlet)
						 	<option value="{{$outlet->id}}" @if($user->id_outlet == $outlet->id) selected  @endif>{{$outlet->nama}}</option>
						  	@endforeach
						  </select>
						  @error('id_outlet')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                @enderror
				  	</div>

				  	<button type="submit" class="btn btn-warning">Update</button>
				</form>

				</div>


			</div>
		@endsection