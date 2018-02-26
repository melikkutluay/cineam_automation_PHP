<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <?php include 'kayit_ol_veri.php';?>
  </head>
  <body>
    <div class="container">
        <div class="row centered-form">
        <div class="col-md-6">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">KAYIT OL</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="<?php $_SERVER['PHP_SELF'];?> " method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="isim" id="isim" class="form-control input-sm" placeholder="İsim">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="soyisim" id="soyisim" class="form-control input-sm" placeholder="Soyisim">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Adres">
			    			</div>

                <div class="form-group">
			    				<input type="tel" name="telefon_no" id="telefon_no" class="form-control input-sm" placeholder="Telefon_No">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="parola" id="parola" class="form-control input-sm" placeholder="Parola">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="parola_tekrar" id="parola_tekrar" class="form-control input-sm" placeholder="Tekrar Parola">
			    					</div>
			    				</div>
			    			</div>
			    			<input type="submit" value="Kayıt Ol" class="btn btn-info btn-block">
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
  </body>
</html>
