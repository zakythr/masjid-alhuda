@extends('admin.layouts.base')

@section('head-script')
<link rel="stylesheet" href="{{asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

<!-- bootstrap datepicker -->
<link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')
<div class="box">
	<div class="box-header with-border">
	  	<h3 class="box-title">{{ $page_title or "" }}</h3>

	  	<div class="box-tools pull-right">
	  		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-cogs"></i> 
                Filter Data Fidiyah
          	</button>
	    	<a href="{{$create}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Baru</a>
	  	</div>
	</div>
	<div class="box-body">
      	<table id="example2" class="table table-bordered table-hover">
	        <thead>
		        <tr>
		          <th>#</th>
		          <th>Nama</th>
		          <th>Jenis Kelamin</th>
		          <th>Jumlah Hari</th>
		          <th>Total Bayar</th>
				  <th>Tanggal Fidiyah</th>
				  <th>Alamat</th>
		          <!-- <th>Created At</th> -->
		          <th></th>
		        </tr>
	        </thead>
	        <tbody>
	        </tbody>
    	</table>
	</div>
	<div class="box-footer">
	  Footer
	</div>
</div>
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{url('admin/fidiyah/filter')}}" method="POST" class="form-horizontal">
      	{{ csrf_field() }}
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Filter Fidiyah</h4>
	      </div>
	      <div class="modal-body">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Jenis Kelamin</label>
              <div class="col-sm-8">
                <select class="form-control select2" name="sex_id">
	                <option value="0">- All Data -</option>
	                <option value="1" {{(session('sex_id') == 1) ? 'selected' : ''}}>Laki - laki</option>
	                <option value="2" {{(session('sex_id') == 2) ? 'selected' : ''}}>Perempuan</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Fidiyah</label>
              <div class="col-sm-8">
              	<input type="text" class="form-control tanggal" value="{{session('tanggalfidiyah')}}" name="tanggalfidiyah">
              </div>
            </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Simpan</button>
	      </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection


@section('select2-script')
<link rel="stylesheet" href="{{asset('bower_components/select2/dist/css/select2.min.css')}}">
@endsection

@section('end-script')
<!-- DataTables -->
<script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('bower_components/select2/dist/js/select2.full.min.js')}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset('bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
	var table;
	$(function() {
	    table = $('#example2').DataTable({
	        processing: true,
	        serverSide: true,
	        bInfo:false,
	        ajax: '{{$ajax}}',
    		order: [[2,'desc']],
	        columns: [
	            { data: 'id', searchable: false, orderable: false},
	            { data: 'nama', searchable: true, orderable: false},
	            { data: 'sex_id', searchable: false, orderable: false},
	            { data: 'jmlhari', searchable: false, orderable: false},
	            { data: 'total', searchable: false, orderable: false, render: $.fn.dataTable.render.number(',', '.', 2, '')},
				{ data: 'tanggalfidiyah', searchable: false, orderable: false},
				{ data: 'alamat', searchable: false, orderable: false},
	            // { data: 'created_at', searchable: false},
	            { data: 'action', searchable: false, orderable: false}
	        ],
	        columnDefs: [{
	          "targets": 0,
	          "searchable": false,
	          "orderable": false,
	          "data": null,
	          // "title": 'No.',
	          "render": function (data, type, full, meta) {
	              return meta.settings._iDisplayStart + meta.row + 1; 
	          }
	        }],
	    });
	});
	$(document).on('click', '.delete', function () {
		if (!confirm("Do you want to delete")){
	      return false;
	    }
	});

    $('.select2').select2();
    $('.select2').css('width', '100%');
    $('.tanggal').datepicker({
    	minViewMode: 2,
    	format: 'yyyy',
      	autoclose: true
    });
</script>
@endsection
