<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Update User</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('user')?>">User</a></li>
					<li class="breadcrumb-item active">Update User</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
	<!-- general form elements -->
	<div class="col col-md-12">
		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Update User</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="" method="post">
				<div class="card-body">
					<div class="form-group ">
						<label for="InputFullname">Nama Lengkap</label>
						<input type="hidden" name="id_user" value="<?= $row->id_user?>">
						<input type="hidden" name="id_sekretariat" value="<?= $row->id_sekretariat?>">
						<input type="text" name="fullname"
							value="<?=$this->input->post('fullname') ?? $row->nama_lengkap?>" class="form-control"
							id="InputFullname" placeholder="Enter Fullname">
						<?=form_error('fullname')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Username</label>
						<input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>"
							class="form-control" id="InputUsername" placeholder="Enter Username">
						<?=form_error('username')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Telepon</label>
						<input type="text" name="telepon" value="<?=$this->input->post('telepon') ?? $row->telepon?>"
							class="form-control" id="InputTelepon" placeholder="Input Telepon">
						<?=form_error('telepon')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Alamat</label>
						<input type="text" name="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat?>"
							class="form-control" id="InputAlamat" placeholder="Input Alamat">
						<?=form_error('alamat')?>
					</div>
					<div class="form-group">
						<label for="InputPassword">Password</label> <small>(Biarkan Kosong Jika Tidak di Ganti)</small>
						<input type="password" name="password" value="<?=$this->input->post('password')?>"
							class="form-control" id="exampleInputPassword1" placeholder="Password">
						<?=form_error('password')?>
					</div>
					<div class="form-group">
						<label for="InputPasconf">Password Confirmation</label>
						<input type="password" name="pasconf" value="<?=$this->input->post('pasconf')?>"
							class="form-control" id="exampleInputPassword1" placeholder="Password Confirmation">
						<?=form_error('pasconf')?>
					</div>
					<div class="form-group">
						<label>Level</label>
						<select name="level" class="form-control">
							<?php $level = $this->input->post('level') ?? $row->level ?>
							<option value="sekretariat" <?= $level == 'sekretariat' ? 'selected' : null ?>>Sekretariat
							</option>
							
						</select>
						<?=form_error('level')?>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" class="btn btn-success">
							<i class="fa fa-paper-plane"></i> Save
						</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
					</div>
			</form>
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
