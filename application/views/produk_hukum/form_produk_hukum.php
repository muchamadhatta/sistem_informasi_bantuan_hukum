<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Produk Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('produk_hukum')?>">Produk Hukum</a></li>
					<li class="breadcrumb-item active"><?=ucfirst($page)?> Produk Hukum</li>
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
				<h3 class="card-title"><?=ucfirst($page)?> Produk Hukum</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('produk_hukum/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<label for="InputJudul">Judul</label>
						<input type="hidden" name="id" value="<?=$row->id_produk_hukum?>">
						<input type="text" name="judul" value="<?=$row->judul_produk_hukum ?>" class="form-control"
							id="InputJudul" required>
					</div>

					<div class="form-group">
						<label for="InputJenis">Jenis Keputusan</label>
						<input type="text" name="jenis" value="<?=$row->jenis_keputusan ?>" class="form-control"
							id="InputJenis">
					</div>

					<div class="form-group">
						<label for="InputTahun">Nomor Keputusan</label>
						<input type="text" name="nomor" value="<?=$row->nomor ?>" class="form-control" id="InputTahun">
					</div>

					<div class="form-group">
						<label for="InputTahun">Tentang</label>
						<input type="text" name="tentang" value="<?=$row->tentang ?>" class="form-control"
							id="InputTahun">
					</div>

					<div class="form-group">
						<label for="InputTahun">Tanggal Perundangan</label>
						<input type="date" name="tanggal" value="<?=$row->tanggal_perundangan ?>" class="form-control"
							id="InputTahun">
					</div>

					<div class="form-group">
						<label for="InputTahun">Tahun</label>
						<input type="number" name="tahun" value="<?=$row->tahun ?>" class="form-control"
							id="InputTahun">
					</div>

					<div class="form-group">
						<label for="InputStatus">Status</label>
						<input type="text" name="status" value="<?=$row->status ?>" class="form-control"
							id="InputStatus">
					</div>

					<div class="form-group">
						<label for="UploadFile">Upload File</label>
						<?php if($page == 'update') {
							if($row->file_upload != null) {
								?>
								<div style="margin-bottom:5px"> <img src="<?=base_url('uploads/produk_hukum/'.$row->file_upload)?>" style="width:50px">
								</div>
							<?php 
								} 
							}?>
						<input type="file" name="file_upload" class="form-control" id="InputStatus" required>
					</div>

					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" name="<?=$page?>" class="btn btn-success">
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
