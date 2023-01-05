<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Produk Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('produk_hukum')?>">Produk Hukum</a></li>
					<li class="breadcrumb-item active">Detail Produk Hukum</li>
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
				<h3 class="card-title"> Detail Produk Hukum</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart() ?>
			<div class="card-body">
				<div class="form-group ">
					<div class="box-body table-responsive">
						<table class="table table-striped" id="table1">
							<tr>
								<th>Judul </th>
								<th> : </th>
								<td><?= $row->judul_produk_hukum?></td>
							</tr>
							<tr>
								<th>Jenis Keputusan </th>
								<th> : </th>
								<td><?= $row->jenis_keputusan?></td>
							</tr>
							<tr>
								<th>Nomor </th>
								<th> : </th>
								<td><?= $row->nomor?></td>
							</tr>
							<tr>
								<th>Tahun </th>
								<th> : </th>
								<td><?= $row->tahun?></td>
							</tr>
							<tr>
								<th>Tentang </th>
								<th> : </th>
								<td><?= $row->tentang?></td>
							</tr>
							<tr>
								<th>Tanggal Perundangan </th>
								<th> : </th>
								<td><?= $row->tanggal_perundangan?></td>
							</tr>
							<tr>
								<th>Status </th>
								<th> : </th>
								<td><?= $row->status?></td>
							</tr>
							<tr>
								<th>Foto </th>
								<th> : </th>
								<td>
									<?php if($row->file_upload != null) { ?>

									<img src="<?=base_url('uploads/produk_hukum/'.$row->file_upload)?>"
										style="width:100px">

									<?php } ?>


									<!-- <?php if ($berita->foto): ?>
												<img src="<?= base_url('assets/berita/').$berita->foto ?>"
													class="img img-responsive img-thumbnail" style="width: 200px; height: 200px;">
												<?php else: ?>
												<i class="text-success">-- Tidak Ada Foto --</i>
                        <?php endif ?> -->
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
