$(document).ready(function(){
 $(".menu_bar").click(function(){
   $(".navbar_links").toggleClass("toggle")
 });
    $('body').click(function (){
        $('.alert').hide();
    })

    $('body').mousemove(function (){
        $('.alert').hide();
    })
    $('body').scroll(function (){
        $('.alert').hide();
    })
});
