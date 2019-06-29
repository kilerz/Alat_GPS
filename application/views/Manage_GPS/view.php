<div class="row">
        <div class="col-xs-12">
             <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $Title?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <a class="btn btn-block btn-info" href="<?php echo base_url()?>index.php/Manage_GPS/post/">Add Data</a>
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Brand GPS</th>
                  <th> Model GPS </th>
                  <th> GPS Name</th>
                  <th> Waranty Mount</th>
                  <th> Buy Date</th>
                  <th> Sold Date</th>
                  <th> Sold To</th>
                  <th> Photo </th>
                  <th> Description</th>
                  <th> Dokumentasi</th>
                  <th>aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query_ex = " select * from gps ";
                $query = $this->db->query($query_ex);
                    
                $nomor = 1;
                foreach ($query->result() as $row)
                { ?>
                  <tr>
                  <td><?php echo $nomor?></td>
                  <td> <?php echo $row->Brand_GPS?></td>
                  <td> <?php echo $row->Model_GPS?></td>
                  <td> <?php echo $row->GPS_name?></td>
                  <td> <?php echo $row->Waranty_month	?></td>
                  <td> <?php echo $row->Buy_date?></td>
                  <td> <?php echo $row->sold_date?></td>
                  <td> <?php echo $row->Sold_to?></td>
                  <td><img width="50px" height="50px" src="<?php echo base_url().'file/img/'.$row->Photo?>"  class="img-thumbnail"> </td>
                  <td> <?php echo $row->Description?></td>
                  <td> <?php echo $row->dokumentasi?></td>
                  
                  
               <td>
                    <div class="btn-group-vertical">
                        <a class="btn btn-success" href="<?php echo base_url()?>index.php/Manage_GPS/edit/<?php echo $row->id?>" >Edit Data</a>
                        <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Manage_GPS/delete/<?php echo $row->id?>" > Delete Data</a>
                       </div>
                  </td>
                 </tr>
                 <?php $nomor++;}?>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->