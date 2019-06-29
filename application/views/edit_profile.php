
<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php echo form_open_multipart('index.php/Profile/edit_profile','class="form-horizontal " ')?>
              <div class="box-body">
                <div class="form-group">
                  
                   <label for="" class="col-sm-2 control-label">Nama </label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="" name="name">
                      <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?php echo $this->session->userdata('id_profile')?>">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Alamat </label>
                        
                  <div class="col-sm-10">
                      <textarea name="alamat" class="form-control" rows="3" placeholder=""></textarea>
                  </div>
                        
                <label for="" class="col-sm-2 control-label">Nomor Hp </label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="" name="no_hp">
                 </div>
                   
                
                </div>
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