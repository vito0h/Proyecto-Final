<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class principal extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        if($this->Validacion()){
            $datos=new stdClass();
            $datos->registro=$this->session->userdata('login');
            $this->load->view("academico_principal",$datos);
        }
    }
    function Validacion(){
        if(!empty($this->session->userdata('login'))){
            $valor=$this->session->userdata('login');
            //print_r($valor);
            if($valor->tipo=='3'){
                return TRUE;
            }
            else if($valor->tipo=='2'){
                redirect(base_url().'index.php/Asistente');//puede ser redirect o view
                return FALSE;
            }
            else if($valor->tipo=='1'){
                redirect(base_url().'index.php/Alumno');    //puede ser redirect o view
                return FALSE;
            }
            else{
                $string->session=new stdClass();
                $string->session->rut=$this->session->userdata('login');
                $this->session->unset_userdata(array('login'=>''));
                $this->session->sess_destroy();
                redirect(base_url().'index.php/Inicio/',NULL);
            }   
        }else{
                      
        }
    }
}