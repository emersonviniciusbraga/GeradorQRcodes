<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gerador extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->library('phpqrcode/qrlib');
		
	}
	public function index()
	{
		$this->load->model('qrcodes_model');
		$dados['valor'] = $this->qrcodes_model->index();
		$this->load->view('gerador', $dados);
	}

	public function cadastrar()
	{
		$dados['titulo'] = 'Gerador de QRcodes';
		$dados['nome'] = 'Gerador de QRcodes';
		$this->load->view('gerador', $dados);
	}

	public function store(){

		$valor = array(
			'link' => $_POST['link']
		);

		$this->load->model('qrcodes_model');
		

		$SERVERFILEPATH = $_SERVER['DOCUMENT_ROOT'].'/GeradorQRcodes/assets/qrcodes/';
		$text = $valor['qr'];
		$text1= substr($text, 0,9);	
		$folder = $SERVERFILEPATH;
		$file_name1 = $text1."-Qrcode" . rand(2,200) . ".png";
		$file_name = $folder.$file_name1;

		
		$valor['qr'] = $file_name1;
		
		$this->qrcodes_model->store($valor);
		

		$link = $valor['link'];
		
			
		QRcode::png($link,$file_name);
		redirect(base_url('Qrcodes'));

		$dados['valor'] = $valor;
		$this->load->view('gerador', $dados);
	
	}

	
}