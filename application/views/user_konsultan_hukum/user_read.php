<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Read User</h1>

			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('user_konsultan_hukum')?>">User</a></li>
					<li class="breadcrumb-item active">Read User</li>

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
				<h3 class="card-title">Read User</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="" method="post">
				<div class="card-body">

					<div class="form-group ">
						<label for="InputFullname">Nama Lengkap</label>
						<input type="hidden" name="id_user" value="<?= $row->id_user?>">
						<input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->nama_lengkap?>"
							class="form-control" id="InputFullname">
						<?=form_error('fullname')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Username</label>
						<input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>"
							class="form-control" id="InputUsername">
						<?=form_error('username')?>
					</div>
          <div class="form-group">
						<label for="InputUsername">Spesialisasi</label>
						<input type="text" name="spesialisasi" value="<?=$this->input->post('spesialisasi') ?? $row->spesialisasi?>"
							class="form-control" id="InputUsername">
						<?=form_error('spesialisasi')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Alamat</label>
						<input type="text" name="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat?>"
							class="form-control" id="InputAlamat" placeholder="Input Alamat">
						<?=form_error('alamat')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Email</label>
						<input type="email" name="email" value="<?=$this->input->post('email') ?? $row->email?>"
							class="form-control" id="InputAlamat" placeholder="Input Email">
						<?=form_error('email')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Pengalaman</label>
						<input type="text" name="pengalaman" value="<?=$this->input->post('pengalaman') ?? $row->pengalaman?>"
							class="form-control" id="InputAlamat" placeholder="Input Pengalaman">
						<?=form_error('pengalaman')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Gelar</label>
						<input type="text" name="gelar" value="<?=$this->input->post('gelar') ?? $row->gelar?>" class="form-control"
							id="InputAlamat" placeholder="Input gelar">
						<?=form_error('gelar')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Kampus</label>
						<input type="text" name="kampus" value="<?=$this->input->post('kampus') ?? $row->kampus?>"
							class="form-control" id="InputAlamat" placeholder="Input Kampus">
						<?=form_error('kampus')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Tanggal Lahir</label>
						<input type="date" name="tanggal_lahir"
							value="<?=$this->input->post('tanggal_lahir') ?? $row->tanggal_lahir?>" class="form-control"
							id="InputAlamat" placeholder="Input Tanggal Lahir">
						<?=form_error('tanggal_lahir')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Keahlian</label>
						<input type="text" name="keahlian" value="<?=$this->input->post('keahlian') ?? $row->keahlian?>"
							class="form-control" id="InputAlamat" placeholder="Input Keahlian">
						<?=form_error('keahlian')?>
					</div>
					<div class="form-group">
						<label for="InputUsername">Telepon</label>
						<input type="number" name="telepon" value="<?=$this->input->post('telepon') ?? $row->telepon?>"
							class="form-control" id="InputTelepon" placeholder="Input Telepon">
						<?=form_error('telepon')?>
					</div>
					<!-- /.card-body -->


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
