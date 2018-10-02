<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Funcao_model extends CI_Model {

    function _contruct() {
        parent::_contruct();
    }

    function listar() {
        $this->db->select('*');
        $this->db->from('funcao');
        $query = $this->db->get();
        return $query->result();
    }

    function inserir($f) {
        return $this->db->insert('funcao', $f);
    }

    function deletar($idfuncao) {
        $this->db->where('idfuncao', $idfuncao);
        return $this->db->delete('funcao');
    }
    
    function editar($idfuncao){
        $this->db->where('idfuncao', $idfuncao);
        $result = $this->db->get('funcao');
        return $result->result();
    }
    
    function atualizar($data){
        $this->db->where('idfuncao', $data['idfuncao']);
        $this->db->set($data);
        return $this->db->update('funcao');
    }
    
    
    
    
    function get_funcao($booksClue, $column){
    $this->db->select($column);
    $this->db->from('funcao');
    $this->db->like('nomefuncao', $booksClue);        
    return $this->db->get()->result_array();
}
    
    
    
    
    
     
      
}
