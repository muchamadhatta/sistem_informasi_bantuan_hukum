<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				</ol>
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
				<h3 class="card-title"> Update Profil</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('konsultan_hukum/process') ?>
				<div class="card-body">
					<div class="form-group ">
					<input type="hidden" name="id_user" value="<?=$row->id_user?>">
					<input type="hidden" name="id_konsultan_hukum" value="<?=$row->id_konsultan_hukum?>">
						<label for="InputFullname">Nama Lengkap</label>
						<input type="text" name="fullname" value="<?=$row->nama_lengkap?>" class="form-control"
							id="InputFullname" placeholder="Enter Fullname" >
						<?=form_error('fullname')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Username</label>
						<input type="text" name="username" value="<?=$row->username?>" class="form-control"
							id="InputUsername" placeholder="Enter Username" >
						<?=form_error('username')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Spesialisasi</label>
						<input type="text" name="spesialisasi" value="<?=$row->spesialisasi?>"
							class="form-control" id="InputAlamat" placeholder="Input Spesialiasi">
						<?=form_error('spesialisasi')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Alamat</label>
						<input type="text" name="alamat" value="<?=$row->alamat?>" class="form-control"
							id="InputAlamat" placeholder="Input Alamat">
						<?=form_error('alamat')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Email</label>
						<input type="email" name="email" value="<?=$row->email?>" class="form-control"
							id="InputAlamat" placeholder="Input Email">
						<?=form_error('email')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Pengalaman</label>
						<input type="text" name="pengalaman" value="<?=$row->pengalaman?>" class="form-control"
							id="InputAlamat" placeholder="Input Pengalaman">
						<?=form_error('pengalaman')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Gelar</label>
						<input type="text" name="gelar" value="<?=$row->gelar?>" class="form-control"
							id="InputAlamat" placeholder="Input gelar">
						<?=form_error('gelar')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Kampus</label>
						<input type="text" name="kampus" value="<?=$row->kampus?>" class="form-control"
							id="InputAlamat" placeholder="Input Kampus">
						<?=form_error('kampus')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir" value="<?=$row->tanggal_lahir?>"
							class="form-control" id="InputAlamat" placeholder="Input Tanggal Lahir">
						<?=form_error('tanggal_lahir')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Keahlian</label>
						<input type="text" name="keahlian" value="<?=$row->keahlian?>" class="form-control"
							id="InputAlamat" placeholder="Input Keahlian">
						<?=form_error('keahlian')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Telepon</label>
						<input type="number" name="telepon" value="<?=$row->telepon?>" class="form-control"
							id="InputTelepon" placeholder="Input Telepon">
						<?=form_error('telepon')?>
					</div>
					<div class="form-group">
						<label for="InputPassword">Password</label><small>(Biarkan Kosong Jika Tidak di Ganti)</small>
						<input type="password" name="password" value="<?=$this->input->post('password')?>" class="form-control"
							id="exampleInputPassword1" placeholder="Password">
						<?=form_error('password')?>
					</div>
					<div class="form-group">
						<label for="InputPasconf">Password Confirmation</label>
						<input type="password" name="pasconf" value="<?=$this->input->post('pasconf')?>" class="form-control"
							id="exampleInputPassword1" placeholder="Password Confirmation">
						<?=form_error('pasconf')?>
					</div>
					<div class="form-group">
						<label>Level</label>
						<select name="level" class="form-control">
							<option value="konsultan_hukum" <?=$row->level == 'konsultan_hukum' ? "selected" : null?>>
								konsultan_hukum</option>
						</select>
						<?=form_error('level')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Foto Profil</label>
						<?php 
							if($row->image != null) {
								?>
								<div style="margin-bottom:5px"> <img src="<?=base_url('uploads/foto_profil/'.$row->image)?>" style="width:50px">
								</div>
							<?php 
								} 
							?>
						
						<input type="file" name="image" class="form-control" required>
						
						<?=form_error('alamat')?>
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" name="profil" class="btn btn-success">
							<i class="fa fa-paper-plane"></i> Save
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
