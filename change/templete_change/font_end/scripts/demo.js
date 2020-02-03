$(document).ready(function() {
    $('.col-md-3').on("mouseenter", function() {
        $(".section_col_innerdiv1").css("background-color", "white");
        $(this).css("background-color", "white");
    }).on("mouseleave", function() {
        $(".section_col_innerdiv1").css("background-color", "#111");
        $(this).css("background-color", "#111");
    });
});