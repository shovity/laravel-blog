$(document).ready(function () {
    $('#dori').click(function () {
        swal("Halo", "Lên google search ori and blind forest codex ra cả đống nhé! Chúc vui :D", "warning");
    })
    $('#opp,#opp1,#opp2,#opp3,#opp4,#opp5,#opp6').click(function () {
        swal("Surpise", "Không có gì luôn, Ngặc nhiên chưa :))", "success");
    })
    
});




function scrolltop() 
{
    var id_button = '#goTop';

    // Kéo xuống khoảng cách 220px thì xuất hiện button
    var offset = 220;

    // THời gian di trượt là 0.5 giây
    var duration = 500;

    // Thêm vào sự kiện scroll của window, nghĩa là lúc trượt sẽ
    // kiểm tra sự ẩn hiện của button
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery(id_button).fadeIn(duration);
        } else {
            jQuery(id_button).fadeOut(duration);
        }
    });

    // Thêm sự kiện click vào button để khi click là trượt lên top
    jQuery(id_button).click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    });
}

// Thực hiện
$(document).ready(function(){
    scrolltop();
});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});