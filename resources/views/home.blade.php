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
<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="7000" data-pause="false" data-wrap="true">

    <!-- Indicators May cai dau cham -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
    </ol>

    <!-- Wrapper for slides // Item cua slides-->
    <div class="carousel-inner">

        <!-- item 1 -->
        <div class="item active">
            <img data-src="" alt="" src="img/ori/ori0.jpg">
            <div class="carousel-caption">
                <h1>Một câu chuyện cảm động</h1>
                <p>Khu rừng Nibel, dưới sự che chở từ ánh sáng của Cổ Thụ Tinh Linh - Spirit Tree, vốn vô cùng tươi đẹp và là nơi sinh sống của rất nhiều loài sinh vật hiền hòa. Biến cố xảy ra khi thứ ánh sáng duy trì sự sống, sự cân bằng của khu rừng bị cướp mất. Cả khu rừng chết dần chết mòn, các yếu tố duy trì sự cân bằng vận hành một cách sai lệch gây biến đổi môi trường. Các giống loài tuyệt diệt, số ít còn sống sót thì biến chất. Khu rừng Nibel mất đi nguồn sống và trở nên tăm tối.</p>
                <p>
                    <a href="#" id="opp" class="btn btn-primary btn-lg" style="background: none">Khám Phá</a>
                </p>
            </div>
        </div>

        <!-- item 2 -->
        <div class="item">
            <img data-src="" alt="" src="img/ori/ori1.jpg">
            <div class="carousel-caption">
                <h1>Lối chơi cuốn hút</h1>
                <p>Các thử thách đi từ dễ đến khó và đòi hỏi người chơi phải thành thục những năng lực đặc biệt và kỹ năng của Ori thì mới có thể vượt qua. Bạn có thể điều khiển Ori chạy nhảy, bơi lội, bay lượn, bám tường, phóng nhanh như một tia chớp để vượt qua lũ quái vật hoặc các chướng ngại trên đường đi. Game còn có một số câu đố tuy không quá hóc búa nhưng chắc chắn cũng sẽ khiến bạn phải tốn kha khá thời gian để động não.</p>
                <p>
                    <a href="#" id="opp1" class="btn btn-success btn-lg" style="background: none">Khám Phá</a>
                </p>
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