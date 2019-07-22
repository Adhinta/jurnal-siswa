@extends('layouts.app')
@section('judul')
    Daftar Admin
@endsection
@section('content')
<div class="row">
  	<div class="col-md-12">
  		<div class="box box-info">
  	            <div class="box-header with-border">
  	              <h3 class="box-title">Tambah Pengguna</h3>
  	            </div>
  	            <!-- /.box-header -->
  	            <!-- form start -->
  	            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                  {!! csrf_field() !!}
  	              <div class="box-body">
  	                <div class="form-group" row{{ $errors->has('name') ? ' has-error' : '' }}">
  	                  <label for="nip" class="col-sm-2 control-label">Nama </label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                      </div>
  	                </div>
  	                <div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}"">
  	                  <label for="email" class="col-sm-2 control-label">E-Mail</label>
  	                  <div class="col-sm-8">
  	                    <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}" required>  
  	                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif  
                      </div>
  	                </div>
                    <div class="form-group" row{{ $errors->has('password') ? ' has-error' : '' }}">
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
                          <option value="PIMPINAN">PIMPINAN</option>
                          <option value="SISWA">SISWA</option>
                          <option selected="unknown" value="unknown">Unknown</option>
                        </select>
                      </div>
                    </div>
  	              </div>
  	              <!-- /.box-body -->
  	              <div class="box-footer">
  	                <a href="{{ asset('admin/admintkj/penggunatkj') }}" class="btn btn-default">Cancel</a>
  	                <button type="submit" class="btn btn-info pull-right">Save</button>
  	              </div>
  	              <!-- /.box-footer -->
  	            </form>
  	          </div>
  	    </div>
  	</div> 
@endsection
