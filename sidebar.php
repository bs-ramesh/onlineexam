<style>
 .app-sidebar__heading {
    text-indent: initial;
    color: azure;
}   
</style>
<div class="app-sidebar sidebar-shadow" style=" background-image: linear-gradient(to right, #434343 0%, black 100%) !important;">
    <div class="app-header__logo" style=" background-image: linear-gradient(to right, #434343 0%, black 100%) !important;">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">

         
                <li class="app-sidebar__heading">AVAILABLE EXAM'S</li>
                <li>
                <a href="#" style="color: #c97171;">
                     <i class="metismenu-icon pe-7s-display2"></i>
                     All Exam's
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul >
                    <?php 
                        
                        if($selExam->rowCount() > 0)
                        {
                            while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                 <li>
                                 <a href="#" id="startQuiz" style="color: #c97171;" data-id="<?php echo $selExamRow['ex_id']; ?>"  >
                                    <?php 
                                        $lenthOfTxt = strlen($selExamRow['ex_subject']);
                                        if($lenthOfTxt >= 23)
                                        { ?>
                                            <?php echo substr($selExamRow['ex_subject'], 0, 20);?>.....
                                        <?php }
                                        else
                                        {
                                            echo $selExamRow['ex_subject'];
                                        }
                                     ?>
                                 </a>
                                 </li>
                            <?php }
                        }
                        else
                        { ?>
                            <a href="#" style="color: #c97171;">
                                <i class="metismenu-icon"></i>No Exam's @ the moment
                            </a>
                        <?php }
                     ?>


                </ul>
                </li>

                 <li class="app-sidebar__heading">TAKEN EXAM'S</li>
                <li>
                  <?php 
                    $selTakenExam = $conn->query("SELECT * FROM exam_tbl et INNER JOIN exam_attempt ea ON et.ex_id = ea.exam_id WHERE exmne_id='$exmneId' ORDER BY ea.examat_id  ");

                    if($selTakenExam->rowCount() > 0)
                    {
                        while ($selTakenExamRow = $selTakenExam->fetch(PDO::FETCH_ASSOC)) { ?>
                            <a style="color: #c97171;" href="home.php?page=result&id=<?php echo $selTakenExamRow['ex_id']; ?>" >
                               
                                <?php echo $selTakenExamRow['ex_subject']; ?>
                            </a>
                        <?php }
                    }
                    else
                    { ?>
                        <a href="#" style="color: #c97171;" class="pl-3">You are not taking exam yet</a>
                    <?php }
                    
                   ?>

                    
                </li>


                <li class="app-sidebar__heading">FEEDBACKS</li>
                <li>
                    <a href="includes/insfeed.php" 
                     style="color: #c97171;" >
                        Add Feedbacks                        
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
</div>  