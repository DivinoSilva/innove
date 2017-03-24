<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('Cadastro_model', 'cadastro');
    }

    public function index() {
        $this->data['mensagem'] = '';
        if ($this->input->get('form') == true) {
            $this->data['mensagem'] = 'Para ter acesso ao nosso conteúdo'
                    . ' preencha corretamente o formulário abaixo.';
        }

        if ($_POST) {
            $this->cadastro->nome = $this->input->post('nome');
            $this->cadastro->sobrenome = $this->input->post('sobrenome');
            $this->cadastro->email = $this->input->post('email');
            $this->cadastro->tipo = $this->email($this->input->post('email')); 
            $this->cadastro->data_hora = date('Y/m/d H:i:s');
            $this->cadastro->ip =$_SERVER['REMOTE_ADDR'];
            
            $res = $this->cadastro->create();
            if($res){
                $this->session->set_userdata(array('ativo' => 'ebook'));
                redirect(base_url().'home/ebook');
            }
            redirect(base_url());
        }

        $this->load->view('cadastro', $this->data);
    }

    public function principal() {
        $this->load->view('principal');
    }

    public function ebook() {
         if ($this->session->userdata('ativo') != 'ebook') {
            redirect(base_url() . '?form=true');
            exit;
        }
        $this->load->view('ebook');
    }
    
    
        public function chamada() {
        $this->load->view('chamada');
    }
    
    private function email($email){
        $var =  explode("@", $email);
        $var = explode(".", $var[1]);
        $email = $var[0];
        
        $array = array("hotmail","terra","globo", "iclou", "bol", "gmail","yahoo","ig","outlook","live","uol");
        //Regra: 1 = BTB 0 = BTC
        if(in_array( strtolower($email),$array)){
            return 0;
        }
        return 1;
    }

}
