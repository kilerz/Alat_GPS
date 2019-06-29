<?php

class Manage_GPS extends CI_Controller {

                var $folder = "Manage_GPS";
                var $table_db ="gps";
  
	 public function __construct()
        {
                parent::__construct();
            
        }
	public function index()
	{   
                                 $data['active_1'] = '';
                                 $data['active_2'] = 'active';
                                 $data['active_3'] = '';
                                 $data['Title'] = 'Data Manage GPS';
                                 $this->template->load('Template/template', $this->folder.'/view',$data);
	}
               private function _do_upload()
	{
		$config['upload_path'] 		= 'file/img/';
		$config['allowed_types']                              = 'gif|jpg|png';
		$config['max_size'] 			= 100;
		$config['max_widht'] 			= 1000;
		$config['max_height']  		= 1000;
		$config['file_name'] 			= round(microtime(true)*1000);
 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('photo')) {
			$this->session->set_flashdata('msg', $this->upload->display_errors('',''));
			 redirect('index.php/'.$this->uri->segment(1));
		}
		return $this->upload->data('file_name');
	}
               public function post()
	{   
                      if(isset($_POST['submit']))
                    {
                          $brand               = $this->input->post('brand_gps');
                          $model               = $this->input->post('model_gps');
                          $name                = $this->input->post('gps_name');
                          $Waranty             = $this->input->post('mount');
                          $bdate                = $this->input->post('buy_date');
                          $sdate                 = $this->input->post('sold_date');
                          $soldto                = $this->input->post('sold_to');
                          $description        = $this->input->post('description');
                          $dokumentasi      = $this->input->post('dokumentasi');
                                    
                            
                            $data = array(
                              
                              'Brand_GPS' =>$brand,
                              'Model_GPS' => $model,
                              'Waranty_month' =>$Waranty,
                              'Buy_date' => $bdate,
                              'sold_date' =>$sdate,
                              'Sold_to' => $soldto,
                              'Description' => $description,
                              'dokumentasi' =>$dokumentasi,
                              'GPS_name' => $name,
                                  
                          );
                            
                            if (!empty($_FILES['photo']['name'])) {
			$upload = $this->_do_upload();
			$data['Photo'] = $upload;
		}
                          $this->db->insert($this->table_db,$data);
                          redirect('index.php/'.$this->uri->segment(1));
                      }else {
                                 $data['active_1'] = '';
                                 $data['active_2'] = 'active';
                                 $data['active_3'] = '';
                                 $data['Title'] = 'Data Manage GPS';
		$this->template->load('Template/template', $this->folder.'/post',$data);
                      }
                
                      }
                public function edit()
	{   
                      if(isset($_POST['submit']))
                    {
                          $id                    =  $this->input->post('id');
                          $brand               = $this->input->post('brand_gps');
                          $model               = $this->input->post('model_gps');
                          $name                = $this->input->post('gps_name');
                          $Waranty             = $this->input->post('mount');
                          $bdate                = $this->input->post('buy_date');
                          $sdate                 = $this->input->post('sold_date');
                          $soldto                = $this->input->post('sold_to');
                          $description        = $this->input->post('description');
                          $dokumentasi      = $this->input->post('dokumentasi');
                          
                          $data = array(
                              
                              'Brand_GPS' =>$brand,
                              'Model_GPS' => $model,
                              'Waranty_month' =>$Waranty,
                              'Buy_date' => $bdate,
                              'sold_date' =>$sdate,
                              'Sold_to' => $soldto,
                              'Description' => $description,
                              'dokumentasi' =>$dokumentasi,
                              'GPS_name' => $name,
                                  
                          );
                          if (!empty($_FILES['photo']['name'])) {
			$upload = $this->_do_upload();
			$data['Photo'] = $upload;
		}else{
                                    $data['Photo'] = $this->input->post('old');
                            }
                          $this->db->where('id',$id);
                          $this->db->update($this->table_db,$data);
                          redirect('index.php/'.$this->uri->segment(1));
                      }else {
                                 $data['active_1'] = '';
                                 $data['active_2'] = 'active';
                                 $data['active_3'] = '';
                                 $data['Title'] = 'Data Manage GPS';
                                 $id = $this->uri->segment(3);
                                 $query  = "select * from gps where id= $id";
                                 $data['edit_ex'] = $this->db->query($query)->row_array();
		$this->template->load('Template/template', $this->folder.'/edit',$data);
                      }
                
                      }
                          function delete()
                        {
                            $id     =  $this->uri->segment(3);
                          
                          $this->db->where('id',$id);
                          $this->db->delete($this->table_db);
                          
                            redirect('index.php/'.$this->uri->segment(1));
                        }
             
}
