//https://webdesign.tutsplus.com/tutorials/how-to-build-a-page-scroll-progress-indicator-with-jquery-and-svg--cms-20881

/*(function(){
    var $w = $(window);
    var wh = $w.height();
    var h = $('body').height();
    var sHeight = h - wh;
    $w.on('scroll', function(){
        var perc = Math.max(0, Math.min(1, $w.scrollTop()/sHeight));
    });
 
}());


(function(){
    var $w = $(window);
    var $circ = $('.animated-circle');
    var $progCount = $('.progress-count');
    var wh = $w.height();
    var h = $('body').height();
    var sHeight = h - wh;
    $w.on('scroll', function(){
        var perc = Math.max(0, Math.min(1, $w.scrollTop()/sHeight));
        updateProgress(perc);
    });
 
    function updateProgress(perc){
        var circle_offset = 126 * perc;
        $circ.css({
            "stroke-dashoffset" : 126 - circle_offset
        });
        $progCount.html(Math.round(perc * 100) + "%");
    }
 
}());

*/

var $prog2 = $('.progress-indicator-2');
function updateProgress(perc){
    $prog2.css({width : perc*100 + '%'});
}

(function(){
    var $w = $(window);
    var $circ = $('.animated-circle');
    var $progCount = $('.progress-count');
    var $prog2 = $('.progress-indicator-2');
    var wh = $w.height();
    var h = $('body').height();
    var sHeight = h - wh;
    $w.on('scroll', function(){
        var perc = Math.max(0, Math.min(1, $w.scrollTop()/sHeight));
        updateProgress(perc);
    });
 
    function updateProgress(perc){
        var circle_offset = 126 * perc;
        $circ.css({
            "stroke-dashoffset" : 126 - circle_offset
        });
        $progCount.html(Math.round(perc * 100) + "%");
 
        $prog2.css({width : perc*100 + '%'});
    }
 
}());

