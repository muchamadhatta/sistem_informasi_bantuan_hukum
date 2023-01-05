<!--==========================
      More Features Section
    ============================-->
<section id="more-features" class="section-bg">
	<div class="container">

		<div class="section-header">
			<h3 class="section-title">Register</h3>
			<span class="section-divider"></span>
			<p class="section-description">To create an account, we need you information. Your information will be keep confidential. It takes two minute to register! </p>
		</div>

		<div class="row">

			<div class="col-lg-12">
				<div class="box wow fadeInLeft">
					<section class="content-header">
						<div class="container-fluid">
							<div class="row mb-2">
								<div class="col-sm-6">
									<h1></h1>
								</div>
								<div class="col-sm-6">

								</div>
							</div>
						</div><!-- /.container-fluid -->
					</section>
					<!-- Main content -->
					<section class="content">
						<?php $this->view('massages')  ?>

						<!-- general form elements -->
						<div class="col col-md-12">
							<div class="card card-success">
								<div class="card-header">
									<h3 class="card-title">Form Register</h3>
								</div>
								<!-- /.card-header -->
								<!-- form start -->
								<?php echo form_open_multipart('page_register/process') ?>
								<div class="card-body">
									<div class="form-group ">
										<input type="hidden" name="id_user" value="">
										<input type="hidden" name="id_klien" value="">
										<input type="hidden" name="level" value="klien">
										<label for="InputFullname">Nama Lengkap</label>
										<input type="text" name="fullname" value="" class="form-control"
											id="InputFullname" placeholder="Masukan Nama Lengkap Anda">
										<?=form_error('fullname')?>
									</div>
									<div class="form-group">
										<label for="InputUsername">Email</label>
										<input type="email" name="username" value="" class="form-control"
											id="InputUsername" placeholder="Masukan Email Yang Anda Gunakan">
										<?=form_error('username')?>
									</div>
									<div class="form-group">
										<label for="InputUsername">Tanggal Lahir</label>
										<input type="date" name="tanggal_lahir" value="" class="form-control"
											id="InputAlamat" placeholder="Masukan Tanggal Lahir Anda">
										<?=form_error('tanggal_lahir')?>
									</div>
									<div class="form-group">
										<label for="InputUsername">Telepon</label>
										<input type="number" name="telepon" value="" class="form-control"
											id="InputTelepon" placeholder="Masukan Nomor Telepon">
										<?=form_error('telepon')?>
									</div>
									<div class="form-group">
										<label for="InputUsername">Alamat</label>
										<input type="text" name="alamat" value="" class="form-control" id="InputAlamat"
											placeholder="Masukan Alamat Lengkap Anda">
										<?=form_error('alamat')?>
									</div>
									<div class="form-group">
										<label for="InputPassword">Password</label>
										<input type="password" name="password" value="" class="form-control"
											id="exampleInputPassword1" placeholder="Password">
										<?=form_error('password')?>
									</div>
									<div class="form-group">
										<label for="InputPasconf">Password Confirmation</label>
										<input type="password" name="pasconf" value="" class="form-control"
											id="exampleInputPassword1" placeholder="Password Confirmation">
										<?=form_error('pasconf')?>
									</div>
									
									<div class="form-group">
										<label for="InputUsername">Foto Profil</label>

										<input type="file" name="image" class="form-control" required>
										<?=form_error('alamat')?>
									</div>
									<!-- /.card-body -->
									<div class="card-footer">
										<button type="submit" name="<?=$page?>" class="btn btn-success">
											<i class="fa fa-paper-plane"></i> Daftar
										</button>
										<button type="reset" class="btn btn-secondary">Reset</button>
									</div>
									<?php echo form_close() ?>
								</div>
								<!-- /.card -->
							</div>
						</div>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
</div>
</div>



</div>
</div>
</section><!-- #more-features -->
