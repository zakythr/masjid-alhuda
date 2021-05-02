@extends('admin.layouts.base')

@section('content')
<?php
	if ($total > 0) {
		$per_male = round(($male / $total) * 100);
		$per_female = 100 - $per_male;

		$per_work = round(($work / $total) * 100);
		$per_not_work = 100 - $per_work;
	} else {
		$per_male = 0;
		$per_female = 0;

		$per_work = 0;
		$per_not_work = 0;
	}
?>
<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Jumlah Penduduk</span>
	      <span class="info-box-number">{{$total}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>

	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-yellow"><i class="fa fa-home"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Kepala Keluarga</span>
	      <span class="info-box-number">{{$leader}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>

	<!-- fix for small devices only -->
	<div class="clearfix visible-sm-block"></div>
		
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-aqua"><i class="fa fa-male"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Laki - laki</span>
	      <span class="info-box-number">{{$male}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-red"><i class="fa fa-female"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Perempuan</span>
	      <span class="info-box-number">{{$female}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-purple"><i class="fa fa-building"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Sudah Bekerja</span>
	      <span class="info-box-number">{{$work}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
	<div class="col-md-3 col-sm-6 col-xs-12">
	  <div class="info-box">
	    <span class="info-box-icon bg-navy"><i class="fa fa-bed"></i></span>

	    <div class="info-box-content">
	      <span class="info-box-text">Belum Bekerja</span>
	      <span class="info-box-number">{{$not_work}}</span>
	    </div>
	    <!-- /.info-box-content -->
	  </div>
	  <!-- /.info-box -->
	</div>
	<!-- /.col -->
</div>
<div class="row">
	<div class="col-md-6 col-xs-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Persentase Jenis Kelamin</h3>
			</div>
			<div class="box-body chart-responsive">
				<div class="chart" id="jk-chart" style="height: 300px; position: relative;"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xs-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Persentase Status Pekerjaan</h3>
			</div>
			<div class="box-body chart-responsive">
				<div class="chart" id="kerja-chart" style="height: 300px; position: relative;"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xs-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Data Status Kawin</h3>
			</div>
			<div class="box-body chart-responsive">
				<div class="chart" id="kawin-chart" style="height: 300px; position: relative;"></div>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-xs-12">
		<div class="box box-success">
			<div class="box-header with-border">
				<h3 class="box-title">Data Pendidikan</h3>
			</div>
			<div class="box-body chart-responsive">
				<div class="chart" id="pendidikan-chart" style="height: 300px; position: relative;"></div>
			</div>
		</div>
	</div>
</div>
<!-- /.row -->
@endsection
@section('end-script')
<script type="text/javascript">
//DONUT CHART
var donut = new Morris.Donut({
  element: 'jk-chart',
  formatter: function (value, data) { return (value) + '%'; },
  resize: true,
  colors: ["#03a9f4", "#DC143C"],
  data: [
	{label: "Laki-Laki", value: {{ $per_male }} },
	{label: "Perempuan", value: {{ $per_female }} }
  ],
  hideHover: 'auto'
});

var donut = new Morris.Donut({
  element: 'kerja-chart',
  formatter: function (value, data) { return (value) + '%'; },
  resize: true,
  colors: ["#605ca8", "#001f3f"],
  data: [
	{label: "Sudah Bekerja", value: {{ $per_work }} },
	{label: "Belum Bekerja", value: {{ $per_not_work }} }
  ],
  hideHover: 'auto'
});

var kawin = <?php echo $perkawinan; ?>;
var donut = new Morris.Donut({
  element: 'kawin-chart',
  resize: true,
  colors: ["#e9e2d0", "#ea9085", "#d45d79", "#6e5773"],
  data: [
	{label: kawin[0].name, value: kawin[0].total },
	{label: kawin[1].name, value: kawin[1].total },
	{label: kawin[2].name, value: kawin[2].total },
	{label: kawin[3].name, value: kawin[3].total }
  ],
  hideHover: 'auto'
});

var didik = <?php echo $pendidikan; ?>;
var donut = new Morris.Donut({
  element: 'pendidikan-chart',
  resize: true,
  colors: [
	  "#fff100", "#ff8c00", "#e81123", "#ec008c", "#68217a", "#00188f", "#00bcf2", "#00b294", "#009e49", "#bad80a"
  ],
  data: [
	{label: didik[0].name, value: didik[0].total },	
	{label: didik[1].name, value: didik[1].total },	
	{label: didik[2].name, value: didik[2].total },	
	{label: didik[3].name, value: didik[3].total },	
	{label: didik[4].name, value: didik[4].total },	
	{label: didik[5].name, value: didik[5].total },	
	{label: didik[6].name, value: didik[6].total },	
	{label: didik[7].name, value: didik[7].total },	
	{label: didik[8].name, value: didik[8].total },	
	{label: didik[9].name, value: didik[9].total }
  ],
  hideHover: 'auto'
});
</script>
@endsection