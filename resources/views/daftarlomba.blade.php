@extends('template.admin')

@section('title')
	Daftar Guru
@endsection


@section('judulmenu')
	Daftar Guru SMKN BALI MANDARA
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

  @if($act=="viewTambahdaftarlomba")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Data Guru</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('admin/daftarlomba/prosesTambahdaftarlomba') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
                  <div class="form-group">
  	                  <label for="tanggal" class="col-sm-2 control-label">Id_Guru</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="id_guru" name="id_guru" placeholder="Id Guru">
  	                  </div>
  	                </div>
                    <div class="form-group">
  	                  <label for="nama_lomba" class="col-sm-2 control-label">Nama Guru</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
  	                  </div>
  	                </div>
  	                <div class="form-group">
  	                  <label for="tingkat" class="col-sm-2 control-label">Jenis Kelamin</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" placeholder="Jenis Kelamin">
  	                  </div>
  	                </div>
                    <div class="form-group">
                      <label for="jenis_lomba" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="pembina" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="hasil_lomba" class="col-sm-2 control-label">Kelas Mengajar</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kelas_mengajar" name="kelas_mengajar" placeholder="Kelas Mengajar">
                      </div>
                    </div>
                   {{-- <div class="form-group">
                      <label class="col-sm-2 control-label" for="Scan">Foto Lomba</label>
                      <div class="col-sm-10">
                        <input id="Scan" name="Scan" type="file">
                      </div>  
                    </div>
                    <div class="form-group">
                      <label for="hasil_lomba" class="col-sm-2 control-label">Hadiah</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="hasil_lomba" name="hasil_lomba" placeholder="Hadiah">
                      </div>
                    </div> --}}
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('admin/daftarlomba') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div> 
  @endif

  @if($act=="viewDetaildaftarlomba")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Data Guru</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('admin/daftarlomba/prosesEditdaftarlomba') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_guru" class="col-sm-2 control-label">Id Guru</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="id_guru" name="id_guru" value="{{ $daftarlomba->id_guru }}">
                        <input type="hidden" class="form-control" id="id_guru" name="id_guru" value="{{ $daftarlomba->id_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_guru" class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $daftarlomba->nama_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $daftarlomba->jenis_kelamin}}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="alamat" name="alamat" value="{{ $daftarlomba->alamat }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="email" name="email" value="{{ $daftarlomba->email }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kelas_mengajar" class="col-sm-2 control-label">Kelas Mengajar</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="kelas_mengajar" name="kelas_mengajar" value="{{ $daftarlomba->kelas_mengajar }}">
                      </div>
                    </div>
                   {{-- <div class="form-group">
                      <label for="hasil_lomba" class="col-sm-2 control-label">hasil_lomba</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="hasil_lomba" name="hasil_lomba" value="{{ $daftarlomba->hasil_lomba }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="Scan">File Scan</label>
                      <div class="col-sm-10">
                        <input id="Scan" name="Scan" type="file">
                      </div>
                    </div>
                  </div> --}}
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/daftarlomba') }}" class="btn btn-default">kembali</a>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewEditdaftarlomba")
    <div class="row">
    <div class="col-md-12">
      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Data Guru</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" enctype="multipart/form-data" action="{{ asset('admin/daftarlomba/prosesEditdaftarlomba') }}" method="post">
                  {!! csrf_field() !!}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="id_guru" class="col-sm-2 control-label">Id Guru</label>
                      <div class="col-sm-8">
                        <input disabled="" type="text" class="form-control" id="id_guru" name="id_guru" value="{{ $daftarlomba->id_guru }}">
                        <input type="hidden" class="form-control" id="id_guru" name="id_guru" value="{{ $daftarlomba->id_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="nama_guru" class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="{{ $daftarlomba->nama_guru }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="{{ $daftarlomba->jenis_kelamin }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $daftarlomba->alamat }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="email" name="email" value="{{ $daftarlomba->email }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="kelas_mengajar" class="col-sm-2 control-label">Kelas Mengajar</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="kelas_mengajar" name="kelas_mengajar" value="{{ $daftarlomba->kelas_mengajar }}">
                      </div>
                    </div>
                   {{-- <div class="form-group">
                      <label for="hasil_lomba" class="col-sm-2 control-label">hasil_lomba</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="hasil_lomba" name="hasil_lomba" value="{{ $daftarlomba->hasil_lomba }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="Scan">File Scan</label>
                      <div class="col-sm-10">
                        <input id="Scan" name="Scan" type="file">
                      </div>
                    </div>
                  </div> --}}
                  <!-- /.box-body -->
                  <div class="box-footer">
                    <a href="{{ asset('/admin/daftarlomba') }}" class="btn btn-default">kembali</a>
                    <button type="submit" class="btn btn-info pull-right">Edit</button>
                  </div>
                  <!-- /.box-footer -->
                </form>
              </div>
        </div>
    </div>
  @endif

  @if($act=="viewdaftarlomba" || $act=="viewDeletedaftarlomba")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="viewDeletedaftarlomba")

        <div class="alert alert-warning alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <h4><i class="icon fa fa-warning"></i> Info!</h4>
          Hapus Data Guru ?
            <a href="{{ asset('/admin/daftarlomba') }}" class="btn-sm btn-primary">Cancel</a>
            <a href="{{ url('/admin/daftarlomba/prosesDeletedaftarlomba',$daftarlomba_del->id_guru) }}" class="btn-sm btn-danger">Hapus</a>
        </div>

    @endif
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Data Guru</h3>
                  @if (auth::user()->jabatan == 'ADMIN')
                  <a href="{{ asset('admin/daftarlomba/viewTambahdaftarlomba') }}" class="btn btn-info pull-right">Tambah Guru</a>
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
                    <th>Id Guru</th>
                    <th>Nama Guru</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Kelas Mengajar</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($daftarlomba as $a)
                      <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $a->id_guru }}</td>
                      <td>{{ $a->nama_guru }}</td>
                      <td>{{ $a->jenis_kelamin }}</td>
                      <td>{{ $a->alamat }}</td>
                      <td>{{ $a->email }}</td>
                      <td>{{ $a->kelas_mengajar }}</td>
                      
                      @if (auth::user()->jabatan == 'ADMIN')
                      <td>
                        <a href="{{ url('admin/daftarlomba/viewDetaildaftarlomba',$a->id_guru) }}" class="btn-sm btn-primary"><i class="fa fa-info-circle"></i> Detail</a> <br><br>
                        <a href="{{ url('admin/daftarlomba/viewEditdaftarlomba',$a->id_guru) }}" class="btn-sm btn-warning "><i class="fa fa-pencil-square-o"></i> Edit</a> <br><br>
                        <a href="{{ url('admin/daftarlomba/viewDeletedaftarlomba',$a->id_guru) }}" class="btn-sm btn-danger "><i class="fa fa-trash"></i> Hapus</a> <br>  <br>
                      </td>
                      @elseif (auth::user()->jabatan == 'USERS')
                      <td>
                        <a href="{{ url('admin/daftarlomba/viewDetaildaftarlomba',$a->id_guru) }}" class="btn-sm btn-primary ">Detail</a> <br><br>
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