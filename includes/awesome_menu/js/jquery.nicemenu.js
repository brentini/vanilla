/*
*
*Nice JQuery Menu
*
*/

(function( $ ){
    $.fn.nicemenu = function(o){
        $(window).bind('load menu', function(){
               { nav.reset(); nav.menu(); } 
        });
        
        nav = {
            reset : function(){ 
                $('nav>ul li').unbind('mouseenter mouseleave click');
                $('nav .sub_nav').unbind('click').remove();
            },
    
            menu : function(){
			 curz = 999;
                $('nav>ul').show(); $('nav ul ul').hide();
                $("nav>ul li").hover(function() {
                var timeout = $(this).data("timeout");
                 if(timeout) clearTimeout(timeout);
                   $(this).children("ul").slideDown(300).css({ 'z-index':curz++ });
                 }, function() {
                   $(this).data("timeout", setTimeout($.proxy(function() {
                   $(this).find("ul").slideUp(300);
                 }, this), 300));
               });
            },
            
            sub : function(){            
                if($('.sub_nav').length==0){
                    $('nav ul li').each(function(){
                        if($(this).children('ul').length>0){ $('<a class="sub_nav"><div class="arrow_down"></div></a>').appendTo(this); }
                    });
                }
                if(sub_nav_bind==false){              
                    $('nav>ul').delegate('.sub_nav', 'click', function(e) {               
                        $(this).siblings('ul').slideToggle(300);               
                        if ($(this).children('div').hasClass('arrow_down')){
                            $(this).children('div').attr('class', 'arrow_up');
                        }else{
                            $(this).children('div').attr('class', 'arrow_down');
                        }
                    });
                    sub_nav_bind = true;
                } 
            }      
        };       
    };
})( jQuery );