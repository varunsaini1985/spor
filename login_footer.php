<!--footer-->
	<div class="container-fluid footer-centered">
	<div class="container">
	<div class="row">
	<div class="col-lg-12">
	<ul class="footerli">
	<li><a href="#">FAQ</a></li>
	<li><a href="#">TERMS AND CONDITIONS</a></li>
	<li><a href="#">HELP</a></li>
	<li><a href="#">PRESS</a></li>
	<li><a href="#">ABOUT US</a></li>
	<li><a href="#">CONTACT US</a></li>
	</ul>
	</div>
	
	<div class="col-lg-12">
	<ul class="footersocial">
	<li><a href="#"><img src="../images/facebook.png"></a></li>
	<li><a href="#"><img src="../images/twitter.png"></a></li>
	<li><a href="#"><img src="../images/pinterest.png"></a></li>	
	</ul>
	</div>	
	 
	<div class="col-lg-12">
	<p class="copyright">Copyright 2016 by Sporfield | All Right Reserved.</p>
	</div>	
	</div>
	</div>
	</div>
	<!--footer-->
	
	<!--modalbox-->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title popuptxt" id="exampleModalLabel">Reset password</h1>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label label-bigfont">Your email</label>
            <input type="text" class="form-control controlinput" id="recipient-name">
          </div>
         
        </form>
      </div>
      <div class="modal-footer modoal-bottom">
        <button type="button" class="btn btn-default btn-secondary pull-left" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-action1" data-dismiss="modal">OK</button>
      </div>
    </div>
	</div>
	</div>
	
	
<!--modalbox-->
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h1 class="modal-title popuptxt" id="exampleModalLabel">Send Confirmation Email</h1>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label label-bigfont">Your email</label>
            <input type="text" class="form-control controlinput" id="recipient-name">
          </div>
         
        </form>
      </div>
      <div class="modal-footer modoal-bottom">
        <button type="button" class="btn btn-default btn-secondary pull-left" data-toggle="modal" data-target="#exampleModal">Cancel</button>
        <button type="button" class="btn btn-primary btn-action1">OK</button>
      </div>
    </div>
  </div>
</div>
<!--box-->
	



	</body>
    <script>
    	$('select').on('change', function(){
			$('body,html').animate({ scrollTop: $('#' + $(this).val()).position().top });
		});
    </script>
    <!---- div hidden script -->
    <script>
	 $('select').change(function() { //on change do stuff
        $('.box').hide(); //hide all with .box class
        $('.' + $(this).val()).show(); //show selected option's respective element
	 });
    </script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</html>