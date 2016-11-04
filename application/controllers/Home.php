<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller 
 { 
   
   public function index() {
	   $data['main_content'] = 'home/index_view';
      $this->load->view('templates/standard',$data);
   }
}