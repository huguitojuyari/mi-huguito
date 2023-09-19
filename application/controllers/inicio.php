<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$this->load->view('inclte/cabecera');
        $this->load->view('inclte/menulateral');
        $this->load->view('inclte/menusuperior');
        $this->load->view('principal');
        $this->load->view('inclte/pie');
	}
}