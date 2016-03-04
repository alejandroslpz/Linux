<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

/**
* Clase para manejar a todos los usuariostouch
*/
class Usuarios extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model');
	}

	public function index()
	{
		$data['usuario'] = $this->Usuarios_model->getUsuarios();
		$data['content'] = 'usuarios/dashboard';
		$this->load->view('index', $data);
	}

	public function create()
	{
		$data['content'] = 'usuarios/create';
		$this->load->view('index', $data);
	}

	public function edit($id)
	{
		$data['usuario'] = $this->Usuarios_model->getUsuario($id);
		$data['content'] = 'usuarios/edit';
		$this->load->view('index', $data);
	}

	public function save()
	{
		$id = $this->input->post('id');
		$nom = $this->input->post('nom');
		$appa = $this->input->post('appa');
		$apma = $this->input->post('apma');
		$co = $this->input->post('co');
		$contr	= $this->input->post('contr');
		$data = [
			'iduser' => $id,
			'nombre' => $nom,
			'appellidopa' => $appa,
			'appellidoma' => $apma,
			'correo' => $co,
			'contraseña' => $contr
		];
		$this->Usuarios_model->save($data);
		redirect('usuarios');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nom = $this->input->post('nom');
		$appa = $this->input->post('appa');
		$apma = $this->input->post('apma');
		$co = $this->input->post('co');
		$contr	= $this->input->post('contr');
		$data = [
			'iduser' => $id,
			'nombre' => $nom,
			'appellidopa' => $appa,
			'appellidoma' => $apma,
			'correo' => $co,
			'contraseña' => $contr
		];

		$this->Usuarios_model->update($id, $data);
		redirect('usuarios');
	}

	public function delete
}