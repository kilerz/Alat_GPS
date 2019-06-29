
  
 

<div class="row">
        <div class="col-xs-12">
             <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $Title?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                 <a class="btn btn-block btn-info" href="<?php echo base_url()?>index.php/Manage_user/post/">Add Data</a>
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Nama </th>
                  <th>Kategori Pengguna</th>
                  <th>aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $query_ex = " select * from users ";
                $query = $this->db->query($query_ex);
                    
                $nomor = 1;
                foreach ($query->result() as $row)
                { ?>
                  <tr>
                  <td><?php echo $nomor?></td>
                  <td> <?php echo $row->username?></td>
                  <td> <?php if($row->level_users==1){ echo "Admin Panel";}else{echo "User Panel";}?>
                      
                  <td>
                    <div class="btn-group-vertical">
                        <a class="btn btn-success" href="<?php echo base_url()?>index.php/Manage_user/edit/<?php echo $row->id?>" >Edit Data</a>
                        <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Manage_user/delete/<?php echo $row->id?>" > Delete Data</a>
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