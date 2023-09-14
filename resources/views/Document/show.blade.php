@extends('template.app')

@section('konten')



<!-- Hover table card start -->
<div class="card">
    <div class="card-header">
        <h1 class="mb-2">{{ $document->title}}, {{$document->signing}}</h1> <br>
        <p>
            {{ $document->content}}
        </p>
        <img style="max-width: 150px;" class="mr-3" alt="Bootstrap Media Preview"
            src="{{asset('storage/signatures/'.$document->signing)}}" />
    </div>

</div>
<!-- Hover table card end -->


@endsection