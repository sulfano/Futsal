@extends('layout.admin')
@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Kelurahan
        </h1>
        <ol class="breadcrumb">
          <li>Beranda</li>
          <li class="active">Kelurahan</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
      @if (Session::has('message'))
      <div class="row">
      <div class="col-md-12">
      <div class="box-body">
        <div class="alert alert-info alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa fa-check"></i> Success!</h4>
          <p>{{ Session::get('message') }}</p>
        </div>
      </div>
      </div>
      </div>
      @endif              
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
          <div class="box-header">
              <i class="fa fa-map-o"></i>
              <h3 class="box-title">Kelurahan</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <a href="{{ route('admin.kelurahan.create') }}" class="btn btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah</a>  
              </div>
              <!-- /. tools -->
          </div>
					<div class="box-body">
						<table class="table table-responsive table-hover table-striped">
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Kecamatan</th>
								<th>Aksi</th>
							</tr>
							@foreach($kelurahan as $key=>$kel)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$kel->nama}}</td>
								<td>{{$kel->kecamatan}}</td>
			                	<td>
			                		<a href="{{route('admin.kelurahan.read',[$kel->id])}}" class="btn btn-flat bg-olive"><i class="fa fa-eye"></i></a>
			                		<a href="{{route('admin.kelurahan.update',[$kel->id])}}" class="btn btn-flat btn-info"><i class="fa fa-pencil"></i></a>
			                		
                      <a title="Delete" href="#" data-toggle="modal" data-target="#myModal{{$kel->id}}" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></a>
                      <div class="modal fade" id="myModal{{$kel->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel"><font color="#000000">Delete</font></h4>
                            </div>

                            <div class="modal-body">
                                <p>Are You Sure ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">No</button>
                                <input type="hidden" name="_token" value="{{csrf_token()}}"></input>
                                <a href="{{route('admin.kelurahan.delete',[$kel->id])}}" class="btn btn-flat btn-danger">Yes</a>
                            </div>
                          </div>
                        </div>
                      </div>			                		
			                	</td>
							</tr>
							@endforeach
						</table>
						{!! $kelurahan->links() !!}
					</div>
				</div>
			</div>
		</div>            
      
        
      </section>
      <!-- /.content -->

    <!-- /.container -->
  </div>
  @endsection
