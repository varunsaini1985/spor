<?php include("../config/function.php"); ?><!-- include function having sesssion script -->
<?php if(!empty($_SESSION['register_id'])){ header('location: profile.php'); }else{ } ?><!-- setting up session with register_id as session key -->
<?php _loginheader(); ?><!-- header file include -->
<?php _validation();?><!--form validation -->

	
	<div class="jumbotron">	
	<div class="container">
	<h1 class="title-big">CREATE FREE ACCOUNT</h1>
	<div class="row center-block">
    	<div class="col-lg-4 col-lg-push-4 col-md-6 col-md-push-3 col-sm-6 col-sm-push-3 col-xs-12 customlogin center-block" style="text-align:center"><img src="../images/sporfield-login.png" style="text-align:center" class="img-responsive center-block"></div>
    </div>	
	<div class="clear-20"></div>
    
    <div class="row">
    	<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">	
	
	<form role="form">
	<div class="form-group" style="position:relative">
	<img src="../images/i_verified-input.png" class="customimg">
    <label for="" class="custompla">What are you?</label>
    <select class="form-control customselectbox">
	  <option value="player">Player</option>
	  <option value="inter">Intermediary</option>
	  <option value="scout">Scout</option>
	  <option value="club">Club</option>
	  <option value="academy">Academy</option>
	  </select>
	  </div>	
	</form>
	<div class="clear-20"></div>
    <div id="explainBox" style="position: relative; background: #e5e5e5; padding: 10px; padding-bottom: 10px; border-radius: 3px; text-align: left; color: #888888; margin-top: -5px; display: none;">
						<div style="width: 0; height: 0; border-left: 10px solid transparent; border-right: 10px solid transparent; border-bottom: 10px solid #e5e5e5; position: absolute; bottom: 100%; left: 40px; margin-left: -10px;"></div>
						<span style="font-family: Oswald; font-size: 20px; line-height: 1; text-shadow: 1px 1px 0px rgba(255,255,255,.5); vertical-align: middle;">30-DAYS <span>free trial</span></span>
						<div style=" font-size: 13px; line-height: 1; vertical-align: bottom; margin-top: 5px;">No obligation - No hidden cost - No credit card required</div>
					</div>
	<div class="clear-20"></div>
	<div class="clear-20"></div>
	</div>
	</div>
    
    	
	<div class="row" id="sign_up">
    	<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
          <button type="button" class="btn btn-info btn-facebook btn-xl"><i class="fa fa-facebook facebook-icon" aria-hidden="true"></i> Login with Facebook </button>
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
          <button type="button" class="btn btn-info btn-linkedin btn-xl"><i class="fa fa-linkedin facebook-icon" aria-hidden="true"></i> Login with linkedin </button>
        </div>
    </div>
	<div class="row">
    	<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
			<div class="or-separator-h">
				<span>OR</span>
			</div>
		</div>
    </div>
	<div class="row">
    	<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
        <form role="form">
        <div class="form-group">
        <label for class="label-big">First Name</label>
        <input type="email" class="form-control controlinput" >
        </div>
        <div class="form-group">
        <label for class="label-big">Last Name</label>
        <input type="email" class="form-control controlinput" >
        </div>
        
        <div class="form-group">
        <label for class="label-big">YOUR EMAIL</label>
        <input type="email" class="form-control controlinput" >
		</div>
		<div class="form-group">
    	<label for class="label-big">CREATE YOUR PASSWORD</label>
        <input type="password" class="form-control controlinput">
        </div>  
        <button type="button" class="btn btn-info btn-action btn-xl">Create Account *</button>		
        </form>
      </div>
	</div>
    
    
	<div class="row">
    	<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-8 col-sm-push-2 col-xs-12">
          <p class="center txt-small">
          Already on Sporfield?<a href="">Login</a> 
          </p>
          <p class="center txt-small">
          * By clicking Create account or using sporfield, you are indicating that you have read, understood, and agree to sporfield <a href="#" target="sporfield">Terms of Use</a> and <a href="#" target="sporfield">Privacy Policy</a>
          </p>
        </div>
    </div>
	<div class="customclear"></div>
	</div>
	</div>	
	<?php _ajaxsubmit(); ?>
	<?php //_globalfile();?>
	<?php _loginfooter(); ?>