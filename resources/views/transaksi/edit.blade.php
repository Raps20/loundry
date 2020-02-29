@extends('layouts.app')
@section('content')


			<div class="row">
				<div class="col-6">
					
					<h4>Edit Transaksi</h4>


					
				<form action="{{url('/transaksi/update',$transaksi->id)}}" method="post">
					{{csrf_field()}}
				    <div class="form-group">
				    	<label for="exampleFormControlInput1">ID Outlet</label>
				    	<select class="custom-select form-control" name="id_outlet">

						 	@foreach($data_outlet as $outlet)
						 	<option value="{{$outlet->id}}" @if($transaksi->id_outlet == $outlet->id) selected  @endif>{{$outlet->nama}}</option>
						  	@endforeach
						  </select>
				  	</div>

				  	<div class="form-group">
				    	<label for="exampleFormControlInput1">ID Member</label>
				    	<input type="text" name="id_member" class="form-control" id="exampleFormControlInput1" value="{{$transaksi->member->nama}}" disabled>
				  	</div>
				  
				  	<div class="form-group">
				    	<label>Tanggal</label>
				    	<div class="row">
				    		
					    	<div class="col-md-4">					    		
					    		<input type="text" name="created_at" class="form-control" value="{{ $transaksi->created_at }}">
					    	</div>
				    	</div>
				  	</div>
				  
				  	<div class="form-group">
				    	<label>Batas Waktu</label>
				    	<div class="row">
				    		
					    	<div class="col-md-4">					    		
					    		<input type="text" name="batas_waktu" class="form-control" value="{{ $transaksi->batas_waktu }}">
					    	</div> 
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label>Tanggal Bayar</label>
				    	<div class="row">
				    		
					    	<div class="col-md-4">					    		
					    		<input type="date" name="tgl_bayar" class="form-control" value="{{ $transaksi->tgl_bayar}}">
					    	</div>
				    	</div>
				  	</div>
				  	

				  	<div class="form-group form">
				  		<label for="exampleFormControlInput1">Status</label>
					  	<select class="custom-select form-control" name="status">
					  		
						  	<option selected disabled>Choose Status</option>

						  	@if(Auth::user()->role == 'Kasir' || Auth::user()->role == 'Admin')
						 	<option value="baru" @if($transaksi->status == 'baru') selected @endif>Baru</option>
						  	<option value="diambil" @if($transaksi->status == 'diambil') selected @endif>Diambil</option>
						  	@endif

						 	@if(Auth::user()->role == 'Petugas' || Auth::user()->role == 'Admin')
						  	<option value="proses" @if($transaksi->status == 'proses') selected @endif>Proses</option>
						  	<option value="selesai" @if($transaksi->status == 'selesai') selected @endif>Selesai</option>
						  	@endif
						</select>
					</div>


					<div class="form-group form">
				  		<label for="exampleFormControlInput1">Pembayaran</label>
					  	<select class="custom-select form-control" name="pembayaran">
					  		
						  	<option selected disabled>Pilih Pembayaran</option>
						 	<option value="dibayar" @if($transaksi->pembayaran == 'dibayar') selected @endif>Dibayar</option>
						  	<option value="belum_dibayar" @if($transaksi->pembayaran == 'belum_dibayar') selected @endif>Belum Dibayar</option>
						</select>
					</div>

					<div class="form-group">
				    	<label for="exampleFormControlInput1">ID User</label>

				    	<select name="id_user" class="form-control">
				    		@foreach($data_user as $user)
				    	<option value="{{$user->id}}" @if($transaksi->id_user == $user->id) selected @endif>{{$user->nama}}</option>
				    	@endforeach
				    	</select>
				  	</div>

				  	

					

				  	<button type="submit" class="btn btn-warning">Update</button>
				</form>

				</div>


			</div>
		@endsection