@extends('template.app')

@section('konten')

<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-2">Edit Profile</h5> <br>
        <div class="card-header-right">
            <ul class="list-unstyled card-option">
                <li><i class="fa fa-chevron-left"></i></li>
                <li><i class="fa fa-window-maximize full-card"></i></li>
                <li><i class="fa fa-minus minimize-card"></i></li>
                <li><i class="fa fa-refresh reload-card"></i></li>
            </ul>
        </div> <br>
    </div>
    <div class="card-block">
        <h4 class="sub-title">Edit Profile</h4>
        <form class="forms-sample" enctype="multipart/form-data" method="POST"
            action="{{ route('profile.update',$user->id)}}">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-5">
                    <input type="text" value="{{ $user->nama_lengkap}}"
                        class="form-control {{ $errors->first('nama_lengkap') ? " is-invalid":""}}" class="form-control"
                        name="nama_lengkap" placeholder="Nama lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Hp</label>
                <div class="col-sm-5">
                    <input type="text" value="{{ $user->nomor_hp}}"
                        class="form-control {{ $errors->first('nomor_hp') ? " is-invalid":""}}" class="form-control"
                        name="nomor_hp" placeholder="Nomor Hp">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" value="{{ $user->email}}" class="form-control {{ $errors->first('email') ? "
                        is-invalid":""}}" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Company</label>
                <div class="col-sm-5">
                    <input type="text" value="{{ $user->company}}" class="form-control {{ $errors->first('company') ? "
                        is-invalid":""}}" class="form-control" name="company" placeholder="Company">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Divisi</label>
                <div class="col-sm-5">
                    <input type="text" value="{{ $user->divisi}}" class="form-control {{ $errors->first('divisi') ? "
                        is-invalid":""}}" class="form-control" name="divisi" placeholder="Divisi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Foto Profil</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control {{ $errors->first('foto_profile') ? " is-invalid":""}}"
                        class="form-control" name="foto_profile">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div>
        </form>
    </div>
</div>
<!-- Hover table card end -->

@endsection

@section('js')

@endsection