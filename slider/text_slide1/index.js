

// function showDivs(n) {
//     var i;
//     var x = document.getElementsByClassName("text_slide");
//     // setInterval(function (){
//     //   n = x.length;
//     //    return n++;
//     // },1000)
//     if (n > x.length) {slideIndex = 1}
//     if (n < 1) {slideIndex = x.length}
//     for (i = 0; i < x.length; i++) {
//       x[i].style.display = "none";  
//     }
//     x[slideIndex-1].style.display = "block";
// }


var slideIndex = 0;
carousel();

function carousel() {
  var i;
  
  
  var x = document.getElementsByClassName("dot");
  for (i = 0; i < x.length; i++) {
    console.log(i);
    //x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].addClass = "dot "+ x.length +" active";
  setTimeout(carousel, 2000); // Change text every 2 seconds
}








var commentSlider = {
  
  'config' : {
    'container' : $('#wrapper')
  },
    
  'init' : function(config) {
      if(config && typeof(config) == 'object') {
        $.extend(commentSlider.config, config);
      }
    
      //caching dom elements
      //wrapper
      commentSlider.$container = commentSlider.config.container;

      //all paragraph tags
      commentSlider.$paragraphs = commentSlider.$container.
        find('p');
    
      //all li tags
      commentSlider.$dots = commentSlider.$container.
        find('ul.dots-wrap > li');
    
      //first li within ul.dots-wrap
      commentSlider.$firstDot = commentSlider.$container.
        find('ul.dots-wrap > li:first-child');
    
      //first p tag within module wrapper
      commentSlider.$firstParagraph = commentSlider.$container.
        find('p:first-child');
      
      //setting first dot with .active class
      commentSlider.$firstDot.addClass('active');

      //setting first paragraph tag with .active class
      commentSlider.$firstParagraph.addClass('activeText');
    
      //initializing functions and defining their parameters
      commentSlider.currentItem(commentSlider.$paragraphs, commentSlider.$dots);
      commentSlider.setActiveDot(commentSlider.$dots);
      commentSlider.timer();
  },
  
  //timer function runs necesary functions every five seconds
  'timer' : function() {
    setInterval(function(){ 
      //console,log("hello");
    }, 50);
  }, //timer function end
  
  //grabs current numerical class of dot clicked
  'dotNumber' : function($dot) {
    var dotClassArray = [];
    var dotClassList = dotClassArray.push($dot.attr('class'));
    var splitArray = dotClassArray.toString().split(' ');
    
    for(i = 0; i < splitArray.length; i++) {
      if (splitArray[i] === "dot") { 
        splitArray.splice(i, 1);
        var dotClickedNumber = splitArray[i];
        commentSlider.paragraphNumber(dotClickedNumber, commentSlider.$paragraphs);
      }
    }
  },//end dotNumber
  
  'paragraphNumber' : function(dotClickedNumber, $paragraphs) {
    $paragraphs.each(function() {
        var $paragraph = $(this);
        var paragraphClass = $paragraph.attr('class');    
       
        if(paragraphClass === dotClickedNumber) {          
          $paragraph.addClass('activeText');
          $paragraph.siblings().removeClass('activeText').addClass('slideLeft');
          setTimeout(function () { 
             $paragraph.siblings().removeClass('slideLeft');    
          }, 400);          
        }
    });
  },//end paragraphNumber
  
  //currentItem function gives every paragraph and dot a numerical class
  //based on their array position
  'currentItem' : function($paragraphs, $dots) {
    $paragraphs.each(function(i) {
      var $paragraph = $(this);
      $paragraph.addClass([] + i);
    });
    
    $dots.each(function(i) {
      var $dot = $(this);
      $dot.addClass([] + i);
    });
  },//end currentItem
  
  //setActiveDot adds class active to whichever dot is clicked
  'setActiveDot' : function($dots) {
    $dots.each( function() {
      var $dot = $(this);
      $dot.on('click', function() {
        if($dot.hasClass('active')) {
          return false;
        } else {
          $dot.addClass('active');
          $dot.siblings().removeClass('active');
        }
        commentSlider.dotNumber($dot);      
      });
    });
  }//end setActiveDot
};
  
//initializes the entire thing by calling the init function  
$(document).ready(commentSlider.init);