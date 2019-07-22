@extends('template.admin')

@section('title')
	Jurnal
@endsection


@section('judulmenu')
	JURNAL Harian
@endsection

@section('statusAktif')
  class="active"
@endsection

@php

  function viewMessage($msg){
    $pesan = "";

    if($msg==1)
    {
      $pesan = "Proses tambah data berhasil dilakukan!";
    }elseif($msg==2){
      $pesan = "Error! Proses tambah data gagal dilakukan!";
    }elseif($msg==3){
      $pesan = "Proses edit data berhasil dilakukan!";
    }elseif($msg==4){
      $pesan = "Error! Proses edit data gagal dilakukan!";
    }elseif($msg==5){
      $pesan = "Proses hapus data berhasil dilakukan!";
    }elseif($msg==6){
      $pesan = "Error! Proses hapus data gagal dilakukan!";
    }

    $view = "
      <div class=\"alert alert-info alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                <h4><i class=\"icon fa fa-info\"></i> Informasi!</h4>
                <strong>".$pesan."</strong>
              </div>

    ";

    return $view;
  }
  
@endphp






@section('maincontent')

  @if($act=="viewTambahprestasisiswa")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Jurnal</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('admin/prestasisiswa/prosesTambahprestasisiswa') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
                  <div class="form-group">
  	                  <label for="id_guru" class="col-sm-2 control-label">Id Guru</label>
  	                  <div class="col-sm-8">
  	                    <input required type="text" class="form-control" id="id_guru" name="id_guru" placeholder="Id Guru">
  	                  </div>
  	                </div>
                    <div class="form-group">
                      <label for="nama_guru" class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                        <input required type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
                      </div>
                    </div>
                    <div class="form-group">
  	                  <label for="hari" class="col-sm-2 control-label">Hari</label>
  	                  <div class="col-sm-8">
  	                    <input required type="text" class="form-control" id="hari" name="hari" placeholder="Hari">
  	                  </div>
  	                </div>
                    <div class="form-group">
                      <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-8">
                        <input required type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="agenda" class="col-sm-2 control-label">Agenda</label>
                      <div class="col-sm-8">
                        <input required type="text" class="form-control" id="agenda" name="agenda" placeholder="Agenda">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="jurnal">Jurnal</label>
                      <div class="col-sm-10">
                        <input required id="jurnal" name="jurnal" type="file">
                      </div>
                    </div>
                  </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('admin/prestasisiswa') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div> 
  @endif

@if($act=="viewDetailprestasisiswa")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Detail Jurnal</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('admin/prestasisiswa/prosesEditprestasisiswa') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    
                    <div class="form-group">
                      <label for="id_guru" class="col-sm-2 control-label">Id Guru</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="id_guru" name="id_guru" value="{{ $prestasisiswa->id_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_guru" class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $prestasisiswa->nama_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hari" class="col-sm-2 control-label">Hari</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="hari" name="hari" value="{{ $prestasisiswa->hari }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-8">
                        <input disabled="" type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $prestasisiswa->tanggal }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="agenda" class="col-sm-2 control-label">Agenda</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="agenda" name="agenda" value="{{ $prestasisiswa->agenda }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jurnal" class="col-sm-2 control-label">Jurnal></label>
                      <div class="col-sm-10">
                        <input id="jurnal" name="jurnal" type="file">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/prestasisiswa') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Cetak</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewEditprestasisiswa")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Jurnal</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('admin/prestasisiswa/prosesEditprestasisiswa') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_jurnal" class="col-sm-2 control-label">Id Jurnal</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="id_jurnal" name="id_jurnal" value="{{ $prestasisiswa->id_jurnal }}">
                        <input type="hidden" class="form-control" id="id_jurnal" name="id_jurnal" value="{{ $prestasisiswa->id_jurnal }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="id_guru" class="col-sm-2 control-label">Id Guru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="id_guru" name="id_guru" value="{{ $prestasisiswa->id_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_guru" class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $prestasisiswa->nama_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hari" class="col-sm-2 control-label">Hari</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="hari" name="hari" value="{{ $prestasisiswa->hari }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
                      <div class="col-sm-8">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $prestasisiswa->tanggal }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="agenda" class="col-sm-2 control-label">Agenda</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="agenda" name="agenda" value="{{ $prestasisiswa->agenda }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="file_scan">Jurnal</label>
                      <div class="col-sm-10">
                        <input id="jurnal" name="jurnal" type="file">
                      </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/prestasisiswa') }}" class="btn btn-default">Cancel</a>
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewprestasisiswa" || $act=="viewDeleteprestasisiswa")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="viewDeleteprestasisiswa")

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Info!</h4>
          Hapus Jurnal ?
            <a href="{{ asset('/admin/prestasisiswa') }}" class="btn-sm btn-primary">Cancel</a>
            <a href="{{ url('/admin/prestasisiswa/prosesDeleteprestasisiswa',$prestasisiswa_del->id_jurnal) }}" class="btn-sm btn-danger">Hapus</a>
        </div>

    @endif
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Jurnal</h3>
                  @if (auth::user()->jabatan == 'ADMIN')
                  <a href="{{ asset('admin/prestasisiswa/viewTambahprestasisiswa') }}" class="btn btn-info pull-right">Tambah</a>
  	              @else
                  @endif
                </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal">
  	              <div class="box-body">
  	                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Hari</th>
                    <th>Tanggal</th>
                    <th>nama guru</th>
                    <th>Agenda</th>
                    <th>Jurnal</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($prestasisiswa as $a)
                      <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $a->hari }}</td>
                      <td>{{ $a->tanggal }}</td>
                      <td>{{ $a->nama_guru }}</td>
                      <td>{{ $a->agenda }}</td>
                     
                      <td>
                          <a href="{{asset($a->jurnal)}}" target="_blank">Preview PDF : {{$a->jurnal_name}}</a>
                      </td>
                      @if (auth::user()->jabatan == 'ADMIN')
                      <td>
                        <a href="{{ url('admin/prestasisiswa/viewDetailprestasisiswa',$a->id_jurnal) }}" class="btn-sm btn-primary "><i class="fa fa-info-circle"></i> Detail</a> <br><br>
                        <a href="{{ url('admin/prestasisiswa/viewEditprestasisiswa',$a->id_jurnal) }}" class="btn-sm btn-warning "><i class="fa fa-pencil-square-o"></i> Edit</a> <br><br>
                        <a href="{{ url('admin/prestasisiswa/viewDeleteprestasisiswa',$a->id_jurnal) }}" class="btn-sm btn-danger "><i class="fa fa-trash"></i> Hapus</a> <br>  <br>
                      </td>
                      @elseif (auth::user()->jabatan == 'ADMIN')
                      <td>
                        <a href="{{ url('admin/prestasisiswa/viewDetailprestasisiswa',$a->id_jurnal) }}" class="btn-sm btn-primary ">Detail</a> <br><br>
                      </td>
                     
                      @endif
                    </tr>
                    @php
                      $i++;
                    @endphp
                  @endforeach
  	              <!-- /.box-body -->
  	             </tbody>
                  </table>
  	            </form>
  	          </div>
  	    </div>
  	</div>
  @endif

@endsection