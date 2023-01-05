<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BHF | Forgot Password</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background: linear-gradient(45deg, #1de099, #1dc8cd);">
	<div class="login-box">
		<div class="login-logo">
			<a href="<?=base_url()?>assets/index2.html"><b>Forgot Password</b>BHF</a>
		</div>
		<!-- /.login-logo -->
		<div class="card">
			<div class="card-body login-card-body">
                <p class="login-box-msg">Forgot Your Password ?</p>
                

				<form action="<?=site_url('#')?>" method="post">
                <div class="input-group mb-3">
						<input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap" required
							autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
                <div class="input-group mb-3">
						<input type="text" name="email" class="form-control" placeholder="Masukan Email" required
							autofocus>
						<div class="input-group-append">
							<div class="input-group-text">
								<span class="fas fa-envelope"></span>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-3">
							
						</div>
						<!-- /.col -->
						<div class="col-6">
							<button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Reset Password</button>
						</div>
						<!-- /.col -->
					</div>
                </form>
                
                <p class="login-box-msg">
                    <br>
                Silahkan masukan Nama Lengkap dan Alamat e-mail Anda, 
                kami akan mengirimkan password baru Anda melalui e-mail.           
                </p>
				
			</div>
			<!-- /.login-card-body -->
		</div>
	</div>
	<!-- /.login-box -->

	<!-- jQuery -->
	<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?=base_url()?>assets/dist/js/adminlte.min.js"></script>

</body>

</html>
