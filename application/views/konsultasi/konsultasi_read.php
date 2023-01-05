<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Konsultasi Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('konsultasi')?>">Konsultasi Hukum</a></li>
					<li class="breadcrumb-item active">Konsultasi Hukum</li>
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
				<h3 class="card-title"> Detail Konsultasi Hukum</h3>
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
								<th>Agama </th>
								<th> : </th>
								<td><?= $row->agama?></td>
							</tr>
							<tr>
								<th>Alamat </th>
								<th> : </th>
								<td><?= $row->alamat?></td>
							</tr>
							<tr>
								<th>Kelurahan </th>
								<th> : </th>
								<td><?= $row->kelurahan?></td>
							</tr>
							<tr>
								<th>Kota </th>
								<th> : </th>
								<td><?= $row->kota?></td>
							</tr>
							<tr>
								<th>Kebangsaan </th>
								<th> : </th>
								<td><?= $row->kebangsaan?></td>
							</tr>
							<tr>
								<th>Umur </th>
								<th> : </th>
								<td><?= $row->umur?></td>
							</tr>
							<tr>
								<th>Jenis Kelamin </th>
								<th> : </th>
								<td><?= $row->jenis_kelamin?></td>
							</tr>
							<tr>
								<th>Status Perkawinan </th>
								<th> : </th>
								<td><?= $row->status_perkawinan?></td>
							</tr>
							<tr>
								<th>Pendidikan </th>
								<th> : </th>
								<td><?= $row->pendidikan?></td>
							</tr>
							<tr>
								<th>Pekerjaan </th>
								<th> : </th>
								<td><?= $row->pekerjaan?></td>
							</tr>
							<tr>
								<th>Rata Rata Pengeluaran </th>
								<th> : </th>
								<td><?= $row->rata_rata_pengeluaran?></td>
							</tr>
							<tr>
								<th>Jumlah Tanggungan </th>
								<th> : </th>
								<td><?= $row->jumlah_tanggungan?></td>
							</tr>
							<tr>
								<th>Jenis Masalah </th>
								<th> : </th>
								<td><?= $row->jenis_masalah?></td>
							</tr>
							<tr>
								<th>Masalah Kasus </th>
								<th> : </th>
								<td><?= $row->masalah_kasus?></td>
							</tr>
							<tr>
								<th>Penanganan </th>
								<th> : </th>
								<td><?= $row->penanganan?></td>
							</tr>
							<tr>
								<th>Status </th>
								<th> : </th>
								<td><?= $row->status?></td>
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
