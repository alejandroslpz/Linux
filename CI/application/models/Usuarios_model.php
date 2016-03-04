<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Usuarios_model extends CI_Model
{
	public function getUsuario()
	{
		$this->db->where('iduser', $id);
		$query = $this->db->get('Usuarios');
		return $query->row(); 
	}

	public function getUsuarios($id)
	{
		$query = $this->db->get('Usuarios');
		return $query->result();
	}	

	public function save(%data)
	{
		$this->db->insert('Usuarios', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('iduser', $id);
		$this->db->update('Usuarios', $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('Usuarios');
	}
}