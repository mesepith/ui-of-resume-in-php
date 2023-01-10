/* 
 * @author: ZAHIR
 * Desc: Modal Content Display
 */

var FancyModal = function(){
    
    this.executeFancyText = function( executeClass, title, href ){
        
        $("."+executeClass).attr("title", title);
        
        $("."+executeClass).attr("href", href);
        
        $("."+executeClass).fancybox({
            'titlePosition'     : 'inside',
            'transitionIn'      : 'none',
            'transitionOut'     : 'none'
        });
        
    };
    
}


