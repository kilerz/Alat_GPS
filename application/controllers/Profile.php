<?php

class Profile extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                 $this->load->helper('url');
        }
	public function edit_profile()
	{ 
                                
                     if(isset($_POST['submit']))
                    {
                          $id = $this->input->post('id');
                          $nm    = $this->input->post('name');
                          $alamat   = $this->input->post('alamat');
                          $no_hp     = $this->input->post('no_hp');
                          
                          $data = array(
                             'nama' =>$nm,
                              'alamat' => $alamat,
                              'no_hp' => $no_hp
                              
                          );
                          $this->db->where('id',$id);
                          $this->db->update('profile',$data);
                          redirect('index.php/Home');
                      }else {
                            if($this->session->userdata('level_users')!=2)
                            {
                            redirect('index.php/Home/');
                            }   else{
                                 $data['active_1'] = '';
                                 $data['active_2'] = '';
                                 $data['active_3'] = '';
                                 $id = $this->uri->segment(3);
                                 $query  = "select * from profile where id= '$id'";
                                 $data['edit_ex'] = $this->db->query($query)->row_array();
		 $this->template->load('Template/template','edit_profile',$data);
                           }
                      }
            
                                
	}
        
        public function change_password()
	{ 
                                
                     if(isset($_POST['submit']))
                    {
                          $id = $this->input->post('id');
                          $pw    = $this->input->post('pw');
                          $old_pw = $this->input->post('old_pw');
                            $cek    = $this->db->get_where('users',array('id'=>$id));
                            $r = $cek->row_array();
                            if(password_verify($old_pw, $r['password']))
                            {
                          $data = array(
                             'password' =>password_hash($pw, PASSWORD_DEFAULT)
                              
                              
                          );
                          $this->db->where('id',$id);
                          $this->db->update('users',$data);
                            redirect('index.php/Home'); 
                            
                            }else {
                                $this->session->set_flashdata('message', 
                                ' <div class="alert alert-danger alert-dismissible"><center> PASSWORD YANG ANDA MASUKKAN SALAH </center></div>'); 
                                $id_p =$this->session->userdata('id');
                                   redirect('index.php/Profile/change_password/'.$id_p);
                                
                            }
                      }else {
                          
                        if($this->session->userdata('level_users')!=2)
                        {
                        redirect('index.php/Home/');
                        }   else{
                          
                                 $data['active_1'] = '';
                                 $data['active_2'] = '';
                                 $data['active_3'] = '';
                                 $this->template->load('Template/template','channge_password',$data);
                        }
                      }
            
                                
	}
             
}
