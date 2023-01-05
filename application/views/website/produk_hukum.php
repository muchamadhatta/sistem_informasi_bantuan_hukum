<section id="more-features" class="section-bg">
	<div class="container">

		<div class="section-header">
			<h3 class="section-title">Produk Hukum</h3>
			<span class="section-divider"></span>
			<p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
				doloremque</p>
		</div>

		<div class="row">
		<?php 
                    foreach($row->result() as $key => $data) { ?>
			<div class="col-md-6">
				<div class="box wow fadeInLeft">
					<div class="icon"><i class="ion-android-archive"></i></div>
					<h4 class="title"><a><?=$data->judul_produk_hukum?></a></h4>
          <p class="description"><?=$data->nomor?></p>
          <p class="description"><?=$data->status?></p>
          
          <h4 class="description"> <a href="<?=site_url('page_product_of_law/download/'.$data->id_produk_hukum)?>" class="btn btn-success"><i class="fa fa-download"> Unduh Produk Hukum</i></a>
          </h4>
          
				</div>
			</div>
      <?php } ?>
    
			

		</div>
	</div>
</section><!-- #more-features -->