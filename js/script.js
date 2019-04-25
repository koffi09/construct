$(document).ready(function() {
$("#myNavbar li a").click(function () {
    $("#myNavbar li a").removeClass("active");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).addClass("active");   
});
});