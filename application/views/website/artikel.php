<!--==========================
      More Features Section
    ============================-->
<section id="more-features" class="section-bg">
	<div class="container">

		<div class="section-header">
			<h3 class="section-title">Artikel</h3>
			<span class="section-divider"></span>
			<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
				doloremque</p>
		</div>

		<div class="row">

			<?php 
                    foreach($row->result() as $key => $data) { ?>

			<?php } ?>

			<!-- #more-features -->

			<div class="row">
				<div class="col-lg-8 col-12">
					<div class="blog-detail">
						<?php 
						
						
						if ($data->image): ?>
						<img src="<?=base_url('uploads/artikel/'.$data->image)?>"
							class="img img-responsive img-thumbnail" style="width: 1200px; 300px;">
						<?php else: ?>
						<img src="<?= base_url('assets/berita/default.png') ?>" style="width: 100px 100px">
						<?php endif ?>
						<div class="detail-content">
							<div class="blog-info">
								<a href="#"><i class="fa fa-calendar"></i>Tanggal Terbit :
									<?=$data->tanggal_posting?></a>

							</div>
							<h2 class="blog-title"><a href="#"><?=$data->judul_artikel?></a></h2>
							<p><?=$data->isi_artikel?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-12">
					<div class="sidebar">




						<div class="col-lg-12 col-12 ">
							<div class="box wow fadeInRight">
								<h3>Recent Posts</h3>

								<form action="<?= base_url('user/cariBerita') ?>" method="get">

									<div class="form-group">
										<input type="text" class="form-control" name="search" placeholder="Search ..."
											required>
										<button class="button" type="submit"><i class="fa fa-search"></i></button>
									</div>
								</form>

							</div>


						</div>
					</div>





					<?php 
                    foreach($row->result() as $key => $data) { ?>
					<div class="col-lg-12 col-12 ">
						<div class="box wow fadeInRight">
							<div class="icon"><i><img src="<?=base_url('uploads/artikel/'.$data->image)?>"
										style="width:80px"> </i></div>
							<h6 class="title"><a
									href="<?= base_url('page_article/') . url_title($data->judul_artikel, 'dash', TRUE) ?>"><?=$data->judul_artikel?></a>
								<br>
								<i class="fa fa-calendar"></i>Terbit : <?=$data->tanggal_posting?>


							</h6>

						</div>
					</div>
					<?php } ?>


				</div>
			</div>
		</div>
	</div>
	</div>

	<!--/ End Blog Single -->


	</div>
	</div>
</section>
