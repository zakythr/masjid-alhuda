@extends('admin.layouts.base')

@section('select2-script')
<link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('head-script')
<link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')
<div class="box">
	<div class="box-header with-border">
	  	<h3 class="box-title">{{ $page_title or "" }}</h3>
	</div>
    {!! form_start($form, ['class' => 'form-horizontal']) !!}
	<div class="box-body">
	  	{!! form_rest($form) !!}
	</div>
	<div class="box-footer">
		<div class="col-sm-8 col-sm-offset-2">
		  	<a href="{{$url}}" type="submit" class="btn btn-default">Batalkan</a>
		  	<button type="submit" class="btn btn-primary">Kirim</button>
		</div>
	</div>
    {!! form_end($form) !!}
</div>
@endsection

@section('end-script')
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<script type="text/javascript">
    $( ".sex-radio" ).wrapAll( "<div class='col-sm-8'></div>");
    $('.sex-radio').find('input').css('margin-left', 0);
    $('#tanggalfitrah').datepicker({
      autoclose: true,
      format:'yyyy-mm-dd'
    });
    $('.select2').select2();
    $('.select2').css('width', '100%');
</script>
@endsection
