@extends('template.app')

@section('konten')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if (session('status'))
        <div class="alert-icon shadow-inner wrap-alert-b">
            <div class="alert alert-success alert-st-one" role="alert">
                <i class="fa fa-check edu-checked-pro admin-check-pro" aria-hidden="true"></i>
                {{-- <p class="message-mg-rt"><strong>Well done!</strong> You successfully read this important message.
                </p> --}}
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
    </div>
</div>

<!-- users visite and profile start -->
<div class="col-md-12">
    <div class="card user-card">
        <div class="card-header">
            <a href="{{route('profile.edit', $user->id)}}">
                <button class="btn hor-grd btn-grd-info" data-target="#exampleModal2" type="button">
                    <i class="ti-pencil-alt"></i> Edit Profile
                </button>
            </a>
        </div>
        <div class="card-block">
            <div class="usre-image">
                <img src="{{ $user->foto_profil ? $user->foto_profil : asset('img/avatar.png') }}" class="img-radius"
                    alt="User-Profile-Image" style="max-height: 100px;">
            </div>
            <h6 class="f-w-600 m-t-25 m-b-10">{{ $user->nama_lengkap }}</h6>
            <p class="text-muted">{{ $user->email}} | {{ $user->nomor_foto}}</p>
            <hr />
            <div class="row justify-content-center user-social-link">
                <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
            </div>
        </div>
    </div>
</div>

<!-- users visite and profile end -->
@endsection