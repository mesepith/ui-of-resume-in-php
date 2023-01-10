
if(window.location.hostname== "192.168.43.146"){
    
    rootLocation = "/resumenew/";
    
}else{
    
    rootLocation = "/learn/resumenew/";
    
}

var filePath = window.location.origin + rootLocation;

$(document).on("click", ".anchorClick", function (e) {
    var pageId = $(this).attr("data-page");

    var pageName = $(this).attr("data-name");

    viewPage(pageId, pageName);
    

});
function flipContent(flipDivClass) {
    $("." + flipDivClass).css("opacity", '1');
    $("." + flipDivClass).css("display", "block");
    $("." + flipDivClass).css("z-index", "2");
    if ($('.wholeResumeDiv').hasClass('hover')) {
        $(".wholeResumeDiv").removeClass('hover');
        $("." + flipDivClass).css('transform', 'rotateY(0deg)');
    } else {
        $(".wholeResumeDiv").addClass('hover');
        $("." + flipDivClass).css('transform', 'rotateY(180deg)');
    }
}
$(document).on("click", ".mobTopPanel", function (e) {
    $(".resumeTopLinkClick").toggle('slow');
});
$(document).ready(function () {
    
    var width = $(window).width();
    if (width < 627) {
        $(document).on("click", ".wholeResumeDiv", function (e) {
//        $(document.body).click(function(){
            $(".resumeTopLinkClick").hide('slow');
        });
    }
        	
    /*
     *Used for Fancy popup image 
     */
    
    $('.fancybox').fancybox({
        padding: 0,
          helpers: {
            overlay: {
              locked: false
            }
          }
    });
    /*
     *@author: ZAHIR
     *Desc : On Click Submit Contact Button 
     */
    
    $('.clickSubmit').click(function() {
        
        var title = "Title Given via attr by zahir 2";
        
        var href = "#modalContId1";
        
        new FancyModal().executeFancyText("clickSubmit", title, href);
        
    });
    
      
   
    
});

function viewPage(pageId, pageName) {
    
    $(".allPageDiv").css("opacity", '0');
    $(".allPageDiv").css("display", "none");
    $(".allPageDiv").css("z-index", "0");
    if (pageId == 2) {
        flipContent("mainContentAboutDiv");
    } else if (pageId == 1) {
        flipContent("mainContentHomeDiv");
    } else if (pageId == 3) {
        flipContent("mainContentEducationDiv");
    } else if (pageId == 4) {
        flipContent("mainContentExperencDiv");
    } else if (pageId == 5) {
        flipContent("mainContentSkillDiv");
    } else if (pageId == 6) {
        flipContent("mainContentProjectDiv");
    } else if (pageId == 7) {
        flipContent("mainContentContactDiv");
    } else if (pageId == 8) {
        
        flipContent("mainContentProjectDetailDiv");
    }
    if (pageId == 1 || pageId == 7) {
        document.body.style.background = "#666699";
    } else {
        document.body.style.background = "#FFF";
    }
    var width = $(window).width();
    if ( width < 627 ) {
        $(".resumeTopLinkClick").hide();
        
    }
    
    $(".anchorClick").removeClass("active");
    $("."+pageName).addClass("active");
    
    /*
     * Use Push State 
     */
    
    if( pageId !== 8 ){
    
        window.history.pushState('pushhhhhhhhhh', 'push-state-taste', rootLocation + pageName);
    
    }


}

/*
* Listen for orientation changes
*/

window.addEventListener("orientationchange", function() {
  
    /*
    *   window.orientation = 0 means portrait , 
    *   -90 means a the device is landscape rotated to the right, 
    *   and 90 means the device is landscape rotated to the left.
    */
  
  if( window.orientation === 0 ){
      
      $(".resumeTopLinkClick").css('display', "none");
    
  }
}, false);
 
 setInterval(function(){
     
    var width = $(window).width();
    
    if ( width > 627 ) {
        
        if( $('.resumeTopLinkClick').css('display') == 'none' ){
            
            $(".resumeTopLinkClick").css('display', "block");
            
        }
        
        $(".resumeTopLinkClick li a").attr("style", "padding-right: 10px");
        
    }else{
        
        $(".anchorClick").css("padding-right", "100% !important");
        
        $(".resumeTopLinkClick li a").attr("style", "padding-right: 100% !important");
        
    }
    
	   
},3000);

/*
 * @author : ZAHIR
 * Desc : Click on each project redirect to project detail page
 */

$(document).on("click", ".project-list", function(){
    
    var projId = $(this).attr("data-projId");
    
    var projectName = "project-name";
    
    viewProjectDetail( projId, projectName );
    
    console.log("projId : " + projId );
    
    
});

function viewProjectDetail( projId, projectName ){
    
    $.ajax({
        
        url: filePath + 'projectDetail.php',
        type: 'POST',
        data: {
            projId : projId
        },
        dataType: 'html',
        beforeSend: function(){
            
            $.fancybox({
                'href': '#pageLoadImg',
                'closeBtn' : false,
                helpers     : { 
                    overlay : {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
                }
            });
            
        },
        success : function(data){
            
            window.history.pushState('pushhhhhhhhhh', 'push-state-taste', rootLocation + 'project/'+projId+ '/' + projectName);
            
            $(".flipper").append(data);
            //console.log("success data " + data);
            
        },
        error: function(){
            console.log("Something Went wrong");
        },
        complete : function(){
            
            viewPage(8, "projects");
            
            $.fancybox.close();
        }
        
    });
    
}

/*
 * If User Click In Back Button in browser 
 */        
        
$(window).on("popstate", function () {

    var pathname = window.location.pathname; // Returns path only

    var explode = pathname.split("/");

    var pageName = explode["2"];

    var projectId = ( explode["3"] !== 'undefined') ? explode["3"] : false;

    var projectName = ( explode["4"] !== 'undefined') ? explode["4"] : false;

    if( projectName ){

        viewProjectDetail( projectId, projectName );

    }else{

        var pageId = $("."+pageName).attr("data-page");

        viewPage( pageId, pageName );

    }

});


        
