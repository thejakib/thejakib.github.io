$(document).ready(function(){
    
    $("div#catalog_items ul li div.image img").each(function(i,el){
        $(this).parent().html("<a href="+$(this).attr('src')+" target='_blank'>"+$(this).parent().html()+"</a>");
            
    });
                
                $sidebar= $("nav#catalog_index");
                topoffset=$sidebar.offset().top;
                
                positionSideBar = function(){
                    if($(window).scrollTop()>topoffset)
                    {
                        $sidebar.css("top",$(window).scrollTop()-topoffset+20);
                    }
                    else
                    {
                        $sidebar.css("top",0);
                    }
                };
                
                $(window).scroll(positionSideBar);
                
                $(window).resize(function(){
                    topoffset=$sidebar.offset().top - parseInt($sidebar.css("top"), 10);;
                    
                    positionSideBar();
                });
            });