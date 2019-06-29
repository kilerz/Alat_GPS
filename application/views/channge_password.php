
<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Password</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php echo form_open_multipart('index.php/Profile/change_password','class="form-horizontal " ')?>
              <div class="box-body">
                <div class="form-group">
                  
                   <label for="" class="col-sm-2 control-label">Old Password</label>
                        
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="" placeholder="" name="old_pw">
                      <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $this->session->userdata('id')?>">
                  </div>
                   
                  <label for="" class="col-sm-2 control-label">New Password </label>
                        
                  <div class="col-sm-10">
                      <input type="password" class="form-control" id="" placeholder="" name="pw">
                  </div>
                        
             
                   
                
                </div>
                  <?php echo $this->session->flashdata('message');?>	
   
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a  href="<?php echo base_url('index.php/Home')?>" class="btn btn-default">Kembali</a>
                  <input type="submit" name="submit" value="Save Data" class="btn btn-info pull-right">

              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->