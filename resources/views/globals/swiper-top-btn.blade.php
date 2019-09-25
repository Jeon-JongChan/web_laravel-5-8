<!-- Swiper.js 필요 -->
@php
    if(!isset($version))$version = 4;
    if(!isset($imageHeight)) $imageHeight = "30vw";
    if(!isset($title)) $title = "None";
    $version = (int)(12 / $version);
    $itemCnt = 6;
@endphp
<div class="swiper-container">
    <!-- If we need navigation buttons -->
    <div class="swiper-header row">
        <div class="col-lg-10 swiper-title">
            <h4>{{$title}}</h4>
        </div>
        <div class="col-lg-2 swiper-button-frame">
            <div class="swiper-prev swiper-button"><</div>
            <div class="swiper-next swiper-button">></div>
        </div>
    </div>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        @php($col_name = "col-{$version}") 
        <!-- Slides -->
        @for($i=0; $i < $itemCnt; $i++)
        <div class="swiper-slide {{$col_name}}">
            <div class="swiper-slide-image" style="background-image:url('/local/default.jpg'); height: {{$imageHeight}}"></div>
        </div>
        @endfor
    </div>
</div>
<style>
    .swiper-container
    {
        margin-top:24px;
    }
    .swiper-header
    {
        display: flex;
    }
    .swiper-button-frame
    {
        font-size: 0;
    }
    .swiper-button
    {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        width: 50%;
        border: 1px solid gray;
    }
    .swiper-prev
    {
        border-right: 0.5px solid gray;
    }
    .swiper-next
    {
        border-left: 0.5px, solid gray;
    }
    .swiper-button-disabled
    {
        opacity: 0.2;
    }
    .swiper-slide
    {
        padding: 0;
        margin-right: 12px;
    }
    .swiper-slide-image
    {
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
{{-- 	<script>
      var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        autoHeight: true,
        slidesPerView: 'auto',

        // Navigation arrows
        navigation: {
          nextEl: '.swiper-next',
          prevEl: '.swiper-prev',
        },
      })
    </script> --}}

