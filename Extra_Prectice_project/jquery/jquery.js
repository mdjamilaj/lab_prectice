$(document).ready(function(){
    $(".show").click(function(){
      $(".card").slideToggle("slow");
    });

    $(".show1").click(function(){
        $(".card1").css("color", "red").slideDown(5000).slideUp(5000);
      });

      $("#stop").click(function(){
        $(".card1").stop();
      });

  });
