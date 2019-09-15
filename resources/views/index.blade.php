@extends('layouts.master')
@section('section')
<div class="container">
    @include('index.carousel')
    <div class="row">
        <div class="col">
            @include('fragment-view.top-media-list')
        </div>
    </div>
</div>
@endsection