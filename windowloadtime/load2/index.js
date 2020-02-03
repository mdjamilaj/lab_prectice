// var bar=$('#progress_bar');
// var percentage=parseInt($('#progress_percentage').html());

// function stopProgress(){
//   clearInterval(progress);
// }

// var progress= setInterval(function(){
//   percentage++;
//   if (percentage<=100){
//     $('#progress_percentage').html(percentage+'%');
//     if (percentage>10) {
//       bar.css('width',percentage+'%');
//       console.log(percentage);
//     }
//   }
//   else {
//     stopProgress()
//   }
// },80);


setTimeout(function() {
        $('body').addClass('loaded');
    }, 4000);
 

var $circ = $('.animated-circle');
var $progCount = $('.progress-count');
var percentage=parseInt($('.progress-count').html());



function stopProgress(){
  clearInterval(progress);
}

var progress= setInterval(function(){

  percentage++;
  if (percentage<=100){
    
    if (percentage>10) {
      var circle_offset = 1.26 * percentage;
        $circ.css({
            "stroke-dashoffset" : 126 - circle_offset
        });
      $('.progress-count').html(percentage+'%');
      console.log(percentage);
    }
  }
  else {
    stopProgress()
  }
},40);