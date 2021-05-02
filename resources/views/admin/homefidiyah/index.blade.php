@extends('admin.layouts.base')

@section('content')

<div class="row">
	<div class="col-md-4 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Jumlah Pembayar Fidiyah</span>
	      <span class="info-box-number">{{$totalfidiyah}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
@endsection