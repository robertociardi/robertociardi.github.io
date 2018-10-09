$(document).ready(function() {
    /* function activated by scrolling on the page*/
    $(window).scroll(function(){
        var top = ($(window).scrollTop());
        var sidebar_position = ($('.sidebar').position());

        /* titles must avoid sidebar toggler*/
        var title_pos = ($('#trama').position());
        if(top > title_pos.top-80 && top < title_pos.top +50) {
            $('#trama').addClass('moved');
        } else {
            $('#trama').removeClass('moved');
        }

        for (var i = 0; i < 7; i++) {
            var title_pos = ($('#title-chapter'+i).position());
            if(top > title_pos.top-80 && top < title_pos.top +50) {
                $('#title-chapter'+i).addClass('moved');
            } else {
                $('#title-chapter'+i).removeClass('moved');
                if($('#title-chapter'+i).hasClass('moved-down'))
                    $('#title-chapter'+i).removeClass('moved-down');
            }
        }

        /*sidebar must follow the scrolling*/
        if(top > sidebar_position.top-70){
            $('.sidebar > .follower').addClass('follow-me');
            $('#sidebar-toggler').addClass('follow-me');
        }
        else {
            $('.sidebar > .follower').removeClass('follow-me');
            $('#sidebar-toggler').removeClass('follow-me');
        }
    });
});

function move_title(i) {
    $('#title-chapter'+i).addClass('moved-down');
}

/* to toggle game of cows chapters */
function toggle_chapter(i) {
    var img_dir = "/img/icons/";
    var chapter = $('.chapter#chapter'+i);
    var toggler_img = $('#toggler-img-'+i);
    var string = img_dir+'down2.png';
    if(toggler_img.attr('src') == string) {
        toggler_img.attr('src', img_dir+'close.png');
    }
    else
        toggler_img.attr('src', string);
    chapter.toggle();
}
