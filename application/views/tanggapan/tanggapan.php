



<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Tanggapan</h1>
			</div>
			<div class="col-sm-6">
				
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>


<section class="content">

	<!-- general form elements -->
	<div class="col col-md-12">

			<!-- /.card -->
		</div>
		<div class="card direct-chat direct-chat-primary" style="position: relative; left: 0px; top: 0px;">
			<div class="card-header ui-sortable-handle" style="cursor: move;">
				<h3 class="card-title">Tanggapan</h3>

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
					<?php 
                    foreach($row->result() as $key => $data) { ?>
					<div class="direct-chat-msg">
						<div class="direct-chat-infos clearfix">
							<!-- <span class="direct-chat-name float-left"><?=$data->id_user?></span> -->
							<span class="direct-chat-name float-left"><?=ucfirst($data->nama_lengkap)?></span>
							<span class="direct-chat-timestamp float-right"><?=$data->tanggal_input?></span>
						</div>
						<!-- /.direct-chat-infos -->
						<!-- <img class="direct-chat-img" src="<?=base_url('uploads/foto_profil/'.$this->fungsi->user_login()->image); ?>"
							alt="message user image"> -->

							<img class="direct-chat-img" src="<?=base_url('uploads/foto_profil/2.png'); ?>"
							alt="message user image">
						<!-- /.direct-chat-img -->
						<div class="direct-chat-text">
						<?=$data->isi_tanggapan?>

					
						</div>
						
						<!-- /.direct-chat-text -->
					</div>
					<?php } ?>
					<!-- /.direct-chat-msg -->
					


		
					<!-- <div class="direct-chat-msg right">
						<div class="direct-chat-infos clearfix">
							<span class="direct-chat-name float-right">Sarah Bullock</span>
							<span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
						</div>
			
						<img class="direct-chat-img" src="<?=base_url()?>assets/dist/img/user1-128x128.jpg"
							alt="message user image">
	
						<div class="direct-chat-text">
							You better believe it!
						</div>

					</div> -->
	

					

					

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
			<?php echo form_open_multipart('tanggapan/process') ?>
					<div class="input-group">
					
					<input type="hidden" name="id2" value="<?=$data->id_konsultasi?>">
						<input type="text" name="isi_tanggapan" placeholder="Type Message ..." class="form-control">
						<span class="input-group-append">
							<button type="submit" name="add" class="btn btn-primary">Send</button>
						</span>
					</div>
					<?php echo form_close() ?>
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






