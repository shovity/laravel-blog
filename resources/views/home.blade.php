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
<div id="carousel-id" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false" data-wrap="true">

    <!-- Indicators May cai dau cham -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
        <li data-target="#carousel-id" data-slide-to="2" class=""></li>
        <li data-target="#carousel-id" data-slide-to="3" class=""></li>
        <li data-target="#carousel-id" data-slide-to="4" class=""></li>
        <li data-target="#carousel-id" data-slide-to="5" class=""></li>
        <li data-target="#carousel-id" data-slide-to="6" class=""></li>
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

        <!-- item 3 -->
        <div class="item">
            <img data-src="" alt="" src="img/ori/ori2.jpg">
            <div class="carousel-caption">
                <h1>Tuyệt mỹ - cụm từ dành cho đồ họa trong game</h1>
                <p>Nếu hỏi bất cứ ai sau khi chơi Ori có ấn tượng sâu sắc về điều gì, câu trả lời chắc hẳn sẽ là hình ảnh và âm nhạc. Khu rừng Nibel có một vẻ đẹp đến mê người, từng chi tiết như cành cây, ngọn cỏ, hoa lá... đều được chăm chút kỹ lưỡng tạo ra một thế giới thần tiên lung linh huyền ảo mà ta khó lòng rời mắt. Mỗi một môi trường đều có nét đặc sắc riêng nhưng không xa rời khỏi tổng thể, tạo sự hài hòa và cân bằng cho cả khu rừng, khiến người chơi cảm thấy thư thái khi "dạo chơi" trong Nibel.</p>
                <p>
                    <a href="#" id="opp2" class="btn btn-info btn-lg" style="background: none">Khám Phá</a>
                </p>
            </div>
        </div>

        <!-- item 4 -->
        <div class="item">
            <img data-src="" alt="" src="img/ori/ori3.jpg">
            <div class="carousel-caption">
                <h1>Âm nhạc trên cả mức tuyệt vời</h1>
                <p>Nhà soạn nhạc Gareth Coker đã xuất sắc tạo nên những giai điệu tuy nhẹ nhàng nhưng có thể đánh động lòng người. Những thanh âm dịu dàng ngân lên từng tiếng, như không vang vọng trong tai mà đang nhảy múa trong lồng ngực người nghe. Tiếng nhạc như làn gió nhẹ, như dòng suối nhỏ, một cách từ từ, khẽ cuốn đi những mệt nhọc phiền não trong cuộc sống. Phối hợp với cảnh sắc thần tiên của khu rừng Nibel lại càng thêm hoàn mỹ.</p>
                <p>
                    <a href="#" id="opp3" class="btn btn-danger btn-lg" style="background: none">Khám Phá</a>
                </p>
            </div>
        </div>

        <!-- item 5 -->
        <div class="item">
            <img data-src="" alt="" src="img/ori/ori4.jpg">
            <div class="carousel-caption">
                <h1>Giá trị nhân văn sâu đậm</h1>
                <p>Ori and the Blind Forest đề cao tình yêu thương, dùng tình yêu thương để hóa giải hận thù. Dù cho Ori của bạn có được luyện đến mức tối thượng thì đến cuối cùng, sức mạnh đó cũng không dùng để tiêu diệt "trùm cuối". Biến cố, hiểu lầm, thù hận nối tiếp nhau đem đến bi kịch, thì chính tình yêu thương, lòng vị tha, cũng từng bước, từng bước, liên kết với nhau hóa giải tất cả. Cả câu chuyện đơn giản chỉ là nêu lên triết lý gieo nhân lành thì gặt quả ngọt, sống yêu thương thì nhận lại yêu thương, nhưng chính điều đơn giản đó là thứ con người bấy lâu nay vẫn đang truy cầu mà chưa có được.</p>
                <p>
                    <a href="#" id="opp4" class="btn btn-default btn-lg" style="background: none">Khám Phá</a>
                </p>
            </div>
        </div>

        <!-- item 6 -->
        <div class="item">
            <img data-src="" alt="" src="img/ori/ori5.jpg">
            <div class="carousel-caption">
                <h1>Có thể bạn chưa biết</h1>
                <p>Ori và Khu Rừng Mất Đi Ánh Sáng lấy cảm hứng từ những bộ phim hoạt hình nổi tiếng của Ghibli cụ thể là Công Chúa Momonoke (Momonoke Hime) và My Neighbor Totoro (Tonari no Totoro), vì thế các nhân vật trong Ori có nét tương đồng với các nhân vật của Ghibli. Ori được xây dựng hình tượng từ các tinh linh của núi rừng trong phim Công Chúa Momonoke còn Naru được xây dụng từ hình mẫu nhân vật Totoro. Ori là một tinh linh ánh sáng phi giới tính, trong tiếng Nhật từ này nghĩa là "cơ hội" cũng là để chỉ Ori chính là cơ hội cuối cùng của khu rừng. Naru trong tiếng Nhật nghĩa là "ra quả" cũng là để chỉ việc Naru ngày ngày hái quả nuôi Ori. Kuro nghĩa là "đen" cũng là để chỉ thế lực đen tối, phản diện trong trò chơi.</p>
                <p>
                    <a href="#" id="opp5" class="btn btn-danger btn-lg" style="background: none">Khám Phá</a>
                </p>
            </div>
        </div>

        <!-- item 7 -->
        <div class="item">
            <img data-src="" alt="" src="img/ori/ori6.jpg">
            <div class="carousel-caption">
                <h1>Cấu hình ở mức trung bình</h1>
                <p>
                RECOMMENDED:<br>
                OS: Windows 7<br>
                Processor: Intel Core i5 2300 or AMD FX6120<br>
                Memory: 4 GB RAM<br>
                Graphics: GeForce GTX 550 Ti or Radeon HD 6770<br>
                DirectX: Version 11<br>
                Hard Drive: 8 GB available space</p>
                <p>
                    <a href="#" id="dori" class="btn btn-success btn-lg" style="background: none">Dowload now</a>
                </p>
            </div>
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