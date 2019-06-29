 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Add Data GPS</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php echo form_open_multipart('index.php/'.$this->uri->segment(1).'/post','class="form-horizontal " ')?>
              <div class="box-body">
                <div class="form-group">
                  
                   <label for="" class="col-sm-2 control-label">Brand GPS </label>
                        
                  <div class="col-sm-10">
                      <input required minlength="1" type="text" class="form-control" id="" placeholder="" name="brand_gps">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Model GPS </label>
                        
                  <div class="col-sm-10">
                      <input required minlength="1" type="text" class="form-control" id="" placeholder="" name="model_gps">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">GPS Name </label>
                        
                  <div class="col-sm-10">
                      <input required minlength="1" type="text" class="form-control" id="" placeholder="" name="gps_name">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Waranty Mount </label>
                        
                  <div class="col-sm-10">
                      <input required minlength="1" type="number" class="form-control" min="1"   id="" placeholder="" name="mount">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Buy Date </label>
                        
                  <div class="col-sm-10">
                      <input required  type="text"  class="form-control" id="datepicker" placeholder="Klik for Date" name="buy_date">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Sold date </label>
                        
                  <div class="col-sm-10">
                      <input required  type="text"  class="form-control" id="datepicker1" placeholder="Klik for Date" name="sold_date">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Sold To</label>
                        
                  <div class="col-sm-10">
                      <input required minlength="1" type="text" class="form-control" id="" placeholder="" name="sold_to">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Photo </label>
                        
                  <div class="col-sm-10">
                      <input required="" type="file" class="form-control" name="photo">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Description </label>
                        
                  <div class="col-sm-10">
                      <textarea required minlength="1" name="description" class="form-control" rows="3" placeholder="."></textarea>
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Dokumentasi </label>
                        
                  <div class="col-sm-10">
                      <textarea required minlength="1" name="dokumentasi" class="form-control" rows="3" placeholder=""></textarea>
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