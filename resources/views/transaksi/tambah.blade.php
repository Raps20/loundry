@extends('layouts.app')
@section('content')
					


				<div class="row">
					<div class="col-md-12">
						
						<h2>Tambah Transaksi</h2>
				<form action="{{url('/transaksi/show', $member->id)}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
					  	<label  for="exampleInputEmail1">Outlet</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('id_outlet') is-invalid @enderror" name="id_outlet"  required autocomplete="id_outlet" autofocus>
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
				    	<label for="exampleFormControlInput1">ID Member</label>

						  <input type="text" class="form-control" value="{{$member->nama}}" disabled>
						  <input type="hidden" name="id_member" value="{{$member->id}}">
				  	</div>




					
					<!-- <div class="form-group">
				    	<label for="exampleFormControlInput1">ID Member</label>
				    	<input type="text" name="id_member" class="form-control" id="exampleFormControlInput1">
				  	</div> -->
				  
		            
				  
				  	<div class="form-group">
				    	<label>Batas Waktu</label>
				    	<div class="row">
				    		
					    	<div class="col-md-4">					    		
					    		<input type="date" name="batas_waktu" class="form-control" required>
					    	</div>
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label>Tanggal Bayar</label>
				    	<div class="row">
				    		
					    	<div class="col-md-4">					    		
					    		<input type="date" name="tgl_bayar" class="form-control">
					    	</div>
				    	</div>
				  	</div>

				  	
				  	<div class="form-group">
					  	<label  for="exampleInputEmail1">Status</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('status') is-invalid @enderror" name="status"  required autocomplete="status" autofocus>
						  	<option selected disabled>Pilih Status</option>
						  	@if(Auth::user()->role == 'Kasir' || Auth::user()->role == 'Admin')
						 	<option value="baru">Baru</option>
						  	<option value="diambil">Diambil</option>
						  	@endif
						  	
						  	@if(Auth::user()->role == 'Petugas' || Auth::user()->role == 'Admin')
						 	<option value="proses">Proses</option>
						  	<option value="selesai">Selesai</option>
						  	@endif
						</select>

						@error('status')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
					</div>

					<div class="form-group">
					  	<label  for="exampleInputEmail1">Status Pembayaran</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('pembayaran') is-invalid @enderror" name="pembayaran"  required autocomplete="pembayaran" autofocus>
						  	<option selected disabled>Pilih Status</option>
						 	<option value="dibayar">Sudah Dibayar</option>
						  	<option value="belum_dibayar">Belum Dibayar</option>
						</select>

						@error('pembayaran')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
					</div>


					<div class="form-group">
					  	<label  for="exampleInputEmail1">User</label>
					  	<select id="exampleInputEmail1" aria-describedby="emailHelp"  class="custom-select form-control @error('id_user') is-invalid @enderror" name="id_user"  required autocomplete="id_user" autofocus>
						  	<option selected disabled>Pilih User</option>
						  	
						  	@foreach($data_user as $user)
						 	<option value="{{$user->id}}">{{$user->nama}}</option>
						  	@endforeach
						</select>
						@error('id_user')
		                        <span class="invalid-feedback" role="alert">
		                            <strong>{{ $message }}</strong>
		                        </span>
		                    @enderror
					</div>

				  	
				  	<!-- <div class="form-group">
				    	<label for="exampleFormControlInput1">Nama</label>
				    	<input type="text" name="id_user" class="form-control" id="exampleFormControlInput1">
				  	</div> -->

					

				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>

					</div>
				</div>	

				


@endsection