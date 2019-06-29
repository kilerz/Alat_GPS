<?php

class Home extends CI_Controller {

	 public function __construct()
        {
                parent::__construct();
                 $this->load->helper('url');
        }
	public function index()
	{ 
                                 $data['active_1'] = '';
                                 $data['active_2'] = '';
                                 $data['active_3'] = '';
                                 
                                 $this->template->load('Template/template','welcome_message',$data);
	}
             
}
