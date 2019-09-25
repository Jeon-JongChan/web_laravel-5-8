@php
    if(!isset($version))$version = 4;
    if(!isset($imageHeight)) $imageHeight = "30vw";
    if(!isset($title)) $title = "None";
    $version = (int)(12 / $version);
    $col_name = "col-{$version}";
    $itemCnt = 20;
@endphp
    <ul class="article-list-group">
    @for($i=0; $i < $itemCnt; $i++)
        <a href="/archive/episode">
            <li class="article-list-item">
                <div class="row">
                    <div class="col-2">
                        <div class="back-image" style="background-image: url('/local/default.jpg'); height: 72px"></div>
                    </div>
                    <div class="col-6 article-list-item-title">
                        episode name
                    </div>
                    <div class="col-4 article-list-item-last">
                        published_at
                    </div>
                </div>
            </li>
        </a>      
    @endfor
    </ul> 
<style type="text/css">
    .back-image
    {
        width: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .article-list-group
    {
        padding: 24px 0;
    }
    .article-list-item
    {
        display: block;
        padding: 0 0 8px 0;
        border-bottom: 1px solid gray;
    }
    .article-list-item-title
    {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .article-list-item-last
    {
        display: flex;
        align-items: center;
        justify-content: flex-end;
    }
</style>    