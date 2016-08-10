<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	private $session_id;
    public function __construct(){
        parent ::__construct();
        $this->session_id=$this->session->userdata('login');
        //print_r($this->session_id); //imprime la session
    }
    
    public function index(){
        if(!empty($this->session_id)){
            $valor=$this->session->userdata('login');
            echo "LOL";
            print_r($valor);
            echo "LOL";
            if($valor->tipo=='3'){//principal o docente principal
                redirect(base_url().'index.php/principal'); //puede ser redirect o view
            }
            else if($valor->tipo=='2'){//asistente
                redirect(base_url().'index.php/Asistente');//puede ser redirect o view
            }
            else if($valor->tipo=='1'){//alumno
                redirect(base_url().'index.php/Alumno');    //puede ser redirect o view
            }
            else{
                $this->load->view("Usuario/Header");
                $this->load->view("Usuario/inicio");
                $this->load->view("Usuario/Footer");   
            }   
        }else{
            $this->load->view("Usuario/Header");
            $this->load->view("Usuario/inicio");
            $this->load->view("Usuario/Footer");
        }
    }
    public function validar(){
        $post=new stdClass();
        $datos=new stdClass();
        
        if($this->input->post()==TRUE){
            //capturando entrada
            $post->Rut=$this->input->post("Rut");
            $post->Contrasena=$this->input->post("Clave");
            //cargando modelo
            $this->load->model("usuario_model");
            //Obteniendo datos
            $Salida=$this->usuario_model->validar($post)[0];
            $datos->Session=$Salida;
            //print_r($post); //muestra la entrada del formulario 
            //print_r($Salida); //muestra la salida del modelo 
            if($Salida==NULL){
                $datos->$Registro;
                $Registro->Tipo='0';
                $this->load->view("Usuario/inicio");
            }
            if($Salida->tipo=='3'){//Academico principal
                $this->session->set_userdata("principal");//crea la session con nombre
                $this->session->set_userdata("login",$Salida);
                $this->index();
            }
            else if($Salida->tipo=='2'){//Academico asistente
                $this->session->set_userdata("Asistente");//crea la session con nombre
                $this->session->set_userdata("login",$Salida);
                $this->index();
            }
            else if($Salida->tipo=='1'){//Alumno
                $this->session->set_userdata("Alumno");//crea la session con nombre
                $this->session->set_userdata("login",$Salida);
                $this->index();
            }
        }
        else{
            $this->load->view("Usuario/Header");
            $this->load->view("Usuario/inicio");//no entra y sale a la pantalla principal
            $this->load->view("Usuario/Footer");
        }
        
    }
    public function salir(){//destruye la session php
        $this->session->unset_userdata(array('login'=>''));
        $this->session->sess_destroy();
        $this->load->view("Usuario/Header");
        $this->load->view("Usuario/inicio");
        $this->load->view("Usuario/Footer");
    }
    
}
