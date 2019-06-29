<?php

class Login extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                 $this->load->helper('url');
        }
	public function index()
	{ 
                                 
                            if(isset($_POST['submit']))
                                 {
                
                                $uname = $this->input->post('uname');
                                $pw      = $this->input->post('pw');
                                $login    = $this->db->get_where('users',array('username'=>$uname));
                                $r = $login->row_array();
                                if(password_verify($pw, $r['password']))
//                                if($login->num_rows()>0)
                                {
//                                    $r = $login->row_array();
                                    $data = array(
                                        'id' =>$r['id'],
                                       'username'  => $r['username'],
                                       'level_users' =>$r['level_users'],
                                       'id_profile'   =>$r['id_profile']
                                    );
                                    $this->session->set_userdata($data);
                                    redirect('index.php/Home');
                                }else{
                              $this->session->set_flashdata('message', 
                                ' <div class="alert alert-danger alert-dismissible">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '
                               . '<center><b>ID dan Password Anda Salah!!! <br> |<a href="https://www.instagram.com/harisandy1/" target="_blank"> '
                               . 'klik saya untuk informasi </a> | </b></center>'
                               . '</div>'); 
                                    $this->load->view('login');
                                }
                           }else{
                                
                                 $this->load->view('login');
                                        }
	}

                function logout()
                {
                    $this->session->sess_destroy();
                    redirect('index.php/Login');
                }
        
                  function login_web (){
        
         if(isset($_POST['submit']))
        {
            $username   =  strtolower($this->input->post('username'));
            $password   =  strtolower($this->input->post('password'));
          //   $capth        = strtoupper( $this->input->post('kode_aman'));
            $login=  $this->db->get_where('app_users',array('username'=>$username,'password'=>  md5($password),'status'=>1));
            if($login->num_rows()>0 )//and $this->session->userdata('mycaptcha')==$capth)
            {
                $r=  $login->row_array();
                $data=array(
                    'id_users'=>$r['id_users'],
                            
                            'level'=>$r['level'],
                            'sess_login_absen'=>  substr(waktu(), 0,10),
                            'keterangan'=>$r['keterangan'],
                            'username'=>$username
                        );
                 
                $this->session->set_userdata($data);
                 $this->mcrud->update('app_users',array('last_login'=>  waktu()), 'username',$username);
             
             
                  if($r['level'] == 5){
                  redirect('client_area');
              }
              
            }
            else
            {
                
                $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> '
                   . '<center><b>ID dan Password Anda Salah Mohon Hubungi Pihak Administrator!!! <br> |<a href="https://www.instagram.com/harisandy1/" target="_blank"> klik saya </a> | </b></center>'
                   . '</div>'); 
        $query_title      = "SELECT * from cpanel_title";
        $data['Title']   =  $this->db->query($query_title)->result();
        $this->load->view('login_web',$data);
            }
        }
        else
        {
         
        $query_title      = "SELECT * from cpanel_title";
        $data['Title']   =  $this->db->query($query_title)->result();
        $this->load->view('login_web',$data);
        }
    }
        
             
}
