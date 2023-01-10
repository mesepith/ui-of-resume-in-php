<?php
include('includes/applicationTop.php');

include("commonScript.php");
?>

<body>
    <div class="topHeaderParentDiv">
        <div class="mobTopPanel">
            <div class="mobMenuPress">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </div>
        </div>
        
        <ul class="resumeTopLinkClick">
            <li><a class="anchorClick home" data-page="1" data-name="home" href="javascript:;">Home</a></li>
            <li><a class="anchorClick about" data-page="2" data-name="about" href="javascript:;">About</a></li>
            <li><a class="anchorClick education" data-page="3" data-name="education" href="javascript:;">Education</a></li>
            <li><a class="anchorClick experience" data-page="4" data-name="experience" href="javascript:;">Experience</a></li>
            <li><a class="anchorClick skill" data-page="5" data-name="skill" href="javascript:;">Skill</a></li>
            <li><a class="anchorClick projects" data-page="6" data-name="projects" href="javascript:;">Projects</a></li>
            <li><a class="anchorClick contact" data-page="7" data-name="contact" href="javascript:;">Contact</a></li>
        </ul>
    </div>
    
    <div class="wholeResumeDiv">
        <div class="flipper">
            
            <?php
                include('includeHome.php');
            ?>
            <?php
                include('includeAbout.php');
            ?>
            <?php
                include('includeEducation.php');
            ?>
            <?php
                include('includeExperince.php');
            ?>
            <?php
                include('includeSkill.php');
            ?>
            <?php
                include('includeProject.php');
            ?>
            <?php
                include('includeContact.php');
            ?>
            <?php
                include('modalContent.php');
            ?>
            
        </div>
    </div>
    
    <?php
//    echo "<pre>";
//    print_r($_GET);
//    exit;
        $pageId = isset( $_GET["pageId"] ) ? $_GET["pageId"] : 1;

        $pageName = isset( $_GET["pageName"] ) ? $_GET["pageName"] : "home";
        
        $projectId = isset( $_GET["projId"] ) ? $_GET["projId"] : false;
        
        $projectName = isset( $_GET["projName"] ) ? $_GET["projName"] : false;

    ?>

    <script>

        var pageId = <?php echo $pageId; ?>;

        var pageName = "<?php echo $pageName; ?>";

        var projectId = "<?php echo $projectId; ?>";

        var projectName = "<?php echo $projectName; ?>";
        
        if( projectName ){
            
            viewProjectDetail( projectId, projectName );
            
        }else{
            
            viewPage( pageId, pageName );
            
        }
        
    </script>
    
</body>
</html>
