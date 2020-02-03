$(document).ready(function(){

  // Anchor arrow click
  // smooth scroll to anchor tag
 $('a[href*="#"]:not([href="#featured"])').click(function() { // Check to see if anchor tag is not carousel's featured link
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          // Smooth scroll to link section
          $('html, body').animate({
            scrollTop: target.offset().top + 50
          }, 900);
          return false;
        }
      }
    });
    
  //highlight navigation
  $(window).scroll(function() {
    var windowpos = $(window).scrollTop();
    $('nav li a').removeClass('active');
    $('.progress-bar--circle').removeClass('active');

    if (windowpos > $('#top').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#top"]').addClass('active');
    } //windowpos

    if (windowpos > $('#article-1').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-1"]').addClass('active');
      $('a[href$="#article-1"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#article-2').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-2"]').addClass('active');
      $('a[href$="#article-2"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#article-3').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#article-3"]').addClass('active');
      $('a[href$="#article-3"] .progress-bar--circle').addClass('active');
    } //windowpos

    if (windowpos > $('#bottom').offset().top) {
      $('nav li a').removeClass('active');
      $('a[href$="#bottom"]').addClass('active');
    } //windowpos

    // Scrollbar progression
        // pixels scrolled from top
    var scrollTop = $(window).scrollTop(),
        // document height
        docHeight = $(document).height(),
        // window height
        winHeight = $(window).height(),
        // percent of document scrolled
        scrollPercent = (scrollTop) / (docHeight - winHeight),
        scrollPercentRounded = Math.round(scrollPercent*100);

    // incement progress bar as user scrolls
    $('.progress-bar--increment').css('height', scrollPercentRounded + '%');
  });

}); // on load
