<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Agenda</h1>
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
				<h3 class="card-title">Form Agenda</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('agenda/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<label for="InputJudul">Judul Agenda</label>
						<input type="hidden" name="id" value="<?=$row->id_agenda?>">
						<input type="hidden" name="status" value="Dibuat">
						<input type="text" name="judul_agenda" value="<?=$row->judul_agenda?>" class="form-control"
							id="InputJudul" required>
					</div>
					<div class="form-group">
						<label for="InputStatus">Isi Agenda</label>
						<textarea type="text" name="isi_agenda" rows="4" value="" class="form-control"
							id="InputStatus" placeholder="tulis agenda ..."><?=$row->isi_agenda ?></textarea>
					</div>
					<div class="form-group">
						<label for="InputUsername">Tanggal Agenda</label>
						<input type="date" name="tanggal" value="<?=$row->tanggal?>" class="form-control" id="InputAlamat">
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" name="<?=$page?>" class="btn btn-success">
							<i class="fa fa-paper-plane"></i> Kirim
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
