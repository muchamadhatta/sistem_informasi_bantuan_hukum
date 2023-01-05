<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Read User</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('user_klien')?>">User</a></li>
              <li class="breadcrumb-item active">Read User</li>
             
            </ol>
            
          </div>
          
        </div>
        
      </div><!-- /.container-fluid -->
    
    </section>
    
    <!-- Main content -->
    <section class="content">

<!-- general form elements -->
<div class="col col-md-12">

            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Read User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post">
                <div class="card-body">

                <div class="form-group " >
                    <label for="InputFullname">Nama Lengkap</label>
                    <input type="hidden" name="id_user" value="<?= $row->id_user?>">
                    <input type="text" name="fullname" value="<?=$this->input->post('fullname') ?? $row->nama_lengkap?>" class="form-control" id="InputFullname" >
                  <?=form_error('fullname')?>
                    </div>
                  <div class="form-group">
                    <label for="InputUsername">Email</label>
                    <input type="email" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control" id="InputUsername" >
                  <?=form_error('username')?>
                </div>
                <div class="form-group">
                    <label for="InputUsername">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" value="<?=$this->input->post('tanggal_lahir') ?? $row->tanggal_lahir?>" class="form-control" id="InputTanggalLahir" >
                  <?=form_error('tanggal_lahir')?>
                <div class="form-group">
                    <label for="InputUsername">alamat</label>
                    <input type="text" name="alamat" value="<?=$this->input->post('alamat') ?? $row->alamat?>" class="form-control" id="InputUsername" >
                  <?=form_error('alamat')?>
                </div>
                <div class="form-group">
                    <label for="InputUsername">telepon</label>
                    <input type="number" name="telepon" value="<?=$this->input->post('telepon') ?? $row->telepon?>" class="form-control" id="InputUsername" >
                  <?=form_error('telepon')?>
                </div>
                <!-- /.card-body -->

                
              </form>
            </div>
            <!-- /.card -->
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