@extends('layouts.app')
@section('content')



					@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
			<div class="row">
				<div class="col-md-6">
					
					<h1>Detail Transaksi</h1>

				</div>

				

				<div class="table table-responsive">

						<table class="table table-hover">
							<thead>
							    <tr>
							      	<th>ID Transaksi</th>
							      	<th>Nama Member</th>
							      	<th>Jenis Paket</th>
							      	<th>Jumlah</th>
							      	<th>Keterangan</th>						      	
							      	<th>Aksi</th>
							    </tr>
							</thead>

							  @foreach($data_detail as $detail)
							  <tbody>
							    <tr>
							    	<td>{{$detail->id_transaksi}}</td>
							    	<td>{{$detail->member->nama}}</td>
							    	<td>{{$detail->paket->nama_paket}}</td>
							    	<td>{{$detail->qty}}</td>
							    	<td>{{$detail->keterangan}}</td>
							    	
							    	<td>

							    		@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')				

							    		<a href="{{url('/detail/edit',$detail->id)}}" class="btn btn-warning">Edit</a>

					    				<a href="{{url('/detail/delete',$detail->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus')">Delete</a>
					    				@endif
							    	</td>
							    </tr>
							  </tbody>
							  @endforeach
						</table>

					</div>
				</div>

@endsection