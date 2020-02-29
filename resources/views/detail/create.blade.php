@extends('layouts.app')
@section('content')
					


				<div class="row">
					<div class="col-md-12">
						
						<h2>Detail Transaksi</h2>
				<form action="{{url('/detail/store' ,$transaksi->id)}}" method="post">
					{{csrf_field()}}

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">ID Transaksi</label>
						  <input class="form-control" value="{{$transaksi->id}}" disabled>
						  <input type="hidden" name="id_transaksi" value="{{$transaksi->id}}">
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Nama Member</label>
						  <input class="form-control" value="{{$transaksi->member->nama}}" disabled>
						  <input type="hidden" name="id_member" value="{{$transaksi->member->id}}">
				  	</div>

				  	<div class="row">
				  		<div class="col-md-4">
							<div class="form-group">
							  	<label  for="exampleInputEmail1">Paket</label>
							  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('id_paket') is-invalid @enderror" name="id_paket"  required autocomplete="id_paket" autofocus>
								  	<option selected disabled>Pilih Paket</option>
								  	
								  	@foreach($data_paket as $paket)
								 	<option value="{{$paket->id}}">{{$paket->nama_paket}}</option>
								  	@endforeach
								</select>
								@error('id_paket')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
							</div>
						</div>
				  		<div class="col-md-4">
						  	<div class="form-group">
						    	<label for="exampleFormControlInput1">Jumlah</label>
						    	<div class="row">
							    	<div class="col-md-4">
							    		<input type="number" name="qty" class="form-control" id="exampleFormControlInput1" required>
							    	</div>
						    	</div>
						  	</div>
						</div>
					</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Keterangan</label>

				    	<textarea name="keterangan" class="form-control" required></textarea>
				  	</div>



				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

					</div>
				</div>	

				


@endsection