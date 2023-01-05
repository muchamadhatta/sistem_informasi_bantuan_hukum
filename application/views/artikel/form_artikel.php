<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Artikel</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('artikel')?>">Artikel</a></li>
					<li class="breadcrumb-item active"><?=ucfirst($page)?> Artikel</li>
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
				<h3 class="card-title"><?=ucfirst($page)?> Artikel</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('artikel/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<label for="InputJudul">Judul</label>
						<input type="hidden" name="id" value="<?=$row->id_artikel?>">
						<input type="text" name="judul" value="<?=$row->judul_artikel ?>" class="form-control"
							id="InputJudul" required>
					</div>

					<div class="form-group">
						<label for="InputStatus">Isi Artikel</label>
						<textarea type="text" name="isi_artikel" rows="4"  class="form-control"
							id="InputStatus" placeholder="tulis artikel ..."><?=$row->isi_artikel ?></textarea>
					</div>
					<div class="form-group">
						<label>Kategori</label>
						<select name="kategori" class="form-control">
							<?php $kategori =  $row->id_kategori ?>
							<option value="" ></option>
							<option value="1" <?= $kategori == '1' ? 'selected' : null ?>>Artikel</option>
							<option value="2" <?= $kategori == '2' ? 'selected' : null ?>>Berita</option>
							<option value="3" <?= $kategori == '3' ? 'selected' : null ?>>Lain-Lain</option>
						</select>
					</div>
					<div class="form-group">
						<label for="UploadGamber">Upload Gambar</label>
						<?php if($page == 'update') {
							if($row->image != null) {
								?>
								<div style="margin-bottom:5px"> <img src="<?=base_url('uploads/artikel/'.$row->image)?>" style="width:50px">
								</div>
							<?php 
								} 
							}?>
						<input type="file" name="image" class="form-control" id="InputStatus" required>
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
