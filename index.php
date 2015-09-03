<?
$home = 'Y'; // This variable designates this as the index page, and tells the header to not put the title on this home page.
include('header.php'); // Include pulls another file into the page, and sticks it on where the include is called.
?>

<div class="container">   
    <div class="row">  

        <div class="col col-sm-12 col-md-4 col-md-push-4 sidebar"> 
            
            <div class="login">
               <h2>Member Login</h2>
                <? echo log_in_form(); ?>         
                    
            </div><!-- /.login -->
            <div class="calendar">
               <h2>Calendar</h2>
                <?php readfile('/home/ncadsa/public_html/calNADA3.htm');?>       
            </div><!-- /.calendar -->
            <div class="sponsors">
                <a href="http://www.nadsa.org/" title="Member of NADSA">
                    <img src="images/logo_ncadsa.jpg">
                </a>
                
                <p>State Association Partner</p>
            </div><!-- /.sponsors -->
        </div><!-- /.col4-->
                   
       <div class="col col-sm-12 col-md-8 col-md-pull-8 bc-maincontent">  
            <?php readfile('/home/ncadsa/public_html/section_1_responsive.htm');?>        

        </div><!-- /.col8-->

    </div><!-- /.row -->
</div><!-- /.container -->


<?include('footer.php'); ?>


