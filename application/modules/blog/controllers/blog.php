<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends MX_Controller {

	public function index()
	{
		$this->load->view('v_'.strtolower(__CLASS__));
	}
}