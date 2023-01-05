<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Konsultan Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('user_konsultan_hukum')?>">Konsultan Hukum</a></li>
					<li class="breadcrumb-item active">Detail Konsultan Hukum</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


<section class="content">

	<!-- general form elements -->
	<div class="col col-md-12">

		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title"> Detail User Konsultan Hukum</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart() ?>
			<div class="card-body">
				<div class="form-group ">
					<div class="box-body table-responsive">
						<table class="table table-striped" id="table1">
							<tr>
								<th>Nama Lengkap </th>
								<th> : </th>
								<td><?= $row->nama_lengkap?></td>
							</tr>
							<tr>
								<th>Username </th>
								<th> : </th>
								<td><?= $row->username?></td>
							</tr>
							<tr>
								<th>Spesialisasi </th>
								<th> : </th>
								<td><?= $row->spesialisasi?></td>
							</tr>
							<tr>
								<th>Alamat </th>
								<th> : </th>
								<td><?= $row->alamat?></td>
							</tr>
							<tr>
								<th>Email </th>
								<th> : </th>
								<td><?= $row->email?></td>
							</tr>
							<tr>
								<th>Pengalaman </th>
								<th> : </th>
								<td><?= $row->pengalaman?></td>
							</tr>
							<tr>
								<th>Gelar </th>
								<th> : </th>
								<td><?= $row->gelar?></td>
							</tr>
							<tr>
								<th>Kampus </th>
								<th> : </th>
								<td><?= $row->kampus?></td>
							</tr>
							<tr>
								<th>Keahlian </th>
								<th> : </th>
								<td><?= $row->keahlian?></td>
							</tr>
							<tr>
								<th>Tanggal Lahir </th>
								<th> : </th>
								<td><?= $row->tanggal_lahir?></td>
							</tr>
							<tr>
								<th>Telepon </th>
								<th> : </th>
								<td><?= $row->telepon?></td>
							</tr>
							<tr>
								<th>Foto Profil </th>
								<th> : </th>
								<td>
									<?php if($row->image != null) { ?>

									<img src="<?=base_url('uploads/foto_profil/'.$row->image)?>" style="width:100px">

									<?php } ?>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<!-- /.card-body -->
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

