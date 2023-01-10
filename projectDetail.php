<?php
include('includes/applicationTop.php');
?>
<!---------------------------------------------------Jquery For Lazy Loading Start------------------------------------------------------------------>		
<script src="<?php echo FILE_PATH; ?>/js/jquery.unveil.js"></script>

<script>
$(function() {
    
    $(".load img").unveil();
    
});
</script>
<!---------------------------------------------------Jquery For Lazy Loading Finish------------------------------------------------------------------>
    
<div class="mainContentProjectDetailDiv allPageDiv restHeadTopMainiDiv" id="page8">
    <div class="restDivTextHead">
        <h1 class="text-center">
            <span class="page-heading">Markmythoughts</span>
        </h1>
    </div>
    <div class="aboutAllCont text-justify">
        <div class="projContent">
            <div class="projDetailAbove projDetailSubLeft projTinyImg">
                <img src="<?php echo FILE_PATH; ?>/images/demo/shot-3_1392970881_278x148.jpg">
            </div>
            <div class="projDetailSubRight projDetailSubContent">
                <p>
                    Markmypage.com is a portal developed in php where user can save url link. Search links by keywords or tags. Import saved bookmark from desktop. Extract links from main social network site such as facebook, google+, twitter. User can export saved url.
                </p>
            </div>
        </div>
        <div class="projContent">
            <div class="projDetailSubLeft projDetailSubContent techUsed">
                <ul>
                    <li><strong class="col-darkblue font-16">Technology:</strong> 
                        <span class="font-14">PHP / AJAX / XHTML / CSS / JS / JQUERY / MYSQL / PDO / DOM / CURL </span>
                    </li>
                    <li><strong class="col-darkblue font-16">Server:</strong> 
                        <span class="font-14">Linux</span>
                    </li>
                    <li><strong class="col-darkblue font-16">Link:</strong> 
                        <span class="font-14 link-desg">
                            <a href="www.markmypage.com" target="_blank">
                                www.markmypage.com
                            </a>
                        </span>
                    </li>
                    <li><strong class="col-darkblue font-16">Tested on:</strong> 
                        <span class="font-14">Chrome, Firefox, IE6, IE7, IE8, Opera, Safari .</span>
                    </li>
                </ul>
            </div>
            <div class="browserTest projDetailSubRight projTinyImg">
                <img src="<?php echo FILE_PATH; ?>/images/icon_browser.png">
            </div>
        </div>
        <div class="projContent screenShotparent">
            <div class="screenshotTitle">
                <h3>Screenshots</h3>
            </div>
            <div class="screenShots">
                
                <?php for($i=1; $i<=6; $i++ ){ ?>
                
                    <div class="eachScreenShots load">
                        
                        <a class="fancybox" href="<?php echo DOMAIN_HOST; ?>/resumenew/images/demo/shot-8_1392971361.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet">
                            
                            <img src="<?php echo FILE_PATH; ?>/images/loader.gif" data-src="<?php echo FILE_PATH; ?>/images/demo/ughts1_1392971360_488x477.jpg" data-src-retina="<?php echo FILE_PATH; ?>/images/demo/ughts1_1392971360_488x477.jpg" alt="Home Page" title="Home Page"/>
                            
                        </a>
                        
                    </div>
                
                <?php } ?>
                
            </div>
        </div>
    </div>
</div>