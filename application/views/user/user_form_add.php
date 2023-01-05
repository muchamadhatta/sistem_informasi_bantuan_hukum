<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add User</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=site_url('user')?>">User</a></li>
              <li class="breadcrumb-item active">Add User</li>
             
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
                <h3 class="card-title">Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="post">
                <div class="card-body">

                <div class="form-group " >
                    <label for="InputFullname">Nama Lengkap</label>
                    <input type="text" name="fullname" value="<?=set_value('fullname')?>" class="form-control" id="InputFullname" placeholder="Enter Fullname">
                  <?=form_error('fullname')?>
                    </div>
                  <div class="form-group">
                    <label for="InputUsername">Username</label>
                    <input type="text" name="username" value="<?=set_value('username')?>" class="form-control" id="InputUsername" placeholder="Enter Username">
                  <?=form_error('username')?>
                    </div>
                  <div class="form-group">
                    <label for="InputPassword">Password</label>
                    <input type="password" name="password" value="<?=set_value('password')?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <?=form_error('password')?>
                    </div>
                  <div class="form-group">
                    <label for="InputPasconf">Password Confirmation</label>
                    <input type="password" name="pasconf" value="<?=set_value('pasconf')?>" class="form-control" id="exampleInputPassword1" placeholder="Password Confirmation">
                    <?=form_error('pasconf')?>
                </div>
                  <div class="form-group">
                                <label >Level</label>
                                <select name="level" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="admin" <?=set_value('level') == 'admin' ? "selected" : null?> >Admin</option>
                                <option value="sekretariat" <?=set_value('level') == 'sekretariat' ? "selected" : null?>>Sekretariat</option>
                                <option value="klien" <?=set_value('level') == 'admin' ? "klien" : null?>>Klien</option>
                                <option value="konsultan_hukum" <?=set_value('level') == 'konsultan_hukum' ? "selected" : null?>>Konsultan Hukum</option>
                                </select>
                                <?=form_error('level')?>
                             </div> 
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-success">
                     <i class="fa fa-paper-plane"></i> Save
                  </button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
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