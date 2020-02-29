@extends('layouts.app')
@section('content')

		<div class="container">
			<div class="row">
				<div class="col-6">
					
					<h4>Edit Member</h4>


					
				<form action="{{url('/member/update',$member->id)}}" method="post">
					{{csrf_field()}}
				    <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama</label>
				    	<input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="{{$member->nama}}" required>
				  	</div>
				  
				  	<div class="form-group">
				    	<label for="exampleFormControlTextarea1">Alamat</label>
				    	<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$member->alamat}}</textarea>
				  	</div>

				  	<div class="form-group">
					  	<select class="custom-select form-control" name="jenis_kelamin" required>
					  		
						  	<option selected disabled>Choose Level</option>
						 	<option value="Laki-Laki" @if($member->jenis_kelamin == 'Laki-Laki') selected @endif>Laki-Laki</option>
						  	<option value="Perempuan" @if($member->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
						</select>
					</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">No. Telp</label>
				    	<input type="text" name="tlp" class="form-control" id="exampleFormControlInput1" value="{{$member->tlp}}" required>
				  	</div>

				  	<button type="submit" class="btn btn-warning">Update</button>
				</form>

				</div>


			</div>
		</div>
	
	@endsection