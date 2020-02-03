$(document).ready(function(){
  
  $(window).scroll(function() {
    
    var scrollTop = $(window).scrollTop(),
    docHeight = $(document).height(),
    winHeight = $(window).height()

    scrollPercent = (scrollTop) / (docHeight - winHeight),
    scrollPercentRounded = Math.round(scrollPercent*100);
    $('div#scroll-bar').css('width', scrollPercentRounded + '%');
    
    // $('div#scroll-bar').width(
    //   ($d.scrollTop() / ($d.height() - $w.height()) * $d.height()) + 'px',
    // ),
    
  });
 
});