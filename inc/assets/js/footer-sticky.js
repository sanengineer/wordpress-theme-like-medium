  window.addEventListener('resize', function(){
        disableScript();
     });
     
     window.addEventListener('load',function(){
        disableScript();
     });
     
     function disableScript(){
         if(screen.width > 1024){
           
            (function($){
                $(window).scroll(function () {   
                   
                 if($(window).scrollTop() > 0) {
                    $('#stickyScrll').css('position','sticky');
                    $('#stickyScrll').css('top','20px'); 
                    
                    
                 }
                 
                 else if ($(window).scrollTop() <= 200) {
                    $('#stickyScrll').css('position','');
                    $('#stickyScrll').css('top',''); 
                                      
                 }  
                    if ($('#stickyScrll').offset().top + $("#stickyScrll").height() > $("#colophon").offset().top) {
                        $('#stickyScrll').css('top',-($("#stickyScrll").offset().top + $("#stickyScrll").height() - $("#colophon").offset().top));
                    }
                });
            
                
            
                })(jQuery);

         } 
     }