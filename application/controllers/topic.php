<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {


	public function index(){
	 $this->load->view('topic');
	}
  public function get($id1){

  $this->load->view('get',array('id'=>$id1));
  }

}
?>
