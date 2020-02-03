// // work in progress - needs some refactoring and will drop JQuery i promise :)
// var instance = $(".hs__wrapper");
// $.each( instance, function(key, value) {
    
//   var arrows = $(instance[key]).find(".arrow"),
//       prevArrow = arrows.filter('.arrow-prev'),
//       nextArrow = arrows.filter('.arrow-next'),
//       box = $(instance[key]).find(".hs"), 
//       x = 0,
//       mx = 0,
//       maxScrollWidth = box[0].scrollWidth - (box[0].clientWidth / 2) - (box.width() / 2);

//   $(arrows).on('click', function() {
      
//     if ($(this).hasClass("arrow-next")) {
//       x = ((box.width() / 2)) + box.scrollLeft() - 10;
//       box.animate({
//         scrollLeft: x,
//       })
//     } else {
//       x = ((box.width() / 2)) - box.scrollLeft() -10;
//       box.animate({
//         scrollLeft: -x,
//       })
//     }
      
//   });
    
//   $(box).on({
//     mousemove: function(e) {
//       var mx2 = e.pageX - this.offsetLeft;
//       if(mx) this.scrollLeft = this.sx + mx - mx2;
//     },
//     mousedown: function(e) {
//       this.sx = this.scrollLeft;
//       mx = e.pageX - this.offsetLeft;
//     },
//     scroll: function() {
//       toggleArrows();
//     }
//   });

//   $(document).on("mouseup", function(){
//     mx = 0;
//   });
  
//   function toggleArrows() {
//     if(box.scrollLeft() > maxScrollWidth - 10) {
//         // disable next button when right end has reached 
//         nextArrow.addClass('disabled');
//       } else if(box.scrollLeft() < 10) {
//         // disable prev button when left end has reached 
//         prevArrow.addClass('disabled')
//       } else{
//         // both are enabled
//         nextArrow.removeClass('disabled');
//         prevArrow.removeClass('disabled');
//       }
//   }
  
// });









(function() {

    "use strict";

    $.fn.sliderNd = function(o) {


        // box = $(instance[key]).find("ul"), 
        // $(box).on({
        //     mousemove: function(e) {
        //       var mx2 = e.pageX - this.offsetLeft;
        //       if(mx) this.scrollLeft = this.sx + mx - mx2;
        //     },
        //     mousedown: function(e) {
        //       this.sx = this.scrollLeft;
        //       mx = e.pageX - this.offsetLeft;
        //     },
        //     scroll: function() {
        //       toggleArrows();
        //     }
        //   });
        
        //   $(document).on("mouseup", function(){
        //     mx = 0;
        //   });



        var defaults = {

            // w + h to enforce consistency

            width: 700,

            height: 300,

            delay: 200, //delay of slide rotaion



            // control and marker configuration

            next: 'next', // id/class inside next UI element

            prev: 'prev', // id/class inside previous UI element



            //default type

            type: 'lastToFirst', //type of slider. // for apnd dotted navigation will not work

            autoplay: false,

            playTime: 5000, //autoplay time interval

            navigation: false,

        };

        var settings = $.extend({}, defaults, o);

        var cnt = 0,

            wraper = $(this),

            sliderWidth = $(this).width(), // Slider Wraper Div

            slides = $(wraper).children('ul'), //slider UL

            slideCount = slides[0].childElementCount, //slides count

            sliderUlWidth = slideCount * sliderWidth;




        // console.log(settings.type);

        slides.css({
            width: sliderUlWidth
        });

        //slider Element

        var $c_fwd = null,

            $c_bwd = null;



        //prev next button

        $c_fwd = $("." + settings.next);

        $c_bwd = $("." + settings.prev);



        var apnd_slides = function() {

            slides.css({
                marginLeft: -sliderWidth
            });

            $c_fwd.on('click', function() {

                slides.animate({
                    left: -sliderWidth
                }, settings.delay, function() {

                    $(slides.selector + " li:first-child").appendTo(slides);

                    slides.css('left', '');

                });

            });

            $c_bwd.on('click', function() {

                slides.animate({
                    left: +sliderWidth
                }, settings.delay, function() {

                    $(slides.selector + " li:last-child").prependTo(slides);

                    slides.css('left', '');

                });

            });

        }



        var lastToFirst_slides = function() {

            $c_fwd.on('click', function() {

                cnt++;

                if (settings.navigation === true) {
                    $(".text_slide ul li").css('background', 'grey');
                }

                if (cnt > (slideCount - 1)) {
                    cnt = 0;
                }

                slides.animate({
                    'left': -sliderWidth * cnt
                }, settings.delay, function() {

                    if (settings.navigation === true) {

                        $(".text_slide ul li:nth-child(" + (cnt + 1) + ")").css('background', '#ffffff');

                    }

                });

            });

            $c_bwd.on('click', function() {

                if (settings.navigation === true) {
                    $(".text_slide ul li").css('background', 'grey');
                }

                cnt--;

                if (cnt < 0) {
                    cnt = 0;
                }

                slides.animate({
                    'left': -sliderWidth * cnt
                }, settings.delay, function() {

                    if (settings.navigation === true) {

                        $(".text_slide ul li:nth-child(" + (cnt + 1) + ")").css('background', '#ffffff');

                    }

                });

            });

        }



        var hiddenAnchor_slides = function() {

            $c_bwd.hide();

            $c_fwd.on('click', function() {

                if (settings.navigation === true) {
                    $(".text_slide ul li").css('background', 'grey');
                }

                cnt++;

                if (cnt > (slideCount - 1)) {
                    ;
                    cnt = 0;
                } else if (cnt > (slideCount - 2)) {
                    $c_fwd.hide();
                } else {
                    $c_bwd.show();
                }

                slides.animate({
                    'left': -sliderWidth * cnt
                }, settings.delay, function() {

                    if (settings.navigation === true) {

                        $(".text_slide ul li:nth-child(" + (cnt + 1) + ")").css('background', '#ffffff');

                    }

                });

            });

            $c_bwd.on('click', function() {

                if (settings.navigation === true) {
                    $(".text_slide ul li").css('background', 'grey');
                }

                cnt--;

                if (cnt < 0) {
                    cnt = 0;
                } else if (cnt < 1) {
                    $c_bwd.hide();
                } else {
                    $c_fwd.show();
                }

                slides.animate({
                    'left': -sliderWidth * cnt
                }, settings.delay, function() {

                    if (settings.navigation === true) {

                        $(".text_slide ul li:nth-child(" + (cnt + 1) + ")").css('background', '#ffffff');

                    }

                });

            });

        }

        if (settings.navigation === true && settings.type !== 'apnd') {



            var defineClass = "<style>.text_slide{position: relative;margin: 0 auto;width: 300px;}.text_slide ul{padding: 0px;margin: 0px auto;width: " + (7 * slideCount) + "%;height: 20px;margin-top: -20px;}.text_slide ul li{display: inline;float: left;background: grey;margin: 0px 5px;color: transparent;border-radius: 20px;height: 10px;width: 10px;cursor: pointer;} .text_slide ul li:first-child{background: #ffffff;}<\/style>"

            wraper.after(defineClass);

            var navLi = [];

            for (var i = 0; i < slideCount; i++) {

                navLi[i] = "<li>" + i + "<\/li>";

            }

            var navList = navLi.toString().replace(/,/g, ''),

                navigation = "<div class='text_slide'><ul>" + navList + "<\/ul><\/div>";

            wraper.after(navigation);



            $(".text_slide ul li").click(function() {

                $(".text_slide ul li").css('background', 'grey');

                cnt = $(this).index();

                if (settings.type === 'hiddenAnchor') {

                    if (cnt <= 0) {
                        $c_bwd.hide();
                    } else {
                        $c_bwd.show();
                    }

                    if (cnt >= (slideCount - 1)) {
                        $c_fwd.hide();
                    } else {
                        $c_fwd.show();
                    }

                }

                slides.animate({
                    'left': -sliderWidth * cnt
                }, settings.delay, function() {

                    if (settings.navigation === true) {

                        $(".text_slide ul li:nth-child(" + (cnt + 1) + ")").css('background', '#ffffff');

                    }

                });

            });

        }

        if (settings.autoplay === true) {

            var startAutoplay = setInterval(function() {
                $c_fwd.click();
            }, settings.playTime);

            $c_fwd.on('mouseover', function() {
                clearInterval(startAutoplay);
            });

            $c_fwd.on('mouseout', function() {
                startAutoplay = setInterval(function() {
                    $c_fwd.click();
                }, settings.playTime);
            });

        }



        if (settings.type === 'apnd') {

            apnd_slides(); //append preppend the last and previuos slide accordingly //FOR 'apnd' dotted navigation will not work.

        } else if (settings.type === 'lastToFirst') {

            lastToFirst_slides(); //rotate first child after last child

        } else if (settings.type === 'hiddenAnchor') {

            hiddenAnchor_slides(); //hide anchor on last and first child

        }

    }

})(jQuery);

