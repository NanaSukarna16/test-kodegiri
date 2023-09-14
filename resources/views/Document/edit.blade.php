@extends('template.app')

@section('konten')

<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h5 class="mb-2">Edit Document</h5> <br>
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
        <h4 class="sub-title">Edit document</h4>
        <form class="forms-sample" enctype="multipart/form-data" method="post"
            action="{{ route('document.update',$document->id)}}">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-5">
                    <input type="text" value="{{ $document->title}}" class="form-control {{ $errors->first('title') ? "
                        is-invalid":""}}" class="form-control" name="title" placeholder="title">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Content</label>
                <div class="col-sm-5">
                    <textarea name="content" id="content" class="form-control"
                        rows="15">{{$document->content}}</textarea>
                    @error('content')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Lanjut Edit Tanda Tangan</button>
            </div>
        </form>
    </div>
</div>
<!-- Hover table card end -->

@endsection