 
<?php
$query = 'select *  from profile order by id DESC LIMIT 1';

 $data=$this->db->query($query)->row_array();
 
 $kodeawal=substr($data['id'],4,5)+1;
 if($kodeawal<10){
  $kode='PR-O000'.$kodeawal;
 }elseif($kodeawal > 9 && $kodeawal <=99){
  $kode='PR-O00'.$kodeawal;
 }else{
  $kode='PR-O00'.$kodeawal;
 }
?>
<!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Add Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           <?php echo form_open_multipart('index.php/'.$this->uri->segment(1).'/post','class="form-horizontal " ')?>
              <div class="box-body">
                <div class="form-group">
                  
                   <label for="" class="col-sm-2 control-label">Username </label>
                        
                  <div class="col-sm-10">
                      <input required="" type="text" class="form-control" id="" placeholder="" name="uname">
                      <input type="hidden" class="form-control" id="" placeholder="" name="id_profile" value="<?php echo $kode?>">
                  </div>
                   
                   <label for="" class="col-sm-2 control-label">Password </label>
                        
                  <div class="col-sm-10">
                      <input required="" type="password" class="form-control" id="" placeholder="" name="pw">
                  </div>
                   
                    <label for="" class="col-sm-2 control-label">Pangkat User </label>
                        
                  <div class="col-sm-10">
                      <select  name="level_user" class="form-control">
                          <option value=0>-- Pilih User --</option>
                          <option value=1> Admin Panel</option>
                          <option value=2>User Panel</option>
                          
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