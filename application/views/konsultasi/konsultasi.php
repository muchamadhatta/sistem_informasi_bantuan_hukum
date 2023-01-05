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
				<a href="<?=site_url('konsultasi/add')?>" class="btn btn-primary btn-flat">
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


									<li><a class="btn btn-warning btn-xs" data-toggle="tooltip" title="Tanggapan"
											href="<?=site_url('tanggapan/balas/'.$data->id_konsultasi)?>"><i
												class="fa fa-comments"></i></a></li>




									<li><a class="btn btn-success btn-xs" data-toggle="tooltip" title="Read"
											href="<?=site_url('konsultasi/read/'.$data->id_konsultasi)?>"><i
												class="fa fa-eye"></i></a></li>


											
									<li><a class="btn btn-danger btn-xs" data-toggle="tooltip" title="Jadwal"
											href="<?=site_url('jadwal/pertemuan/'.$data->id_konsultasi)?>"><i
												class="fa fa-calendar-plus"></i></a></li>
												
												<?php if ($data->status == "Ditangani"): ?>
									<li><a class="btn btn-warning btn-xs" data-toggle="tooltip" title="Hasil Pertemuan"
											href="<?=site_url('jadwal/hasil_pertemuan/'.$data->id_konsultasi)?>"><i
												class="fa fa-pen-alt"></i></a></li>
												<?php endif; ?>

												
									<?php if ($data->ditanganioleh != $this->fungsi->user_login()->id_user): ?>
									<li><a class="btn btn-primary btn-xs" data-toggle="tooltip" title="Update"
											href="<?=site_url('konsultasi/update/'.$data->id_konsultasi)?>"><i
												class="fa fa-pen"></i></a></li>
									<li>
										<input type="hidden" name="id_konsultasi" value="<?=$data->id_konsultasi?>">
										<button onclick="return confirm('Apakah Anda Yakin?')"
											class="btn btn-danger btn-xs">
											<i class="fa fa-trash"></i>
										</button>
									</li>
									

									<li><a class="btn btn-primary btn-xs" data-toggle="tooltip"
											title="Pilih Konsultan Hukum"
											href="<?=site_url('konsultasi/pilihkonsultan/'.$data->id_user)?>"><i
												class="fa fa-user-friends"></i></a></li>

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
