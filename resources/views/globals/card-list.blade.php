@php
    if(!isset($version))$version = 4;
    if(!isset($imageHeight)) $imageHeight = "30vw";
    if(!isset($title)) $title = "None";
    $version = (int)(12 / $version);
    $col_name = "col-{$version}";
    $itemCnt = 20;
@endphp
<div class="row">
    @for($i=0; $i < $itemCnt; $i++)
    <div class="{{$col_name}} card-list" style="margin-bottom: 12px;">
        <a href="/archive/episode">
            <div class="card">
              <div class="card-img-top back-image" style="background-image: url('/local/default.jpg'); height: 10vw;"></div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Naver</p>
              </div>
            </div>
        </a>
    </div>
    @endfor
</div>
<style type="text/css">
    .back-image
    {
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .card-list .card-body
    {
        padding: 8px 4px;
    }
</style>    