@extends('template.admin')

@section('title')
	Pengguna
@endsection


@section('judulmenu')
	Master Data Pengguna
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

@if($act=="viewTambahpengguna")
  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Guru</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" action="{{ asset('admin/pengguna/prosesTambahpengguna') }}" method="post">
                  {!! csrf_field() !!}
  	              <div class="box-body">
  	                <div class="form-group" row{{ $errors->has('name') ? ' has-error' : '' }}">
  	                  <label for="nip" class="col-sm-2 control-label">Id_Guru</label>
  	                  <div class="col-sm-8">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Id_Guru" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Id_Guru') }}</strong>
                                    </span>
                                @endif
  	                  </div>
  	                </div>
                     <div class="form-group" row{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="nip" class="col-sm-2 control-label">Nama Guru</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Nama Guru" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Nama Guru') }}</strong>
                                    </span>
                                @endif
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="jabatan" class="col-sm-2 control-label">Jenis Kelamin</label>
                      <div class="col-sm-8">
                        <select selected="unknown" class="form-control" name="jabatan">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                    </div>
                     <div class="form-group"  row{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-sm-2 control-label">Alamat </label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="email" name="Alamat" placeholder="E-Mail" value="{{ old('email') }}" required>  
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Alamat') }}</strong>
                                    </span>
                                @endif 
                      </div>
                    </div>
  	                <div class="form-group"  row{{ $errors->has('email') ? ' has-error' : '' }}">
  	                  <label for="email" class="col-sm-2 control-label">Email </label>
  	                  <div class="col-sm-8">
                      <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>  
  	                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
  	                  </div>
  	                </div>
                     <div class="form-group"  row{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-sm-2 control-label">Kelas Mengajar</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="email" name="Kelas Mengaja" placeholder="Kelas Mengajar" value="{{ old('email') }}" required>  
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                      </div>
                    </div>
                  {{--  <div class="form-group" row{{ $errors->has('password') ? ' has-error' : '' }}">
                      <label for="password" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-8">
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                      </div>
                    </div>

                    <div class="form-group" >
                      <label for="password" class="col-sm-2 control-label">Konfirmasi Password</label>
                      <div class="col-sm-8">
                        <input id="password" type="password" class="form-control" name="password" required>
                       
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                      <div class="col-sm-8">
                        <select selected="unknown" class="form-control" name="jabatan">
                          <option value="ADMIN">ADMIN</option>
                          <option value="USERS">USERS</option>
                        </select>
                      </div>
                    </div> --}}

                    <div class="form-group">
                      <label for="hakAk" class="col-sm-2 control-label">Status</label>
                      <div class="col-sm-8">
                        <select selected="unknown" class="form-control" name="hakAK">
                          <option value="PNS">PNS</option>
                          <option value="KONTRAK">KONTRAK</option>
                        </select>
                      </div>
                    </div> 
  	              </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('admin/pengguna') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div> 
  @endif


  @if($act=="viewpengguna" || $act=="viewDeletepengguna")

  
    @if (isset($msg))
      <?php  echo viewMessage($msg); ?>
    @endif

    @if ($act=="viewDeletepengguna")

      <div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-warning"></i> Info!</h4>
        Hapus Artikel <strong> {{ $pengguna_del->id }} </strong> ?
          <a href="{{ asset('/admin/pengguna') }}" class="btn-sm btn-primary">Cancel</a>
          <a href="{{ url('/admin/pengguna/prosesDeletepengguna',$pengguna_del->id) }}" class="btn-sm btn-danger">Hapus</a>
      </div>


    @endif



  	<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Data Anggota Guru</h3>
                  <a href="{{ asset('admin/pengguna/viewTambahpengguna') }}" class="btn btn-info pull-right">Tambah Guru</a>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal">
  	              <div class="box-body">
  	                <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id_Guru</th>
                    <th>E-Mail</th>
                    <th>Kelas Mengajar</th>
                    <th>Status</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp

                  @foreach ($pengguna as $a)
                     <tr>
                      <td>{{ $i }}</td>
                      <td>{{ $a->name }}</td>
                      <td>{{ $a->email }}</td>
                      <td>{{ $a->password }}</td>
                      <td>{{ $a->jabatan }}</td>
                      <td>{{ $a->hakAk }}</td>
                      <td>
                        <a href="{{ url('admin/pengguna/viewDeletepengguna',$a->id) }}" class="btn-sm btn-danger ">Hapus</a>   
                      </td>
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