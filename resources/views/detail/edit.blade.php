@extends('layouts.app')
@section('content')
					


				<div class="row">
					<div class="col-md-12">
						
						<h2>Edit Detail</h2>
				<form action="{{url('/detail/update', $detail->id)}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
				    	<label for="exampleFormControlInput1">ID Transaksi</label>
						  <input class="form-control" name="id_transaksi" value="{{$detail->transaksi->id}}" disabled>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Nama Member</label>
						  <input class="form-control" name="id_member" value="{{$detail->transaksi->member->nama}}" disabled>
				  	</div>

				  	<div class="row">
				  		<div class="col-md-4">
							<div class="form-group">
							  	<label  for="exampleInputEmail1">Paket</label>
							  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control" name="id_paket">
								  	<option selected disabled>Pilih Paket</option>
								  	
								  	@foreach($data_paket as $paket)
								 	<option value="{{$paket->id}}" @if($paket->id == $detail->id_paket) selected @endif>{{$paket->nama_paket}}</option>
								  	@endforeach
								</select>
							</div>
						</div>


						<div class="col-md-4">
						  	<div class="form-group">
						    	<div class="col-md-4">
						    	<label for="exampleFormControlInput1">Jumlah</label>
						    		<input type="number" name="qty" class="form-control" id="exampleFormControlInput1" value="{{$detail->qty}}" required>
						    	</div>
					  	</div>
					  	</div>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Keterangan</label>

				    	<textarea name="keterangan" class="form-control" required>{{$detail->keterangan}}</textarea>
				  	</div>



				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

					</div>
				</div>	

				


@endsection