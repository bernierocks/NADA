<?include('header_top.php');?>

<link href='//fonts.googleapis.com/css?family=Dancing+Script:700' rel='stylesheet' type='text/css'>
<!-- Google Fonts -->
<!-- When adding a google font, be sure to remove the HTTP: from the URL.  
	 This will allow us to switch between HTTP and HTTPS -->





<header>   
          <?php
            $before    =    '<li id="triggerClose" class="mobileMenuTrigger">+</li>';                          

            $after    =     '<li class="mobile-login">
                            <a href="#" data-toggle="modal" data-target="#myModal">
                                Member Login
                            </a>
                        </li>';

            $mm2_options = array(
                'before' => $before,
                'after' => $after
            );
            mobile_menu($mm2_options);
        ?>

           <!-- Start of Member Login Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Member Log In</h4>
              </div>
              <div class="modal-body">
                <? echo log_in_form($log_in_options_array); ?>
              </div>
            </div>
          </div>
        </div><!-- End of Member Login Modal -->
   
   
    <? echo mobile_menu($option_array); ?>

   
   
    <div class="container">   
       <div class="row">  
        
           <div class="header">
             <div class="row">  
              <div class="col col-xs-2 col-sm-2 col-md-2 logo">   
                
                <a href="<?=$base;?>" alt="" class="bc-mobile">
                <?php readfile('images/ncadsa_1Line.svg');?>
                </a>
               </div><!-- /.col2-->
               <div class="col col-xs-10 col-sm-10 col-md-10">  
                   <p>
                       Promoting the availability, accessibility, cost effectiveness and quality of adult day services in North Carolina
                   </p>
                </div><!-- /.col8-->
               </div><!-- /.row -->
           </div><!-- /.header -->
           
            <div id="main-menu">
                <div class="hidden-xs	hidden-sm">
                <? echo quick_menu(); ?>
                </div>

               <div id="mobile-menu-col">

                    <div id="mobile-toggle" class="mobileMenuTrigger hidden-md hidden-lg">
                        <?php readfile('images/menu.svg');?>
                    </div>
                </div><!-- end of #mobile-menu-col --> 

            </div><!-- /.main-menu -->
            

        </div><!-- /.row -->
    </div><!-- /.container -->    
</header><!-- /header -->



    
        
        
        <?php

/* The next section deals with titles on sub pages */
// Keep in mind that any divs started in this block of code must be closed in the footer

	if($home!='Y' AND $_GET['mms']!='X'){
		echo '<div class="container main-content">   
                <div class="row">  
				    <div class="col-md-12 subpages">
					<h1 class="title">'.$title.'</h1>'; 
	}
?>
        
       
