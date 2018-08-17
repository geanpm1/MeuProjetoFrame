<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('contatos_model','contatos'); //Contatos é um alias 
        //para o contatos_model        
        
    }
    public function index() {
//        $this->load->view('template/header');
        $dados['acronico'] = "MPF";
        $dados['completo'] = "Meu Projeto Framework";
        $dados['contatos'] = $this->contatos->listar();
        $this->load->view('home',$dados);
//        $this->load->view('template/footer');
    }
    
}