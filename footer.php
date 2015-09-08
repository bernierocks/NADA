
<? 
		if($home!='Y' AND $_GET['mms']!='X'){
			echo '
      </div><!-- /.col12-->
    </div><!-- /.row -->
</div><!-- /.main-content -->
'; 
			//end
		}
		?>

<?
// // Keep in mind that any divs started in the header must be closed here.
// if($home!='Y' && $_GET['mms'] != 'X'){ //this IF statement is the test.  If these items evaluate to TRUE, it will perform the first block of code.
	// echo '';//ECHO is PHP's command to output to the page.
// } else { //If the IF statement evaluates to FALSE, this code will be run.  This is optional.

// }
?>

        

<footer>  
   <div class="container">   
    <p>© 2015 North Carolina Adult Day Services Association</p>
    </div><!-- /.container -->
</footer><!-- /footer -->
<script>
        $(".login input[type='submit']").attr('value', 'Log in'); 
        
        $( ".t" ).hover(
          function() {
            $( this ).toggleClass( "open" );
          }
        );
    
    
        $("#mobile-toggle").click(function(){
          $("#mobileMenuWrapper").toggleClass("open");
        });

            $("#triggerClose").click(function(){
          $("#mobileMenuWrapper").removeClass("open");
        });

        $(".mToggle").click(function(){
            $(this).find(".mDropdown").toggleClass("mopen");
        });
        
        
        
</script>