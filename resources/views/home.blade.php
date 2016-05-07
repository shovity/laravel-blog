@extends('layouts.app')

@section('title')
    Shovity | Home page
@endsection

@section('head')
<style type="text/css">
    body {
        padding-top: 0;
    }

    .carousel-inner > .item > img {
        height: 100vh;
        width: 100vw;
    }

    #navbar {
        box-shadow: none;
    }
</style>
@endsection

@section('content')
<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="2000">

    <!-- Indicators May cai dau cham -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
        <li data-target="#carousel-id" data-slide-to="3" class=""></li>
        <li data-target="#carousel-id" data-slide-to="4" class=""></li>
    </ol>

    <!-- Wrapper for slides // Item cua slides-->
    <div class="carousel-inner">

        <!-- item 1 -->
        <div class="item active">
            <img data-src="" alt="" src="img/anime8.jpg">
        </div>

        <!-- item 2 -->
        <div class="item">
            <img data-src="" alt="" src="img/anime9.jpg">
        </div>

        <!-- item 3 -->
        <div class="item">
            <img data-src="" alt="" src="img/anime10.jpg">
        </div>

        <!-- item 4 -->
        <div class="item">
            <img data-src="" alt="" src="img/anime11.jpg">
        </div>

        <!-- item 5 -->
        <div class="item">
            <img data-src="" alt="" src="img/anime12.jpg">
        </div>

    </div>

    <!-- dau next va pre -->
    <a class="left carousel-control" href="#carousel-id" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>

    <a class="right carousel-control" href="#carousel-id" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>

</div>
@endsection

@section('footer')
<!-- Khong dung  -->
@endsection