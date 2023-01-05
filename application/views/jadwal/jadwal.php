<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Jadwal Pertemuan</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active">Jadwal Pertemuan</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->

</section>

<?php 
                    foreach($row->result() as $key => $data) { ?>
<!-- Main content -->
<section class="content">
<?php $this->view('massages')  ?>
	<!-- general form elements -->
	<div class="col col-md-12">

		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title">Jadwal Pertemuan</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart('jadwal/process') ?>
				<div class="card-body">
					<div class="form-group ">
						<label for="InputJudul">Alamat Pertemuan</label>
						<input type="hidden" name="id2" value="<?=$data->id_konsultasi?>">
					
						<input type="text" name="alamat_pertemuan" value="<?=$data->alamat_pertemuan?>" class="form-control"
							id="InputJudul" required>
					</div>
					<div class="form-group">
						<label for="InputStatus">Jam</label>
						<input type="time" name="jam" value="<?=$data->jam?>" class="form-control"
							id="InputStatus">
					</div>
					<div class="form-group">
						<label for="InputUsername">Tanggal</label>
						<input type="date" name="tanggal" value="<?=$data->tanggal?>" class="form-control" id="InputAlamat"
							placeholder="Input Tanggal Lahir">
					</div>


					<div class="form-group">
						<label for="InputUsername"></label>
						<input type="hidden" name="hasil_pertemuan" value="<?=$data->hasil_pertemuan?>" class="form-control" id="InputAlamat"
							placeholder="Input Tanggal Lahir">
					</div>
			
					<div class="form-group">
						<label for="InputUsername"></label>
						<input type="hidden" name="keterangan" value="<?=$data->keterangan?>" class="form-control" id="InputAlamat"
							placeholder="Input Tanggal Lahir">
					</div>
					<div class="form-group">
						<label for="InputUsername"></label>
						<input type="hidden" name="status" value="<?=$data->status?>" class="form-control" id="InputAlamat"
							placeholder="Input Tanggal Lahir">
					</div>
					<!-- /.card-body -->
					<div class="card-footer">
						<button type="submit" name="update" class="btn btn-success">
							<i class="fa fa-paper-plane"></i> Save
						</button>
						
					</div>
			<?php echo form_close() ?>
			
		</div>
		<!-- /.card -->
	</div>

	
	





		<div class="card card-success">
			<div class="card-header">
				<h3 class="card-title"> Hasil Pertemuan</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart() ?>
			<div class="card-body">
				<div class="form-group ">
					<div class="box-body table-responsive">
						<table class="table table-striped" id="table1">
							<tr>
								<th>Hasil Pertemuan </th>
								<th> : </th>
								<td><?=$data->hasil_pertemuan?></td>
							</tr>
							<tr>
								<th>Keterangan </th>
								<th> : </th>
								<td><?=$data->keterangan?></td>
							</tr>
							<tr>
								<th>Status </th>
								<th> : </th>
								<td><?=$data->status?></td>
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



<?php } ?>


