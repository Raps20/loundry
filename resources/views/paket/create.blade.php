@extends('layouts.app')
@section('content')
					


				<div class="row">
					<div class="col-md-12">
						
						<h2>Tambah Paket</h2>
				<form action="{{url('/paket/store')}}" method="post">
					{{csrf_field()}}

				    <div class="form-group">
					  	<label  for="exampleInputEmail1">Outlet</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('id_outlet') is-invalid @enderror" name="id_outlet" value="{{ old('id_outlet') }}" required autocomplete="id_outlet" autofocus>
						  	<option selected disabled>Pilih Outlet</option>
						  	
						  	@foreach($data_outlet as $outlet)
						 	<option value="{{$outlet->id}}">{{$outlet->nama}}</option>
						  	@endforeach
						</select>
						@error('id_outlet')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                @enderror
					</div>
				  				  	

				  	<div class="form-group">
					  	<label  for="exampleInputEmail1">Jenis</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('jenis') is-invalid @enderror" name="jenis" value="{{ old('jenis') }}" required autocomplete="jenis" autofocus>
						  	<option selected disabled>Pilih Jenis</option>
						 	<option value="kiloan">Kiloan</option>
						  	<option value="selimut">Selimut</option>
						  	<option value="bed_cover">Bed Cover</option>
						  	<option value="kaos">Kaos</option>
						  	<option value="lain">Lain-Lain</option>
						</select>
						@error('jenis')
	                        <span class="invalid-feedback" role="alert">
	                            <strong>{{ $message }}</strong>
	                        </span>
		                @enderror
					</div>

					
					<div class="form-group">
				    	<label for="exampleFormControlInput1">Nama Paket</label>
				    	<input type="text" name="nama_paket" class="form-control" id="exampleFormControlInput1" required>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Harga</label>
				    	<input type="number" name="harga" class="form-control" id="exampleFormControlInput1" required>
				  	</div>

				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

					</div>
				</div>	

				


@endsection