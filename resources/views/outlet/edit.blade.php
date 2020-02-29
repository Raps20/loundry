@extends('layouts.app')
@section('content')
					<div class="row">
						<div class="col-md-12">
							
					<div class="col-md-6">
						
						<h2>Edit Outlet</h2>
					</div>

					<div class="col-md-12">
						
						<form action="{{url('/outlet/update',$outlet->id)}}" method="post">
					{{csrf_field()}}

					

				    <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama</label>
				    	<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$outlet->nama}}" required>
				  	</div>
				  
				  	<div class="form-group">
				    	<label for="exampleFormControlTextarea1">Alamat</label>
				    	<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$outlet->alamat}}</textarea>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">No. Telp</label>
				    	<input type="text" name="tlp" class="form-control" id="exampleFormControlInput1" value="{{$outlet->tlp}}" required>
				  	</div>

				  	<button type="submit" class="btn btn-warning">Update</button>
				</form>
						
					</div>	
					
				
						</div>
					</div>

				
		@endsection