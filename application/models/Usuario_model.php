<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    function _contruct() {
        parent::_contruct();
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('usuario');
        $query = $this->db->get();
        return $query->result();
    }
    

    function inserir($u) {
        return $this->db->insert('usuario', $u);
     
    }
           
    function deletar($idusuario) {
        $this->db->where('idusuario', $idusuario);
        return $this->db->delete('usuario');
    }
   
    
    function editar($idusuario){
        $this->db->where('idusuario', $idusuario);
        $result = $this->db->get('usuario');
        return $result->result();
    }
    
    
    function atualizar($data){
        $this->db->where('idusuario', $data['idusuario']);
        $this->db->set($data);
        return $this->db->update('usuario');
    }
    
    
    
    
    
    
    
     
      
}
