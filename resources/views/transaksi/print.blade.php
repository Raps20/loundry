<!DOCTYPE html>
<html>
<head>
	<title>Laporan Transaksi</title>
	<link rel="stylesheet" href="{{asset('staradmin/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('staradmin//assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('staradmin//assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('staradmin//assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('staradmin//assets/images/favicon.png')}}" />
		<!-- <style type="text/css" media="print">
			@page { size: landscape; }
		</style> -->
		<style type="text/css">
			@media print{
				#btn {
					visibility: hidden;
				}
			}
		</style>
</head>
<body>

	<div class="row">
		<div class="col-md-12 text-center mb-4 mt-5" align="center">
			<img src="{{asset('staradmin//assets/logo.png')}}" width="120">
			<h1><b>Raps Loundry</b></h1>
			<h4>Solusi Terbaik Untuk Mager Anda!!!</h4>
			<hr style="border: 3px solid #3B6061">
			<div class="col-2">
			<a href="{{url()->previous()}}" class="btn btn-outline-primary" id="btn">Kembali</a>
			</div>
		</div>
		<div class="col-md-12 text-center mb-4 mt-2">

			<h2>Laporan Transaksi</h2>
			
		</div>

		<div class="col-md-12 text-center">
			<table class="table table-striped text-center" style="border: 1px solid #ddd">
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
					</tr>
				</thead>

				<tbody>
					@foreach($transaksi as $transaksi)
						<tr>
							<td>{{$transaksi->Member->nama}}</td>
							<td>{{$transaksi->outlet->nama}}</td>
							<td>{{$transaksi->created_at->format('D, d M Y')}}</td>
							<td>{{$transaksi->batas_waktu}}</td>
							<td>{{$transaksi->tgl_bayar}}</td>							    	
							<td>{{$transaksi->status}}</td>
							<td>{{$transaksi->pembayaran}}</td>
							<td>{{$transaksi->user->nama}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		window.print();
	</script>

	</body>
</html>