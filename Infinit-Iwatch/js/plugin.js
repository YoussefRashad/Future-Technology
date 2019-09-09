$(document).ready(function(){
    
    // wow initialization 
    
    new WOW().init();

    
    // smooth scroll 
    
    
    $(".navbar-default .navbar-nav>li>a").click(function(){
        
        $("html , body").animate({
            
            scrollTop :$("#" + $(this).data("value")).offset().top
            
        },2000);
    })
    
})