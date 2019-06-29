 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Data GPS</h3>
            </div>
            <!-- /.box-header -->
          <!-- form start -->
           <?php echo form_open_multipart('index.php/'.$this->uri->segment(1).'/edit','class="form-horizontal " ')?>
              <div class="box-body">
                <div class="form-group">
                  
                   <label for="" class="col-sm-2 control-label">Brand GPS </label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" placeholder="" value="<?php echo $edit_ex['Brand_GPS']?>" name="brand_gps">
                      <input type="hidden" class="form-control" id="" placeholder="" value="<?php echo $edit_ex['id']?>" name="id">
               
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Model GPS </label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" value="<?php echo $edit_ex['Model_GPS']?>" placeholder="" name="model_gps">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">GPS Name </label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" value="<?php echo $edit_ex['GPS_name']?>" placeholder="" name="gps_name">
                     
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Waranty Mount </label>
                        
                  <div class="col-sm-10">
                      <input type="number" class="form-control" min="1" value="<?php echo $edit_ex['Waranty_month']?>"   id="" placeholder="" name="mount">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Buy Date </label>
                        
                  <div class="col-sm-10">
                      <input type="text" readonly="" class="form-control" value="<?php echo $edit_ex['Buy_date']?>" id="datepicker" placeholder="Klik for Date" name="buy_date">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Sold date </label>
                        
                  <div class="col-sm-10">
                      <input type="text" readonly="" class="form-control" value="<?php echo $edit_ex['sold_date']?>" id="datepicker1" placeholder="Klik for Date" name="sold_date">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Sold To</label>
                        
                  <div class="col-sm-10">
                      <input type="text" class="form-control" id="" value="<?php echo $edit_ex['Sold_to']?>" placeholder="" name="sold_to">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Photo </label>
                        
                  <div class="col-sm-10">
                      <input  type="file" class="form-control"  name="photo"> 
                      <input type="hidden" class="form-control" id="" value="<?php echo $edit_ex['Photo']?>" placeholder="" name="old">
                 
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Description </label>
                        
                  <div class="col-sm-10">
                      <textarea name="description" class="form-control" rows="3" placeholder="."><?php echo $edit_ex['Description']?></textarea>
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Dokumentasi </label>
                        
                  <div class="col-sm-10">
                      <textarea name="dokumentasi" class="form-control" rows="3" placeholder=""><?php echo $edit_ex['dokumentasi']?></textarea>
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