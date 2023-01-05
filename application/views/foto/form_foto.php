<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Foto</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('foto')?>">Foto</a></li>
					<li class="breadcrumb-item active"><?=ucfirst($page)?> Foto</li>
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
				<h3 class="card-title"><?=ucfirst($page)?> Foto</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('foto/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<input type="hidden" name="id" value="<?=$row->id_foto?>">
					</div>

					<div class="form-group">
						<label>Album</label>
						<select name="album" class="form-control">
							<?php $album =  $row->id_album ?>
							<option value="" ></option>
							<option value="1" <?= $album == '1' ? 'selected' : null ?>>Foto</option>
							<option value="2" <?= $album == '2' ? 'selected' : null ?>>Gambar</option>
							<option value="3" <?= $album == '3' ? 'selected' : null ?>>Lain-Lain</option>
						</select>
					</div>
					<div class="form-group">
						<label for="UploadGamber">Upload Foto</label>
						<?php if($page == 'update') {
							if($row->image != null) {
								?>
								<div style="margin-bottom:5px"> <img src="<?=base_url('uploads/foto/'.$row->image)?>" style="width:50px">
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
