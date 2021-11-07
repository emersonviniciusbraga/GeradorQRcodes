<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Qrcodes extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('phpqrcode/qrlib');
		
	}
	public function index()
	{
		$this->load->model('qrcodes_model');
		$dados['valor'] = $this->qrcodes_model->index();
		$this->load->view('imagens', $dados);
	}

}
