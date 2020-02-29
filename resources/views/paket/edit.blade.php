@extends('layouts.app')
@section('content')


			<div class="row">
				<div class="col-6">
					
					<h4>Edit paket</h4>


					
				<form action="{{url('/paket/update',$paket->id)}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
				    	<label for="exampleFormControlInput1">ID Outlet</label>
				    	<select class="custom-select form-control" name="id_outlet">

						 	@foreach($data_outlet as $outlet)
						 	<option value="{{$outlet->id}}" @if($paket->id_outlet == $outlet->id) selected  @endif>{{$outlet->nama}}</option>
						  	@endforeach
						  </select>
				  	</div>

				  	<div class="form-group form">
				  		<label for="exampleFormControlInput1">Jenis</label>
					  	<select class="custom-select form-control" name="jenis">
					  		
						  	<option selected>Pilih Jenis</option>
						 	<option value="kiloan" @if($paket->jenis == 'kiloan') selected @endif>Kiloan</option>
						  	<option value="selimut" @if($paket->jenis == 'selimut') selected @endif>Selimut</option>
						  	<option value="bed_cover" @if($paket->jenis == 'bed_cover') selected @endif>Bed Cover</option>
						  	<option value="kaos" @if($paket->jenis == 'kaos') selected @endif>Kaos</option>
						  	<option value="lain" @if($paket->jenis == 'lain') selected @endif>Lain-Lain</option>
						</select>
					</div>

				    <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama Paket</label>
				    	<input type="text" name="nama_paket" class="form-control" id="exampleFormControlInput1" value="{{$paket->nama_paket}}" required>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">Harga</label>
				    	<input type="text" name="harga" class="form-control" id="exampleFormControlInput1" value="{{$paket->harga}}" required>
				  	</div>
				  	
				  	<button type="submit" class="btn btn-warning">Update</button>
				</form>

				</div>


			</div>
		@endsection