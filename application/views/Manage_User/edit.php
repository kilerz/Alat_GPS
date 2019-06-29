<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php echo form_open_multipart('index.php/'.$this->uri->segment(1).'/edit','class="form-horizontal " ')?>
              <div class="box-body">
                <div class="form-group">
                  
                   <label for="" class="col-sm-2 control-label">Username </label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="" value="<?php echo $edit_ex['username']?>" name="uname">
                        <input type="hidden" class="form-control" id="" placeholder="" value="<?php echo $edit_ex['id']?>" name="id">
                 
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Type New Password </label>
                        
                  <div class="col-sm-10">
                      <input type="password" class="form-control" value="" id="" placeholder="" name="pw">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Pangkat User </label>
                        
                  <div class="col-sm-10">
                      <select name="level_user" class="form-control">
                        <?php if($edit_ex['level_users']==1){ ?>
                          <option value=0>-- Pilih User --</option>
                          <option selected="" value=1> Admin Panel</option>
                          <option value=2>User Panel</option>
                        <?php }elseif($edit_ex['level_users'] ==2){?>
                          <option value=0>-- Pilih User --</option>
                          <option  value=1> Admin Panel</option>
                          <option selected="" value=2>User Panel</option>
                        <?php }else{?>
                           <option value=0>-- Pilih User --</option>
                          <option  value=1> Admin Panel</option>
                          <option  value=2>User Panel</option>
                        <?php }?>
                      </select>
                  </div>
                   
                
                </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                  <a  href="<?php echo base_url('index.php/'.$this->uri->segment(1));?>" class="btn btn-default">Kembali</a>
                  <input type="submit" name="submit" value="Save Data" class="btn btn-info pull-right">

              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->