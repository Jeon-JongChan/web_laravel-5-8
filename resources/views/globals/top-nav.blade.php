@extends('layouts.base')
@section('header')
<div class="container-fluid">
    <div class="w-100 top-back">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">소설</a>
                </li>
            </ul>
        </div>
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="">index</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="">etc</a>
                    <div class="dropdown-menu">
                         <a class="dropdown-item" href="">1</a>
                         <a class="dropdown-item" href="">2</a>
                         <a class="dropdown-item" href="">3</a>
                         <a class="dropdown-item" href="">4</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection