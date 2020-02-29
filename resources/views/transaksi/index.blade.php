@extends('layouts.app')
@section('content')



					@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
			@endif
			<div class="row">
				<div class="col-md-6">
					
					<h1>Data Transaksi</h1>

				</div>

				<div class="col-md-6">

					<a href="{{url ('/transaksi/exportpdf')}}" class="btn btn-primary float-right"><i class="fa fa-print"></i>Cetak</a>

				</div>

				

				<div class="table table-responsive">

						<table class="table table-hover">
							<thead>
							    <tr>
							      	<th>Nama Member</th>
							      	<th>Outlet</th>
							      	<th>Tanggal</th>
							      	<th>Batas Waktu</th>
							      	<th>Tanggal Bayar</th>							      	
							      	<th>Status</th>
							      	<th>Pembayaran</th>
							      	<th>User</th>
							      	<th>Aksi</th>
							    </tr>
							</thead>

							  @foreach($data_transaksi as $transaksi)
							  <tbody>
							    <tr>
							    	<td>{{$transaksi->member->nama}}</td>
							    	<td>{{$transaksi->outlet->nama}}</td>
							    	<td>{{$transaksi->created_at->format('D, d M Y')}}</td>
							    	<td>{{$transaksi->batas_waktu}}</td>
							    	<td>{{$transaksi->tgl_bayar}}</td>							    	
							    	<td>{{$transaksi->status}}</td>
							    	<td>{{$transaksi->pembayaran}}</td>
							    	<td>{{$transaksi->user->nama}}</td>
							    	<td>

							    		@if(Auth::user()->role == 'Admin' || Auth::user()->role == 'Kasir')
								    		<a href="{{url('/detail/create',$transaksi->id)}}" class="btn btn-info">Detail</a>
								    		<a href="{{url('/transaksi/edit',$transaksi->id)}}" class="btn btn-warning">Edit</a>
								    		<a href="{{url('/transaksi/delete',$transaksi->id)}}" class="btn btn-danger" onclick="return confirm('Yakin Mau Menghapus')">Delete</a>
							    		@endif
							    		@if(Auth::user()->role == 'Petugas')
							    		<a href="{{url('/transaksi/edit',$transaksi->id)}}" class="btn btn-warning">Edit</a>
							    		@endif
							    	</td>
							    </tr>
							  </tbody>
							  @endforeach
						</table>

					</div>
				</div>
				<!-- <script type="text/javascript">
					window.print();
				</script> -->

@endsection