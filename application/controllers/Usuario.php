<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario extends CI_Controller {
    function __construct() {
        parent::__construct();
        if (!$this->session->userdata('estou_logado')) {
            redirect('Login');
        }elseif ($this->session->userdata('logado')->perfilAcesso !="ADM"){
            redirect('Home');
        }
        $this->load->model('Usuario_model','usuario'); //Contatos é um alias 
        //para o contatos_model        
        
    }
    public function index() {
        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['usuario'] = $this->usuario->listar();
        $lista['usuario_teste'] = $this->usuario->listar();
        $this->load->view('usuario',$dados);
        $this->load->view('template/footer');
    }
    
        function inserir(){
        $dados['nomeUsuario'] = mb_convert_case($this->input->post('nomeUsuario'),MB_CASE_UPPER);
        $dados['user'] = mb_convert_case($this->input->post('user'),MB_CASE_LOWER);
        $dados['senha'] = md5($this->input->post('senha'));
        $dados['perfilAcesso'] = mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_UPPER);
        $result = $this->usuario->inserir($dados);
        if ($result == true) {
            $this->session->set_flashdata('sucesso', 'msg');
            redirect('usuario');
        }else {
            $this->session->set_flashdata('falha', 'msg');
            redirect('usuario');
        }
    }
    
    
    public function excluir($idusuario) {
        $this->usuario->deletar($idusuario);
        redirect('usuario');
        
    }
           
    
    public function editar($idusuario){
        $data['acronico'] = "MPF";
        $data['acronico'] = "Meu Projeto Framework";
        $data['usuarioEditar'] = $this->usuario->editar($idusuario);
        $data['funcao'] = $this->usuario->listar();
        $this->load->view('template/header');
        $this->load->view('usuarioEditar' , $data);
         $this->load->view('template/header');
    }
    
    public function atualizar(){
        $data['idusuario'] = $this->input->post('idusuario');
        $data['nomeusuario'] = mb_convert_case($this->input->post('nomeUsuario'),MB_CASE_UPPER);
        $data['user'] = mb_convert_case($this->input->post('user'),MB_CASE_LOWER);
        $data['senha'] = md5($this->input->post('senha'));
        $data['perfilAcesso'] = mb_convert_case($this->input->post('perfilAcesso'),MB_CASE_LOWER);
        $this->usuario->atualizar($data);
        redirect('usuario');
    }
    
    
}

