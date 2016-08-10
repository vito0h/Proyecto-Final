<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asistente extends CI_Controller {
    public function index(){
        if($this->Validacion()){
            $datos=new stdClass();//object
            $datos->registro=$this->session->userdata('login');//variable q se vera adentro
            $this->load->view("administrativo_principal",$datos);
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
                return TRUE;
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