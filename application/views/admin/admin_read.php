<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Admin</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('user_admin')?>">Admin</a></li>
					<li class="breadcrumb-item active">Detail Admin</li>
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
				<h3 class="card-title"> Detail User Admin</h3>
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
								<th>Alamat </th>
								<th> : </th>
								<td><?= $row->alamat?></td>
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
