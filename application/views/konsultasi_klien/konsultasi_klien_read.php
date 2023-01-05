<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Konsultasi Hukum</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="<?=site_url('konsultasi')?>">Konsultasi Hukum</a></li>
					<li class="breadcrumb-item active">Konsultasi Hukum</li>
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
				<h3 class="card-title"> Detail Konsultasi Hukum</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<?php echo form_open_multipart() ?>
			<div class="card-body">
				<div class="form-group ">
					<div class="box-body table-responsive">
						<table class="table table-striped" id="table1">
							<tr>
								<th>Nama Lengkap </th>
								<th> : </th>
								<td><?= $row->nama_lengkap?></td>
							</tr>
							<tr>
								<th>Agama </th>
								<th> : </th>
								<td><?= $row->agama?></td>
							</tr>
							<tr>
								<th>Alamat </th>
								<th> : </th>
								<td><?= $row->alamat?></td>
							</tr>
							<tr>
								<th>Kelurahan </th>
								<th> : </th>
								<td><?= $row->kelurahan?></td>
							</tr>
							<tr>
								<th>Kota </th>
								<th> : </th>
								<td><?= $row->kota?></td>
							</tr>
							<tr>
								<th>Kebangsaan </th>
								<th> : </th>
								<td><?= $row->kebangsaan?></td>
							</tr>
							<tr>
								<th>Umur </th>
								<th> : </th>
								<td><?= $row->umur?></td>
							</tr>
							<tr>
								<th>Jenis Kelamin </th>
								<th> : </th>
								<td><?= $row->jenis_kelamin?></td>
							</tr>
							<tr>
								<th>Status Perkawinan </th>
								<th> : </th>
								<td><?= $row->status_perkawinan?></td>
							</tr>
							<tr>
								<th>Pendidikan </th>
								<th> : </th>
								<td><?= $row->pendidikan?></td>
							</tr>
							<tr>
								<th>Pekerjaan </th>
								<th> : </th>
								<td><?= $row->pekerjaan?></td>
							</tr>
							<tr>
								<th>Rata Rata Pengeluaran </th>
								<th> : </th>
								<td><?= $row->rata_rata_pengeluaran?></td>
							</tr>
							<tr>
								<th>Jumlah Tanggungan </th>
								<th> : </th>
								<td><?= $row->jumlah_tanggungan?></td>
							</tr>
							<tr>
								<th>Jenis Masalah </th>
								<th> : </th>
								<td><?= $row->jenis_masalah?></td>
							</tr>
							<tr>
								<th>Masalah Kasus </th>
								<th> : </th>
								<td><?= $row->masalah_kasus?></td>
							</tr>
							<tr>
								<th>Penanganan </th>
								<th> : </th>
								<td><?= $row->penanganan?></td>
							</tr>
							<tr>
								<th>Status </th>
								<th> : </th>
								<td><?= $row->status?></td>
							</tr>
						</table>
					</div>
				</div>
				<!-- /.card-body -->
				<?php echo form_close() ?>
			</div>


			<!-- /.card -->
		</div>
		<div class="card direct-chat direct-chat-primary" style="position: relative; left: 0px; top: 0px;">
			<div class="card-header ui-sortable-handle" style="cursor: move;">
				<h3 class="card-title">Direct Chat</h3>

				<div class="card-tools">
					<span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
					<button type="button" class="btn btn-tool" data-card-widget="collapse">
						<i class="fas fa-minus"></i>
					</button>
					<button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
						data-widget="chat-pane-toggle">
						<i class="fas fa-comments"></i>
					</button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
					</button>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<!-- Conversations are loaded here -->
				<div class="direct-chat-messages">
					<!-- Message. Default to the left -->
					<div class="direct-chat-msg">
						<div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-left">Alexander Pierce</span>
							<span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
						</div>
						<!-- /.direct-chat-infos -->
						<img class="direct-chat-img" src="<?=base_url()?>assets/dist/img/user1-128x128.jpg"
							alt="message user image">
						<!-- /.direct-chat-img -->
						<div class="direct-chat-text">
							Is this template really for free? That's unbelievable!
						</div>
						<!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					<!-- Message to the right -->
					<div class="direct-chat-msg right">
						<div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-right">Sarah Bullock</span>
							<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
						</div>
						<!-- /.direct-chat-infos -->
						<img class="direct-chat-img" src="<?=base_url()?>assets/dist/img/user1-128x128.jpg"
							alt="message user image">
						<!-- /.direct-chat-img -->
						<div class="direct-chat-text">
							You better believe it!
						</div>
						<!-- /.direct-chat-text -->
					</div>
					<!-- /.direct-chat-msg -->

					

					

				</div>
				<!--/.direct-chat-messages-->

				<!-- Contacts are loaded here -->
				<div class="direct-chat-contacts">
					<ul class="contacts-list">
						<li>
							<a href="#">
								<img class="contacts-list-img" src="<?=base_url()?>assets/dist/img/user1-128x128.jpg">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										Count Dracula
										<small class="contacts-list-date float-right">2/28/2015</small>
									</span>
									<span class="contacts-list-msg">How have you been? I was...</span>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						<!-- End Contact Item -->
						<li>
							<a href="#">
								<img class="contacts-list-img" src="<?=base_url()?>assets/dist/img/user7-128x128.jpg">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										Sarah Doe
										<small class="contacts-list-date float-right">2/23/2015</small>
									</span>
									<span class="contacts-list-msg">I will be waiting for...</span>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						<!-- End Contact Item -->
						<li>
							<a href="#">
								<img class="contacts-list-img" src="<?=base_url()?>assets/dist/img/user3-128x128.jpg">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										Nadia Jolie
										<small class="contacts-list-date float-right">2/20/2015</small>
									</span>
									<span class="contacts-list-msg">I'll call you back at...</span>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						<!-- End Contact Item -->
						<li>
							<a href="#">
								<img class="contacts-list-img" src="<?=base_url()?>assets/dist/img/user5-128x128.jpg">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										Nora S. Vans
										<small class="contacts-list-date float-right">2/10/2015</small>
									</span>
									<span class="contacts-list-msg">Where is your new...</span>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						<!-- End Contact Item -->
						<li>
							<a href="#">
								<img class="contacts-list-img" src="<?=base_url()?>assets/dist/img/user6-128x128.jpg">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										John K.
										<small class="contacts-list-date float-right">1/27/2015</small>
									</span>
									<span class="contacts-list-msg">Can I take a look at...</span>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						<!-- End Contact Item -->
						<li>
							<a href="#">
								<img class="contacts-list-img" src="<?=base_url()?>assets/dist/img/user8-128x128.jpg">

								<div class="contacts-list-info">
									<span class="contacts-list-name">
										Kenneth M.
										<small class="contacts-list-date float-right">1/4/2015</small>
									</span>
									<span class="contacts-list-msg">Never mind I found...</span>
								</div>
								<!-- /.contacts-list-info -->
							</a>
						</li>
						<!-- End Contact Item -->
					</ul>
					<!-- /.contacts-list -->
				</div>
				<!-- /.direct-chat-pane -->
			</div>
			<!-- /.card-body -->
			<div class="card-footer">
				<form action="#" method="post">
					<div class="input-group">
						<input type="text" name="message" placeholder="Type Message ..." class="form-control">
						<span class="input-group-append">
							<button type="button" class="btn btn-primary">Send</button>
						</span>
					</div>
				</form>
			</div>
			<!-- /.card-footer-->
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
