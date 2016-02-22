<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {


	public function index()
	{
	echo '토픽 펭지1';
	}
  public function get($id1,$as1){

    echo $id1;
    echo $as1;
  }

}
