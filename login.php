<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include_once('assets/shared/font.php'); ?>
	<?php include_once('assets/shared/css.php'); ?>
	<!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<div class="sec_1 sec_1_grad" style="height: 100vh;">
  <div class="container">
    <div class="row">
      <div class="col s12 m6 offset-m3" style="margin-top: 5% ">
        <div class="hoverable"  style="padding: 50px;border-radius: 15px;">
          <h4 style="text-align: center;color: white">Login</h4>
          <form action="#" method="POST">
	          	<div class="row">
	          		<div class="input-field col s12">
	              <i class="material-icons prefix">email</i>
	                <input name="email" type="email_field" autofocus class="validate">
	              </div>
	          	</div>
	              <div class="row">
	              	<div class="input-field col s12">
	              <i class="material-icons prefix">vpn_key</i>
	             
	                <input type="password_field" autocomplete="off" class="validate">
	              </div>
	              </div>
	              <div class="row">
	              	<div class="col s12 m12">
		              <button class="btn waves-effect waves-light col s12 m12" type="submit" name="action" style="text-align: center;">Login
		                <i class="material-icons right">lock_open</i>
		              </button>
	              </div>
	              </div>
	              
	              
	            
          </form>
        </div>
            
        </div>
    </div>
  </div>
    
</div>

	<?php include_once('assets/shared/js.php'); ?>
</body>
</html>