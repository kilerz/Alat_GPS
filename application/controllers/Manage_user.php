<?php


class Manage_user extends CI_Controller {
                var $folder = "Manage_User";
                var $table_db ="users";
	 public function __construct()
        {
                parent::__construct();
                 $this->load->helper('url');
        }
	public function index()
	{   
                 if($this->session->userdata('level_users')!=1)
                    {
             redirect('index.php/Home/');
                    }   else{
                                 $data['active_1'] = '';
                                 $data['active_2'] = '';
                                 $data['active_3'] = 'active';
                                 $data['Title'] = 'Data User';
                                 $this->template->load('Template/template',$this->folder.'/view',$data);
                            }
                                 
            }
                public function post()
	{   
                      if(isset($_POST['submit']))
                    {
                          $nm    = $this->input->post('uname');
                          $pw   = $this->input->post('pw');
                          $lv     = $this->input->post('level_user');
                          
                          $id_profile = $this->input->post('id_profile');
                          $data = array(
                              
                              'username' =>$nm,
//                              'password'  => md5($pw), berhubung MD5 sudah tidak aman, jadi tidak pake md5 dulu ya ehehehee
                              'password' => password_hash($pw, PASSWORD_DEFAULT),
                              'level_users' =>$lv,
                              'id_profile' =>$id_profile
                          );
                          $data2 = array( 
                              'id' =>$id_profile,
                              'nama'=>"",
                              'alamat'=>"",
                              'no_hp'=>""
                              
                          );
                          $this->db->insert($this->table_db,$data);
                          $this->db->insert('profile',$data2);
                          redirect('index.php/'.$this->uri->segment(1));
                      }else {
                    if($this->session->userdata('level_users')!=1)
                    {
                    redirect('index.php/Home/');
                    }   else{
                                 $data['active_1'] = '';
                                 $data['active_2'] = '';
                                 $data['active_3'] = 'active';
                                 $data['Title'] = 'Data User';
		$this->template->load('Template/template',$this->folder.'/post',$data);
                    }
                      }
                
                      }
                public function edit()
	{   
                      if(isset($_POST['submit']))
                    {
                          $id = $this->input->post('id');
                          $nm    = $this->input->post('uname');
                          $pw   = $this->input->post('pw');
                          $lv     = $this->input->post('level_user');
                          
                          $data = array(
                               'username' =>$nm,
//                               'password'  => md5($pw),
                                'password' => password_hash($pw, PASSWORD_DEFAULT),
                               'level_users' =>$lv
                          );
                          $this->db->where('id',$id);
                          $this->db->update($this->table_db,$data);
                          redirect('index.php/'.$this->uri->segment(1));
                      }else {
                          
                        if($this->session->userdata('level_users')!=1)
                        {
                        redirect('index.php/Home/');
                        }   else{
                          
                                 $data['active_1'] = '';
                                 $data['active_2'] = '';
                                 $data['active_3'] = 'active';
                                 $data['Title'] = 'Data User';
                                 $id = $this->uri->segment(3);
                                 $query  = "select * from users where id= $id";
                                 $data['edit_ex'] = $this->db->query($query)->row_array();
		$this->template->load('Template/template',$this->folder.'/edit',$data);
                                }
                      }
                
                      }
                          function delete()
                        {
                                if($this->session->userdata('level_users')!=1)
                                {
                                redirect('index.php/Home/');
                                }   else{
                              
                              $id     =  $this->uri->segment(3);
                          
                          $this->db->where('id',$id);
                          $this->db->delete($this->table_db);
                          
                            redirect('index.php/'.$this->uri->segment(1));
                                 }
                        }
             
}
