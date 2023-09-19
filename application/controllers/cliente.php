<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {
	
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

	// PARA MOSTRAR EL CLIENTE
	public function index()
	{	
		$lista=$this->cliente_model->listaclienteslte();
		$data['clientes']=$lista;	
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');		
		$this->load->view('clien_listalte',$data);
		$this->load->view('inclte/pie'); 		
	}
	// PARA MOSTRAR EL CLIENTE
	// PARA MOSTRAR EL CLIENTE
	public function indexu()
	{	
		$lista=$this->cliente_model->listausuarioslte();
		$data['usuarios']=$lista;	
		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');		
		$this->load->view('usu_listalte',$data);
		$this->load->view('inclte/pie'); 		
	}

	// modificar

	public function modificarlte()
	{
		//recepcion que esta llegando desde el boton modificar
		$idcliente=$_POST['idcliente'];
		$data['infocliente']=$this->cliente_model->recuperarclienteslte($idcliente);

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');	
		$this->load->view('clien_modificarlte', $data); //
		$this->load->view('inclte/pie'); 
	
	}
	public function modificarusulte()
	{
		//recepcion que esta llegando desde el boton modificar
		$idusuario=$_POST['idusuario'];
		$data['infousuario']=$this->cliente_model->recuperarusuarioslte($idusuario);

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');	
		$this->load->view('usu_modificarlte', $data); //
		$this->load->view('inclte/pie'); 	
	}
	
	
	
	public function modificarbdlte()
	{
		$idcliente=$_POST['idcliente']; //RECUperando dela clien_lista 
		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['ci']=$_POST['ci'];
		$data['talla']=$_POST['talla'];

		$this->cliente_model->modificarclienteslte($idcliente,$data);
		redirect('cliente/index','refresh');
	}
	public function modificarusuariobdlte()
	{
		$idusuario=$_POST['idusuarios']; //RECUperando dela clien_lista 
		$data['nombres']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['correoElectronico']=$_POST['correoElectronico'];
		$data['tipo']=$_POST['tipo'];

		$this->cliente_model->modificarusuarioslte($idusuario,$data);
		redirect('cliente/indexu','refresh');
	}
	
	//editar
	
	public function agregarlte()
	{
		//mostrar un formulario(vista) para agregar nuevo estudiante

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('clien_formulariolte'); //, $data
		$this->load->view('inclte/pie');
	}
	public function agregarlteu()
	{
		//mostrar un formulario(vista) para agregar nuevo estudiante

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('usu_formulariolte'); //, $data
		$this->load->view('inclte/pie');
	}
	

	public function agregarbdlte()
	{
		//atrib. BD             atrib. formulario
		$data['nombre']=$_POST['nombre'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['ci']=$_POST['ci'];
		$data['talla']=$_POST['talla'];

		$this->cliente_model->agregarclienteslte($data);

		redirect('cliente/index','refresh');
	}	
  
	public function agregarusubdlte()
	{
		//atrib. BD             atrib. formulario
		$data['nombres']=$_POST['nombres'];
		$data['primerApellido']=$_POST['apellido1'];
		$data['segundoApellido']=$_POST['apellido2'];
		$data['correoElectronico']=$_POST['correoElectronico'];
		$data['login']=$_POST['login'];
		$data['password']=md5($_POST['password']);
		$data['tipo']=$_POST['tipo'];

		$this->cliente_model->agregarusulte($data);

		redirect('cliente/indexu','refresh');
	}
	
	// eliminara 
	public function eliminarbdlte()
	{		
		//
		$idcliente=$_POST['idcliente'];
		$this->cliente_model->eliminarclienteslte($idcliente);
		redirect('cliente/index','refresh');
	}
	public function eliminarbdusulte()
	{		
		//
		$idusuario=$_POST['idusuario'];
		$this->cliente_model->eliminarusuarioslte($idusuario);
		redirect('cliente/indexu','refresh');
	}
	
	/// DESAVILITAR
	public function deshabilitarbdlte()
	{
		$idcliente=$_POST['idcliente'];
		$data['habilitado']='0';

		$this->cliente_model->modificarclientelte($idcliente,$data);
		redirect('cliente/index','refresh');
	}
	///////// listaclientedeslte esto esmodel 

	public function deshabilitadoslte()
	{

		$lista=$this->cliente_model->listaclientesdeslte();
		$data['cliente']=$lista;

		$this->load->view('inclte/cabecera');
		$this->load->view('inclte/menusuperior');
		$this->load->view('inclte/menulateral');
		$this->load->view('clien_listadeslte', $data); //
		$this->load->view('inclte/pie');
	}

	public function habilitarbdlte()
	{
		$idcliente=$_POST['idcliente'];
		$data['habilitado']='1';

		$this->cliente_model->modificarclientelte($idcliente,$data);
		redirect('cliente/deshabilitadoslte','refresh');
	}
	///////// subier foto }
	


	public function subirfoto()
	{
		if ($this->session->userdata('login'))//controlar si existe la variable de session login 
		{
			//redirect('estudiante/indexlte','refresh');
			
			$data['idcliente']=$_POST['idcliente'];

			$this->load->view('inclte/cabecera');
			$this->load->view('inclte/menusuperior');
			$this->load->view('inclte/menulateral');
			$this->load->view('subirform', $data);
			$this->load->view('inclte/pie');
		}
		else
		{
			redirect('cliente/index','refresh');
		}
	}
	public function subir()
	{
		if ($this->session->userdata('login'))//controlar si existe la variable de session login 
		{
			//redirect('cliente/indexlte','refresh');
			
			$idcliente=$_POST['idcliente'];
			$nombrearchivo=$idcliente.".jpg";
			
			$config['upload_path']='./uploads/uniformes/';
			$config['file_name']=$nombrearchivo;
			$direccion="./uploads/uniformes/".$nombrearchivo;

			if (file_exists($direccion)) 
			{
				unlink($direccion);
			}
			
			$config['allowed_types']='jpg|gif|png';
			$this->load->library('upload',$config);

			if (!$this->upload->do_upload()) 
			{
				$data['error']=$this->upload->display_errors();
			}
			else
			{
				$data['foto']=$nombrearchivo;
				$this->cliente_model->modificarcliente($idcliente,$data);
				$this->upload->data();
			}
			redirect('cliente/index','refresh');

		}
		else
		{
			redirect('cliente/index','refresh');
		}
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
