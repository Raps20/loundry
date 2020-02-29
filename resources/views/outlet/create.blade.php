@extends('layouts.app')
@section('content')

		<div class="container">
			<div class="row">
				<div class="col-6">
					
					<h4>Tambah Outlet</h4>


					
				<form action="{{url('/outlet/store')}}" method="post">
					{{csrf_field()}}

					
					

				    <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama</label>
				    	<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" required>
				  	</div>
				  
				  	<div class="form-group">
				    	<label for="exampleFormControlTextarea1">Alamat</label>
				    	<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">No. Telp</label>
				    	<input type="text" name="tlp" class="form-control" id="exampleFormControlInput1" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

				</div>


			</div>
		</div>
		@endsection