<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Agenda</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('agenda')?>">Agenda</a></li>
					<li class="breadcrumb-item active">Agenda</li>
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
				<h3 class="card-title"> Detail Agenda</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart() ?>
			<div class="card-body">
				<div class="form-group ">
					<div class="box-body table-responsive">
						<table class="table table-striped" id="table1">
							<tr>
								<th>Judul Agenda </th>
								<th> : </th>
								<td><?= $row->judul_agenda?></td>
							</tr>
							<tr>
								<th>Isi Agenda </th>
								<th> : </th>
								<td><?= $row->isi_agenda?></td>
							</tr>
							
							<tr>
								<th>Tanggal Agenda </th>
								<th> : </th>
								<td><?= $row->tanggal?></td>
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
