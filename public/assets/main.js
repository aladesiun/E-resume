$(document).ready(function(){
 $(".menu_bar").click(function(){
   $(".navbar_links").toggleClass("toggle")
 });

    $(".success_popup").show().delay(5000).fadeOut();
    $(".alert").delay(2500).fadeOut();
});
