<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Konsultan Hukum</h1>
			</div>
			<div class="col-sm-6">

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
				<h3 class="card-title">Memilih Konsultasi Hukum</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('konsultasi/process') ?>
			<input type="hidden" name="id" value="<?=$data->id_konsultasi?>">
			<input type="hidden" name="status" value="Ditangani">
<br>

<div class="container">
			<div class="row">
			<?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
<div class="col-md-3">
			<div class="card" style="width: 15rem;">
				<img src="<?=base_url('uploads/foto_profil/'.$data->image)?>"class="card-img-top" alt="...">
				<div class="card-body">
					<h4 class="card-title"><?=$data->nama_lengkap?></h4>
					
				</div>
				<ul class="list-group list-group-flush">
				<li class="list-group-item"><?=$data->spesialisasi?></li>
					<li class="list-group-item"><?=$data->keahlian?></li>
					<li class="list-group-item"><?=$data->telepon?></li>
				</ul>
				
			


			</div>
			</div>

			<?php } ?>&nbsp;
			</div>
			</div>
			<!-- /.card-body -->

			
			<div class="form-group">
			
						<label>&nbsp; Pilih Konsultan Hukum</label>
						<select name="ditanganioleh" class="form-control">
						<?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
							
							<option value="<?=$data->id_user?>"> <?=$data->nama_lengkap?></option>

							<?php } ?>
						</select>
					</div>

			<div class="card-footer">
				<button type="submit" name="pilihkonsultan" class="btn btn-success">
					<i class="fa fa-paper-plane"></i> Save
				</button>
				<button type="reset" class="btn btn-secondary">Batal</button>
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
