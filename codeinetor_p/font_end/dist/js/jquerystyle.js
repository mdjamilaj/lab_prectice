// $(document).ready(function(){
//   // $(".Change_body_Background").click(function(){
//   //   $( ".main-header" ).css("background-color", "red");
//   // });
// });


$(document).ready(function(){
  $(".show").click(function(){
    $.ajax({url: base_url +"license.txt", success: function(result){
      $(".div1").html(result);
    }});
  });
  
  //Header color change
  $(".Change_header_Background_red").click(function(){
    $( ".main-header" ).css("background-color", "red");
  });
  $(".Change_header_Background_blue").click(function(){
    $( ".main-header" ).css("background-color", "blue");
  });
  $(".Change_header_Background_pink").click(function(){
    $( ".main-header" ).css("background-color", "pink");
  }); 
  //leftSideber Color changge
  $(".Change_leftsideber_Background_green").click(function(){
    $( ".main-sidebar" ).css("background-color", "green");
  });
  $(".Change_leftsideber_Background_yellow").click(function(){
    $( ".main-sidebar" ).css("background-color", "yellow");
  });
  $(".Change_leftsideber_Background_white").click(function(){
    $( ".main-sidebar" ).css("background-color", "white");
  });
  //Body Color changge
  $(".Change_body_Background_orange").click(function(){
    $( ".content-wrapper" ).css("background-color", "orange");
  });
  $(".Change_body_Background_lalic").click(function(){
    $( ".content-wrapper" ).css("background-color", "#B660CD");
  });
  $(".Change_body_Background_lime").click(function(){
    $( ".content-wrapper" ).css("background-color", "#AEF35A");
  });
});