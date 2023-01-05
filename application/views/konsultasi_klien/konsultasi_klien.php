<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Konsultasi Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active">Konsultasi Hukum</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->

</section>

<!-- Main content -->
<section class="content">
	<?php $this->view('massages')  ?>

	<!-- /.card -->
	<div class="card">
		<div class="card-header">
			<div class="float-sm-right">
				<a href="<?=site_url('konsultasi_user/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-plus"></i> Saya Ingin Konsultasi
				</a>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body p-0 table-responsive">
			<table class="table table-striped" id="table1">
				<thead>
					<tr>
						<th style="width: 10px">No</th>
						<th>Nama Lengkap</th>
						<th>Jenis Masalah</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->nama_lengkap?></td>
						<td><?=$data->jenis_masalah?></td>
						<td><?=$data->status?></td>
						<td>
							<form action="<?=site_url('konsultasi/del/')?>" method="post">
								<ul class="fc-color-picker">
								<li><a class="btn btn-success btn-xs" data-toggle="tooltip" title="Penilaian"
											href="<?=site_url('tanggapan/penilaian/'.$data->id_konsultasi)?>"><i
												class="fa fa-star"></i></a></li>

									<li><a class="btn btn-warning btn-xs" data-toggle="tooltip" title="Tanggapan"
											href="<?=site_url('tanggapan/balas/'.$data->id_konsultasi)?>"><i
												class="fa fa-comments"></i></a></li>
									<li><a class="btn btn-primary btn-xs" data-toggle="tooltip" title="Update"
											href="<?=site_url('konsultasi_user/update/'.$data->id_konsultasi)?>"><i
												class="fa fa-pen"></i></a></li>


									<?php if ($data->status == "Ditangani"): ?>
									<li><a class="btn btn-danger btn-xs" data-toggle="tooltip" title="Jadwal"
											href="<?=site_url('jadwal/pertemuan/'.$data->id_konsultasi)?>"><i
												class="fa fa-calendar-plus"></i></a></li>
									<?php endif; ?>

								</ul>
							</form>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
	</div>
	<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
