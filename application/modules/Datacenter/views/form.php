<!doctype html>
<?php

	$profil_web = $this->db->get('profil_web')->row();

?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/alertifyjs/css/alertify.min.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/alertifyjs/css/themes/default.min.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo site_url(); ?>assets/alertifyjs/alertify.min.js"></script>

    <title>Administrator</title>
  </head>
  <body style="background-image: url(<?php echo $profil_web->bg; ?>)">
	<div class="container">
			<div class="row" style="margin-top: 100px;">
				<div class="col-md-6 col-sm-12 offset-md-3" style="padding: 0px 95px;">
					<div class="card" style="border-radius: 0">
					  <div class="card-body" style="padding: 21px">
						<?php
							echo $this->session->flashdata('notif');
							echo $this->session->flashdata('audio');
						?>
						<div class="text-center">
							<img src="<?php echo base_url(); ?>assets/image/logo/logo-sumbawa.png" class="img-fluid" alt="logo-sumbawa" style="max-width: 20%" />
						</div>
						<br>

						<form action="" method="post">
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text input-group-text-costum" id="inputGroup-sizing-default"><i class="fa fa-user"></i></span>
						  </div>
						  <input type="text" name="email" class="form-control" placeholder="Email" style="height: 45px">
						</div>
						<div class="input-group mb-3">
						  <div class="input-group-prepend">
							<span class="input-group-text input-group-text-costum" id="inputGroup-sizing-default"><i class="fa fa-lock"></i></span>
						  </div>
						  <input type="password" name="password" class="form-control" placeholder="Password" style="height: 45px">
						</div>
						<table style="margin: 16px 0;">
							<tr>
								<td><input type="text" name="bil1" id="bil1" readonly class="form-control" style="width:50px;height:45px;text-align:center"></span></td>
								<td>+</td>
								<td><input type="text" name="bil2" id="bil2" readonly class="form-control" style="width:50px;height:45px;text-align:center"></td>
								<td>=</td>
								<td><input type="text" name="hasil" class="form-control" style="width:50px;height:45px;text-align:center" required></td>
							</tr>
						</table>
						<div class="input-group mb-3">
							<button type="submit" name="submit" value="login" class="btn btn-block btn-success" style="height: 45px;">LOGIN <i class="fa fa-arrow-alt-circle-right"></i></button>
						</div>
						</form>
					  </div>
					</div>
				</div>
				<script>
					$(function () {
							var a = Math.ceil(Math.random() * 10);
							var b = Math.ceil(Math.random() * 10);
							$("#bil1").attr("value", a);
							$("#bil2").attr("value", b);
				  });
				</script>


				</div>
			</div>
		</div>
	</div>

  </body>
 </html>
