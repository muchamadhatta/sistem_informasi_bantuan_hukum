<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Artikel</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('artikel')?>">Artikel</a></li>
					<li class="breadcrumb-item active">Detail Artikel</li>
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
				<h3 class="card-title"> Detail Artikel</h3>
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
								<td><?= $row->judul_artikel?></td>
							</tr>
							
							<tr>
								<th>Isi Artikel </th>
								<th> : </th>
								<td><?= $row->isi_artikel?></td>
							</tr>
							<tr>
								<th>Gambar Artikel </th>
								<th> : </th>
								<td>
									<?php if($row->image != null) { ?>

									<img src="<?=base_url('uploads/artikel/'.$row->image)?>"
										style="width:100px">

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
