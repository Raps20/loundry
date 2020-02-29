@extends('layouts.app')
@section('content')
					


				<div class="row">
					<div class="col-md-12">
						
						<h2>Tambah User</h2>
				<form action="{{url('/user/store')}}" method="post">
					{{csrf_field()}}
				    <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama</label>
				    	<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" required>
				  	</div>
				  
				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Username</label>
				    	<input type="text" name="username" class="form-control" id="exampleFormControlInput1" required>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Password</label>
				    	<input type="password" name="password" class="form-control" id="exampleFormControlInput1" required>
				  	</div>

				  	<div class="form-group">
					  	<label  for="exampleInputEmail1">Role</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" required autocomplete="role" autofocus>
						  	<option selected disabled>Pilih Role</option>
						 	<option value="Admin">Admin</option>
						  	<option value="Kasir">Kasir</option>
						  	<option value="Owner">Owner</option>
						  	<option value="Petugas">Petugas</option>
						</select>
						@error('role')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                @enderror
					</div>

					
					<div class="form-group">
					  	<label  for="exampleInputEmail1">Outlet</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('id_outlet') is-invalid @enderror" name="id_outlet" value="{{ old('id_outlet') }}" required autocomplete="id_outlet" autofocus>
						  	<option selected disabled>Pilih Outlet</option>
						  	
						  	@foreach($data_outlet as $outlet)
						 	<option value="{{$outlet->id}}">{{$outlet->role}}</option>
						  	@endforeach
						</select>
						@error('id_outlet')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                @enderror
					</div>

				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

					</div>
				</div>	

				


@endsection