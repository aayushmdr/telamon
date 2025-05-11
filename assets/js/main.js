AOS.init();


//For loader
$(window).on("load", function(){
    $(".loader-wrapper").fadeOut("slow");
    $("body").removeClass("preload"); 
});