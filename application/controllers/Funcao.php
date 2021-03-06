<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Funcao extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }elseif ($this->session->userdata('logado')->perfilAcesso !="ADM"){
            redirect('Home');
        }
        $this->load->model('Funcao_model','funcao'); //Contatos é um alias 
        //para o contatos_model        
        
    }
    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['funcao'] = $this->funcao->listar();
        $this->load->view('funcao',$dados);
        $this->load->view('template/footer');
    }
    public function excluir($idfuncao) {
        $result = $this->funcao->deletar($idfuncao);
        if ($result == true) {
            $this->session->set_flashdata('excluirS', 'msg');
            redirect('funcao');
        } else {
            $this->session->set_flashdata('excluirE');
            redirect('funcao');
        }
        
    }
    
    function inserir(){
        $dados['nomefuncao'] = mb_convert_case($this->input->post('funcao'),MB_CASE_UPPER);
        $result = $this->funcao->inserir($dados);
        if ($result == true) {
            $this->session->set_flashdata('sucesso', 'msg');
            redirect('funcao');
        }else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('funcao');
        }
    }
    
    public function editar($idfuncao){
        $data['acronico'] = "MPF";
        $data['acronico'] = "Meu Projeto Framework";
        $data['funcaoEditar'] = $this->funcao->editar($idfuncao);
        $data['funcao'] = $this->funcao->listar();
         $this->load->view('template/header');
        $this->load->view('funcaoEditar' , $data);
         $this->load->view('template/header');
    }
    
    public function atualizar(){
        $data['idfuncao'] = $this->input->post('idfuncao');
        $data['nomefuncao'] = mb_convert_case($this->input->post('nomefuncao'),MB_CASE_UPPER);
        $this->funcao->atualizar($data);
        if ($result == true) {
            $this->session->set_flashdata('falhaA', 'msg');
            redirect('funcao');
        } else {
            $this->session->set_flashdata('sucessoA', 'msg');
            redirect('funcao');
        }
    }
    
    
}

