<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MX_Controller {

	public function index()
	{
		$aData['sTitle'] = "Bar Controller roel ".base_url();
		$aData['aMenuData'] = $this->getClass->select('tb_menu', '','rows');
		return $this->load->view('v_'.strtolower(__CLASS__),$aData);
	}
}
