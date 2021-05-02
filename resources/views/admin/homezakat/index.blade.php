@extends('admin.layouts.base')

@section('content')

<div class="row">
	{{-- <div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Jumlah Pembayar Fidiyah</span>
	      <span class="info-box-number">{{$totalfidiyah}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div> --}}

    <!-- /.col -->
	<div class="col-md-4 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Jumlah Pembayar Zakat Fitrah</span>
	      <span class="info-box-number">{{$totalzakatfitrah}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>

	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>
		
	<div class="col-md-5 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Pembayar Zakat Fitrah Berupa Uang Tunai</span>
	      <span class="info-box-number">{{$uangtunai}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-5 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-red"><i class="fa fa-shopping-basket"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Pembayar Zakat Fitrah Berupa Beras</span>
	      <span class="info-box-number">{{$beras}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
	{{-- <div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Jumlah Pembayar Zakat Mal</span>
	      <span class="info-box-number">{{$totalzakatmal}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
<!-- /.row --> --}}
@endsection