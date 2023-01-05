<!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Gallery</h3>
          <span class="section-divider"></span>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque</p>
        </div>

        <div class="row no-gutters">

        <?php 
                    foreach($row->result() as $key => $data) { ?>
        <div class="col-lg-4 col-md-6">
            <div class="gallery-item wow fadeInUp">
              <a href="<?=base_url('uploads/foto/'.$data->image)?>" class="gallery-popup">
                <img src="<?=base_url('uploads/foto/'.$data->image)?>" style="width:500px; height:500px" alt="">
              </a>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- #gallery -->