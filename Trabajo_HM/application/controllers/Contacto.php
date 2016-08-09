<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));
        $this->load->model("ContactoModel");
		
    }
    function vista($num,$datos=FALSE){//función de vistas
        $this->load->view("Contacto/Header");
        $Datos=new stdClass();
        $Datos->datos=$datos;
        if($num==1){
            $this->load->view("Contacto/Inicio",$Datos);
        }
        else if ($num==2){
            $this->load->view("Contacto/PerfilContacto",$Datos);
        }
        else if ($num==3){
            //print_r($Datos->datos);
            $this->load->view("Contacto/AgregarContacto",$Datos);
        }
        else if ($num==4){
            //print_r($Datos->datos);
            $this->load->view("Contacto/ModificarContacto",$Datos);
        }
        else if ($num==5){
            //print_r($Datos->datos);
            $this->load->view("Contacto/Confirmacion",$Datos);
        }
        else{
            $this->load->view("Contacto/Inicio");
        }
        $this->load->view("Contacto/Footer");
    }
    
    public function index(){//funciones
        $datos=$this->ContactoModel->ConsultarTodo();
        //print_r ($datos);
        $this->vista(1,$datos);
    }
    public function AccionContacto(){
        $post=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Rut','Rut','required|trim|integer');
            if($this->form_validation->run()==FALSE){
                echo '<div class="alert alert-danger" role="alert">
            <strong>Opsss!</strong> No se ingresaron algunos campos de texto vuelve a intentarlo</div>';
            }
            else{
                $post->Rut=$this->input->post('Rut');
                $post->Tel=$this->input->post('Telefono');
                $post->Tipo=$this->input->post('Tipo');
                $post->Accion=$this->input->post('Accion');
                //print_r ($post);    
                if($post->Accion=='Borrar'){
                    //Borrar Telefono
                    $post1=new stdClass();
                    $post1=$this->ContactoModel->ContactoUnico($post);
                    $datos=new stdClass();
                    $datos->Nombre=$post1[0]->nombres." ".$post1[0]->apellido_paterno." ".$post1[0]->apellido_materno;
                    $datos->accion="Borrar";
                    $datos->Rut=$post1[0]->rut;
                    $datos->Tel1=$post1[0]->Telefono;
                    $datos->Tel2=$post1[0]->Telefono;
                    $datos->Tipo=$post1[0]->Parte;
                    $this->vista(5,$datos);
                    
                }
                else if($post->Accion=='Modificar'){
                    //Modificar Telefono
                    $datos=$this->ContactoModel->ConsultarTodo();
                    $this->vista(4,$this->ContactoModel->ContactoUnico($post));
                } 
                else if($post->Accion=='Agregar Telefono'){
                    //Agregar Nuevo Tel----1 solamente
                    $this->vista(3,$this->ContactoModel->ContactoUnico1($post));
                }
                else if($post->Accion=='Ver'){
                    //Ver
                    $this->MostrarContacto($post);
                }
            }
        }
        else{
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
            echo '<div class="alert alert-danger" role="alert">
         <strong>Opsss! </strong>Ocurrio un error</div>';
        }
        
    }
    function MostrarContacto($post=null){
        $DATE=$this->ContactoModel->ContactoUnico1($post);
        $this->vista(2,$DATE);
    }
    public function BorrarTelefonoContacto(){
        $post=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Tel2','Tel2','required|trim');
            $this->form_validation->set_rules('Rut','Rut','required|trim|integer');
            $this->form_validation->set_rules('Tel2','Tel2','required|trim');
            $post->Rut=$this->input->post('Rut');
            $post->Tel=$this->input->post('Tel1');
            $post->Confirmacion=$this->input->post('confirmacion');
            //print_r($post);
            if($post->Confirmacion=='Si'){
                if($this->ContactoModel->BorrarContacto($post)){
                    echo '<div class="alert alert-success" role="alert">
            <strong>Se modifico Correctamente!</strong> </div>';
                    $this->vista(1,$this->ContactoModel->ConsultarTodo());
                }
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
         <strong>No se Modifico </strong></div>';
                $this->vista(1,$this->ContactoModel->ConsultarTodo());
            }
        }
        else{
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
            //$output->message=
            echo '<div class="alert alert-danger" role="alert">
         <strong>Opsss! </strong>Ocurrio un error</div>';
        }
    }
    public function AgregarTelefono($post=null){
        $post=new stdClass();
        $output=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Rut','Rut','required|trim|integer');
            $post->Nombre=$this->input->post('nombre');
            $post->Rut=$this->input->post('Rut');
            $post->Tipo=$this->input->post('Tipo');
            $post->Tel1=$this->input->post('Tel1');
            $post->Tel2=$this->input->post('Tel1');
            $post->accion="Agregar";
            if($this->form_validation->run()==FALSE){
                $output->message='<div class="alert alert-danger" role="alert">
            <strong>Opsss!</strong> No se ingresaron algunos campos de texto vuelve a intentarlo</div>';
            }
            else{
                //print_r($post);
                $this->vista(5,$post);
            }
        }
        else{
            
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
            echo '<div class="alert alert-danger" role="alert">
            <strong>Opsss!</strong> No se ingresaron algunos campos de texto vuelve a intentarlo</div>';
        }
    }
    public function AgregarTelefonoContacto(){
        $post=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Tel2','Tel2','required|trim');
            $post->Rut=$this->input->post('Rut');
            $post->Tel=$this->input->post('Tel1');
            $post->Tipo=$this->input->post('Tipo');
            $post->Confirmacion=$this->input->post('confirmacion');
            //print_r($post);
            if($post->Confirmacion=='Si'){
                //print_r($post);
                if($this->ContactoModel->AgregarContacto($post)){
                    echo '<div class="alert alert-success" role="alert">
            <strong>Se modifico Correctamente!</strong> </div>';
                }
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
         <strong>No se Modifico </strong></div>';
            }
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
        }
        else{
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
            //$output->message=
            echo '<div class="alert alert-danger" role="alert">
         <strong>Opsss! </strong>Ocurrio un error</div>';
        }
    }
    public function ModificarTelefono($post=null){
        $post=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Tel2','Tel2','required|trim');
            $post->Nombre=$this->input->post('nombre');
            $post->Rut=$this->input->post('Rut');
            $post->Tipo=$this->input->post('Tipo');
            $post->Tel1=$this->input->post('Tel1');
            $post->Tel2=$this->input->post('Tel2');
            $post->accion="Modificar";
            //print_r($post);
            if($this->form_validation->run()==FALSE){
                echo '<div class="alert alert-danger" role="alert">
         <strong>Opsss! </strong>Ocurrio un error</div>';
                $this->vista(1,$this->ContactoModel->ConsultarTodo());
            }
            else{
                $this->vista(5,$post);
            }
        }
        else{
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
            //$output->message=
            echo '<div class="alert alert-danger" role="alert">
         <strong>Opsss! </strong>Ocurrio un error</div>';
        }
    }
    public function ModificarTelefonoContacto(){
        $post=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Tel2','Tel2','required|trim');
            $post->Rut=$this->input->post('Rut');
            $post->Tel1=$this->input->post('Tel1');
            $post->Tel2=$this->input->post('Tel2');
            $post->Confirmacion=$this->input->post('confirmacion');
            //print_r($post);
            if($post->Confirmacion=='Si'){
                if($this->ContactoModel->ModificarContacto($post)){
                    echo '<div class="alert alert-success" role="alert">
            <strong>Se modifico Correctamente!</strong> </div>';
                }
            }
            else{
                echo '<div class="alert alert-danger" role="alert">
         <strong>No se Modifico </strong></div>';
            }
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
        }
        else{
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
            //$output->message=
            echo '<div class="alert alert-danger" role="alert">
         <strong>Opsss! </strong>Ocurrio un error</div>';
        }
    }
    
    public function filtro(){
        $post=new stdClass();
        $output=new stdClass();
        if($this->input->post()==TRUE){
            $post->Rut=$this->input->post('Rut');
            $post->Tipo=$this->input->post('Tipo');
            $post->Tel=$this->input->post('Numero');
            //echo $this->input->post('Numero')." ";
            //print_r($post);echo ".  ";
            $datos=$this->ContactoModel->Filtro($post);
            if($datos){
                echo '<div class="alert alert-success" role="alert">
        <strong>Se encontro resultados!</strong> </div>';
            }
            else{
                 echo '<div class="alert alert-danger" role="alert">
        <strong>Opsss!</strong> No se encontraron</div>';
                $datos=$this->ContactoModel->ConsultarAlumnos();
            }
        }
        else{
            $datos=$this->ContactoModel->ConsultarAlumnos();
            $this->vista(1,$datos);
        }
        
        $this->vista(1,$datos);
    }
    function validacionfiltro($post){
        if($post->Rut!=''){
            return TRUE;
        }
        else{
            if($post->Tipo!='Elija'){
                return TRUE;
            }
            else{
                if($post->Tel=''){
                    return FALSE;
                }
                else{
                    return TRUE;
                }
            }
        }
    }
    public function Letra(){
        $post=new stdClass();
        $output=new stdClass();
        if($this->input->post()==TRUE){
            $this->form_validation->set_rules('Letra','Letra','required|trim');
            if($this->form_validation->run()==FALSE){
                $output->message='<div class="alert alert-danger" role="alert">
            <strong>Opsss!</strong> No se ingresaron algunos campos de texto vuelve a intentarlo</div>';
            }
            else{
                $this->vista(1,$this->ContactoModel->ConsultaLetra($this->input->post('Letra')));
                echo '<div class="alert alert-success" role="alert">
            <strong>Se agrego Correctamente!</strong> </div>';
            }
        }
        else{
            
            $this->vista(1,$this->ContactoModel->ConsultarTodo());
        }
    }
}
