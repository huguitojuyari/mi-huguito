<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	
	// PARA MOSTRAR EL INICIO 

	public function indexp()
	{	
		$lista=$this->cliente_model->listaclienteslte();
		$data['clientes']=$lista;	
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');		
		$this->load->view('principal');
		$this->load->view('inclte/pie'); 		
	}
	// PARA MOSTRAR EL INICIO 
	public function indexvista()
	{	
		$lista=$this->cliente_model->listaclienteslte();
		$data['clientes']=$lista;	
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');		
		$this->load->view('principal');
		$this->load->view('inclte/pie'); 		
	}


	// PARA MOSTRAR EL CLIENTE
	public function indexpro()
	{	
		$lista=$this->producto_model->listaclienteslte();
		$data['productos']=$lista;	
		$this->load->view('inclteemple/cabecera');
		$this->load->view('inclteemple/menusuperior');
		$this->load->view('inclteemple/menulateral');		
		$this->load->view('prod_listalte',$data);
		$this->load->view('inclteemple/pie'); 		
	}
	// PARA MOSTRAR EL CLIENTE
	
	public function modificarlte()
	{
		//recepcion que esta llegando desde el boton modificar
		$idproducto=$_POST['idproducto'];
		$data['infocliente']=$this->cliente_model->recuperarclienteslte($idproducto);

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');	
		$this->load->view('clien_modificarlte', $data); //
		$this->load->view('inclte/pie'); 
	
	}
	
	
	
	
	public function modificarbdlte()
	{
		$idproducto=$_POST['idproducto']; //RECUperando dela clien_lista 
		$data['nombre']=$_POST['nombre'];
		$data['descripcion']=$_POST['descripcion'];
		$data['precio']=$_POST['precio'];
		$data['stock']=$_POST['stock'];
		

		$this->producto_model->modificarclienteslte($idproducto,$data);
		redirect('producto/index','refresh');
	}


	
	//editar
	
	public function agregarlte()
	{
		//mostrar un formulario(vista) para agregar nuevo estudiante

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('prod_formulariolte'); //, $data
		$this->load->view('inclte/pie');
	}
	

	public function agregarbdlte()
	{
		//atrib. BD             atrib. formulario
		$data['nombre']=$_POST['nombre'];
		$data['descripcion']=$_POST['descripcion'];
		$data['precio']=$_POST['precio'];
		$data['stock']=$_POST['stock'];

		$this->producto_model->agregarclienteslte($data);

		redirect('cliente/index','refresh');
	}	
  
	
	
	// eliminara 
	public function eliminarbdlte()
	{		
		//
		$idproducto=$_POST['idproducto'];
		$this->producto_model->eliminarclienteslte($idproducto);
		redirect('producto/index','refresh');
	}
	
	
	/// DESAVILITAR
	public function deshabilitarbdlte()
	{
		$idproducto=$_POST['idproducto'];
		$data['estado']='0';

		$this->producto_model->modificarclientelte($idproducto,$data);
		redirect('producto/index','refresh');
	}
	///////// listaclientedeslte esto esmodel 

	public function deshabilitadoslte()
	{

		$lista=$this->producto_model->listaclientesdeslte();
		$data['producto']=$lista;

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('clien_listadeslte', $data); //
		$this->load->view('inclte/pie');
	}

	public function habilitarbdlte()
	{
		$idproducto=$_POST['idproducto'];
		$data['estado']='1';

		$this->producto_model->modificarclientelte($idproducto,$data);
		redirect('producto/deshabilitadoslte','refresh');
	}
	///////// subier foto }

	public function habilitar2()
	{
		$idproducto=$_POST['idproducto'];
		$data['estado']='1';

		$this->producto_model->modificarclientelte($idproducto,$data);
		redirect('producto/deshabilitadoslte','refresh');
	}

	

	public function invitadolte()
	{
		if ($this->session->userdata('login'))//controlar si existe la variable de session login 
		{
			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('principal');
			$this->load->view('inclte/pie');
		}
		else
		{
			redirect('usuarios/index/2','refresh');
		}
	}
	


	
}
