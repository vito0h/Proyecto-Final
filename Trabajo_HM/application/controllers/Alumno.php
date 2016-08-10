<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumno extends CI_Controller {
    
    public function index(){
        if($this->validacion()){
            $datos=new stdClass();
            $datos->registro=$this->session->userdata('login');
            $this->load->view("alumno_principal",$datos);
        }
    }
    function Validacion(){
        if(!empty($this->session->userdata('login'))){
            $valor=$this->session->userdata('login');
            //print_r($valor);
            if($valor->tipo=='3'){
                redirect(base_url().'index.php/principal');//puede ser redirect o view
                return FALSE;
            }
            else if($valor->tipo=='2'){
                redirect(base_url().'index.php/Asistente');//puede ser redirect o view
                return FALSE;
            }
            else if($valor->tipo=='1'){
                return TRUE;
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