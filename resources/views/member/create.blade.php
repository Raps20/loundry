@extends('layouts.app')
@section('content')
			<div class="row">
				<div class="col-6">
					
					<h4>Tambah Member</h4>


					
				<form action="{{url('/member/store')}}" method="post">
					{{csrf_field()}}
				    <div class="form-group">
				    	<label for="nama">Nama</label>
				    	<input id="nama" type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>
				  	</div>

				  	@error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				  
				  	<div class="form-group">
				    	<label for="alamat">Alamat</label>
				    	<textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required></textarea>
						  	
				  	</div>

				  	<div class="form-group">
					  	<label  for="jenis_kelamin">Jenis Kelamin</label>
					  	<select id="jenis_kelamin" aria-describedby="emailHelp" name="jenis_kelamin"  class="custom-select form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin"  required autocomplete="jenis_kelamin" autofocus>

						  	<option selected disabled>Pilih Jenis Kelamin</option>
						 	<option value="Laki-Laki">Laki-Laki</option>
						  	<option value="Perempuan">Perempuan</option>
						  	
						</select>
						  	@error('jenis_kelamin')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
					</div>

				  	<div class="form-group">
				    	<label for="tlp">No. Telp</label>
				    	<input id="tlp" type="text" name="tlp" class="form-control @error('tlp') is-invalid @enderror" name="tlp" value="{{ old('tlp') }}" required autocomplete="tlp" autofocus>

					  	@error('tlp')
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