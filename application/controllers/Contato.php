<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contato extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('contatos_model','contatos'); //Contatos é um alias 
        //para o contatos_model        
        
    }
    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['contatos'] = $this->contatos->listar();
        $this->load->view('contato',$dados);
        $this->load->view('template/footer');
    }
    public function excluir($id) {
        $this->contatos->deletar($id);
        redirect('contato');
        
    }
    
    function inserir(){
        $dados['nome'] = $this->input->post('nome');
        $dados['email'] = $this->input->post('email');
        $dados['funcao'] = $this->input->post('funcao');
        $this->contatos->inserir($dados);
        redirect('contato');
    }
    
    public function editar($id){
        $data['acronico'] = "MPF";
        $data['acronico'] = "Meu Projeto Framework";
        $data['contatoEditar'] = $this->contatos->editar($id);
         $this->load->view('template/header');
        $this->load->view('contatoEditar' , $data);
         $this->load->view('template/header');
    }
    
    public function atualizar(){
        $data['id'] = $this->input->post('id');
        $data['nome'] = $this->input->post('nome');
        $data['email'] = $this->input->post('email');
        $data['funcao'] = $this->input->post('funcao');
        $this->contatos->atualizar($data);
        redirect('contato');
    }
    
    
}

