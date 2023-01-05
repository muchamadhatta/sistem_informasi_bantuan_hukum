<!--==========================
      More Features Section
    ============================-->
<section id="more-features" class="section-bg">
	<div class="container">

		<div class="section-header">
			<h3 class="section-title">Agenda</h3>
			<span class="section-divider"></span>
			<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
				doloremque</p>
		</div>

		<div class="row">
		<?php 
                    foreach($row->result() as $key => $data) { ?>
			<div class="col-md-6">
				<div class="box wow fadeInLeft">
					<div class="icon"><i class="ion-ios-stopwatch-outline"></i></div>
					<h4 class="title"><a href=""><?=$data->judul_agenda?></a></h4>
					<h4 class="title"><a href=""><?=$data->tanggal?></a></h4>
					<p class="description"><?=$data->isi_agenda?></p>
				</div>
			</div>
			<?php } ?>
			

		</div>
	</div>
</section><!-- #more-features -->
