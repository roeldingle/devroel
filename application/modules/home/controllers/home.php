<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index()
	{
		$aData['aModule'] = Modules::run('menu');
		$aData['aUserData'] = $this->getClass->select('tb_user', '','rows');
		$this->load->view('v_'.strtolower(__CLASS__),$aData);
	}
}