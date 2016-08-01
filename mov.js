// JavaScript Document
 $(function () {
            //scroll down
            $("li a").bind('click', function (event) {
                event.preventDefault();//先取消超連結原本預設動作
                var $anchor = $(this);
                $('body').animate({
                    scrollTop: $($anchor.attr('href')).offset().top
                }, 1000, 'easeInOutQuint');
            });

            //scroll up
            $(".page-scroll").bind('click', function (event) {
                var $anchor = $(this);
                $('body').animate({
                    scrollTop: '0'
                }, 1000, 'easeInOutQuint');
                event.preventDefault();//先取消超連結原本預設動作(加在這裡也可以)
            });
        });
