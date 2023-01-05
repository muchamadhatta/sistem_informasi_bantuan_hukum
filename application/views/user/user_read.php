<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Read User</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('user')?>">User</a></li>
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
                    <label for="InputUsername">Username</label>
                    <input type="text" name="username" value="<?=$this->input->post('username') ?? $row->username?>" class="form-control" id="InputUsername" >
                  <?=form_error('username')?>
                </div>
                  <div class="form-group">
                                <label >Level</label>
                                <select name="level" class="form-control">
                                <?php $level = $this->input->post('level') ?? $row->level ?>
                                
                                <option value="admin" <?= $level == 'admin' ? 'selected' : null ?>>Admin</option>
                                <option value="sekretariat" <?= $level == 'sekretariat' ? 'selected' : null ?> >Sekretariat</option>
                                <option value="klien" <?= $level == 'klien' ? 'selected' : null ?>>Klien</option>
                                <option value="konsultan_hukum" <?= $level == 'konsultan_hukum' ? 'selected' : null ?> >Konsultan Hukum</option>
                                </select>
                                <?=form_error('level')?>
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