<?include('header_top.php');?>
<!-- Google Fonts -->
<!-- When adding a google font, be sure to remove the HTTP: from the URL.  
	 This will allow us to switch between HTTP and HTTPS -->



<?
/* The next section deals with titles on sub pages */
// Keep in mind that any divs started in this block of code must be closed in the footer
if($home!='Y' && $_GET['mms'] != 'X'){ //this IF statement is the test.  If these items evaluate to TRUE, it will perform the first block of code.
	echo '<h2 class="title">'.$title.'</h2>';//ECHO is PHP's command to output to the page.
} else { //If the IF statement evaluates to FALSE, this code will be run.  This is optional.

}?>



<header>   
    <div class="container">   
       <div class="row">  
        <img alt="" src="<?=$base;?>images/header-banner.jpg" class="img-responsive">
           <div class="tagline">
           
           </div><!-- /#tagline -->
            <div id="main-menu" class="hidden-xs	hidden-sm">
                <? echo quick_menu(); ?>
            </div><!-- /.main-menu -->
        </div><!-- /.row -->
    </div><!-- /.container -->    
</header><!-- /header -->
