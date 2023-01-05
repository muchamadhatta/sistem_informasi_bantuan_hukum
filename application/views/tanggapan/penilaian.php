<br>
<!-- Main content -->
<section class="content">

	<!-- general form elements -->
	<div class="col col-md-12">

		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Penilaian</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('konsultasi/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<label for="InputJudul">Apakah Anda Puas Dengan Konsultasi?</label>
						<!-- <input type="hidden" name="id" value="">
						<input type="text" name="judul" value="" class="form-control"
							id="InputJudul" required> -->
					</div>
					

					<!-- /.card-body -->

					<div class="card-footer">
						<button type="submit" name="submit" class="btn btn-success">
							<i class="fa fa-star"></i> Ya
						</button>

                        <a class="btn btn-secondary" href="<?=site_url('konsultasi_klien')?>" role="button">Tidak</a>
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
