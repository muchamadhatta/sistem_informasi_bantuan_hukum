<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Telepon</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Telepon</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i ></i> Konsultasi via Telepon:</h5>
              Mudah dan efektif. Temukan solusi permasalahan hukum Anda bersama konsultan hukum kami melalui telepon.
            </div>

            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="fas fa-phone"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mulai Konsultasi Via Telepon</span>
             

                <div class="progress">
                  <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">
                <?php $no = 1;
                    foreach($row->result() as $key => $data) { ?>
                    <tr>
                      <td><?=$no++?>.</td>
                      <td><?=$data->telepon?><br></td>
                    </tr>
                    <?php } ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- Main content -->

            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>


    