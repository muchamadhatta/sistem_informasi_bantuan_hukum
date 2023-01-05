<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Data Produk Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Dashboard</a></li>
					<li class="breadcrumb-item active">Produk Hukum</li>
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
				<a href="<?=site_url('produk_hukum/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-plus"></i> Create
				</a>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body p-0 table-responsive">
			<table class="table table-striped" id="table1">
				<thead>
					<tr>
						<th style="width: 10px">No</th>
						<th>Judul</th>
						<th>Jenis Keputusan</th>
						<th>Tahun</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->judul_produk_hukum?></td>
						<td><?=$data->jenis_keputusan?></td>
						<td><?=$data->tahun?></td>
						<td><?=$data->status?></td>
						<td>
							<form action="<?=site_url('produk_hukum/del/')?>" method="post">
								<ul class="fc-color-picker">
									<li><a class="btn btn-success btn-xs" data-toggle="tooltip" title="Read"
											href="<?=site_url('produk_hukum/read/'.$data->id_produk_hukum)?>"><i
												class="fa fa-eye"></i></a></li>
									<li><a class="btn btn-primary btn-xs" data-toggle="tooltip" title="Update"
											href="<?=site_url('produk_hukum/update/'.$data->id_produk_hukum)?>"><i
												class="fa fa-pen"></i></a></li>
									<li>
										<input type="hidden" name="id_produk_hukum" value="<?=$data->id_produk_hukum?>">
										<button onclick="return confirm('Apakah Anda Yakin?')"
											class="btn btn-danger btn-xs">
											<i class="fa fa-trash"></i>
										</button>
									</li>
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
