<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactoModel extends CI_model{
    public function __construct(){
        parent::__construct();
    }
    
    public function ConsultarAlumnos(){
        $select="select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2  as Parte  from Alumnos left JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut ";
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            return $datos->result();
        }
        else{
            return show_error('Error!');
        }
        $this->db->close();
    }
    public function numAlumnos(){
        $select="SELECT * FROM alumnos";
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            return $datos->num_rows();
        }
        else{
            return show_error('Error!');
        }
        $this->db->close();
    }
    public function ConsultarTodo(){
        $select="select
funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1 as Parte from funcionarios JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut UNION
select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2  as Parte from Alumnos left JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut";
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            return $datos->result();
        }
        else{
            return show_error('Error!');
        }
        $this->db->close();
    }
    public function ConsultarProfesores(){
        $select="select funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1  as Parte from funcionarios left JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut";
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            return $datos->result();
        }
        else{
            return show_error('Error!');
        }
        $this->db->close();
    }
    public function ContactoUnico($input){
        $select="select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2 as Parte from Alumnos left JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut WHERE Alumnos.rut=";
        $select.=$input->Rut;
        $select.=" and telefonos_alumnos.numero_telefono='";
        $select.=$input->Tel;
        $select.="' UNION
select funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1 as Parte from funcionarios left JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut WHERE funcionarios.rut=";
        $select.=$input->Rut;
        $select.=" and telefonos_funcionarios.telefono='";
        $select.=$input->Tel;
        $select.="'";
        $datos= $this->db->query($select);
        if($datos->num_rows() >= 0){
            //print_r ($datos->result()); 
            return $datos->result();
        }
        else{
            return show_error('Error!');
        }
        $this->db->close();
    }
    public function ContactoUnico1($input){
        $select="select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2 as Parte from Alumnos left JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut WHERE Alumnos.rut=";
        $select.=$input->Rut;
        $select.=" UNION
select funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1 as Parte from funcionarios left JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut WHERE funcionarios.rut=";
        $select.=$input->Rut;
        $datos= $this->db->query($select);
        if($datos->num_rows() >= 0){
            //print_r ($datos->result()); 
            return $datos->result();
        }
        else{
            return show_error('Error!');
        }
        $this->db->close();
    }
    public function AgregarContacto($input){
        if($input->Tipo == 1){//Funcionarios
            $select1="SELECT * from telefonos_funcionarios where telefonos_funcionarios.rut=";
            $select1.=$input->Rut;
            $select1.=" and telefonos_funcionarios.telefono='";
            $select1.=$input->Tel;
            $select1.="'";
            $datos= $this->db->query($select1);
            $this->db->close();
            if($datos->num_rows() > 0){//UPDATE
                //print_r ($datos->result());
                $select2=null;
            }
            else{
                $select2="insert into telefonos_funcionarios values(";
                $select2.=$input->Rut;
                $select2.=",'";
                $select2.=$input->Tel;
                $select2.="')";//INSERT INTO `telefono` (`Telefono`, `Alumno_Rut`) VALUES ('ads', '1')
            }
            if($select2!=null){
                if($this->db->query($select2)){
                    return TRUE;
                }
                else{
                    return FALSE;
                }
            }
        }
        else{//Alumnos
            $select1="SELECT * from telefonos_alumnos where telefonos_alumnos.rut=";
            $select1.=$input->Rut;
            $select1.=" and telefonos_alumnos.numero_telefono='";
            $select1.=$input->Tel;
            $select1.="'";
            $datos= $this->db->query($select1);
            $this->db->close();
            if($datos->num_rows() > 0){
                //print_r ($datos->result()); 
                $select2=null;
            }
            else{
                $select2="insert into telefonos_alumnos values(";
                $select2.=$input->Rut;
                $select2.=",'";
                $select2.=$input->Tel;
                $select2.="')";  //INSERT INTO `telefono` (`Telefono`, `Alumno_Rut`) VALUES ('ads', '1')
            }
            if($select2!=null){
                if($this->db->query($select2)){
                    return TRUE;
                }
                else{
                    return FALSE;
                }
            }
            else{
                return FALSE;
            }
        }
        $this->db->close();
    }
    public function BorrarContacto($post){
        $select="SELECT * FROM alumnos where rut=";
        $select.=$post->Rut;
        //echo $select;
        $datos= $this->db->query($select);
        $this->db->close();
        if($datos->num_rows() > 0){
            $select1="DELETE FROM telefonos_alumnos WHERE telefonos_alumnos.rut =";
            $select1.=$post->Rut;
            $select1.=" and numero_telefono='";
            $select1.=$post->Tel;
            $select1.="'";
            
        }
        else{
            $select1="DELETE FROM telefonos_funcionarios WHERE telefonos_funcionarios.rut =";
            $select1.=$post->Rut;
            $select1.=" and telefonos_funcionarios.telefono='";
            $select1.=$post->Tel;
            $select1.="'";
        }
        //echo $select1;
        if($this->db->query($select1)){
            return TRUE;
        }
        else{
            return FALSE;
        }
        $this->db->close();
    }
    public function ModificarContacto($post){
        $select="SELECT * FROM alumnos where rut=";
        $select.=$post->Rut;
        //echo $select;
        $datos= $this->db->query($select);
        $this->db->close();
        if($datos->num_rows() > 0){
            
            $select1="UPDATE telefonos_alumnos SET numero_telefono='";
            $select1.=$post->Tel2;
            $select1.="' WHERE telefonos_alumnos.numero_telefono = '";
            $select1.=$post->Tel1;
            $select1.="' AND telefonos_alumnos.rut = ";
            $select1.=$post->Rut;//UPDATE telefono SET Telefono = '1114788436' WHERE telefono.Telefono = '11147884367' AND telefono.Alumno_Rut = 18000216;
            
        }
        else{
            $select1=" UPDATE telefonos_funcionarios SET telefono='";
            $select1.=$post->Tel2;
            $select1.="' WHERE telefonos_funcionarios.telefono = '";
            $select1.=$post->Tel1;
            $select1.="' AND telefonos_funcionarios.telefono.rut = ";
            $select1.=$post->Rut;
        }
        //echo $select1;
        if($this->db->query($select1)){
            return TRUE;
        }
        else{
            return FALSE;
        }
        $this->db->close();
    }
    public function Filtro($post){
        $select=NULL;
        //print_r($post);
        if($post->Tipo=='Profesor'){//------------------------------------------------
            //echo "profesor";
            $select="select funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1  as Parte from funcionarios JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut ";
            if($post->Rut!=''){//LIKE "c%" or apellido_paterno like "c%" or apellido_materno like "c%"
                $select.=" WHERE funcionarios.nombres LIKE '".$post->Rut."%' or apellido_paterno like '".$post->Rut."%' OR apellido_materno like '".$post->Rut."%'";
                if($post->Tel!=''){
                    $select.=" and telefonos_funcionarios.telefono='";
                    $select.=$post->Tel;
                    $select.="'";
                }
            }
            else{
                if($post->Tel!=''){
                    $select.=" WHERE telefonos_funcionarios.telefono like '";
                    $select.=$post->Tel;
                    $select.="%'";
                }
            }
            
        }
        else if($post->Tipo=='Alumno'){//--------------------------------------------
            $select="select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2  as Parte from Alumnos JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut";
            if($post->Rut!=''){//rut es el nombre
                $select.=" WHERE Alumnos.nombres LIKE '".$post->Rut."%' or apellido_paterno like '".$post->Rut."%' OR apellido_materno like '".$post->Rut."%'";
                if($post->Tel!=''){
                    $select.=" and telefonos_alumnos.numero_telefono='";
                    $select.=$post->Tel;
                    $select.="'";
                }
            }
            else{
                if($post->Tel!=''){
                    $select.=" WHERE telefonos_alumnos.numero_telefono like '";
                    $select.=$post->Tel;
                    $select.="%'";
                }
            }
            
        }
        else{//---------------------------------------------------------------------------
            $select="select funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1 as Parte from funcionarios JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut  ";
            if($post->Rut!=''){//LIKE "c%" or apellido_paterno like "c%" or apellido_materno like "c%"
                $select.=" WHERE funcionarios.nombres LIKE '".$post->Rut."%' or apellido_paterno like '".$post->Rut."%' OR apellido_materno like '".$post->Rut."%'";
                if($post->Tel!=''){
                    $select.=" and telefonos_funcionarios.telefono='";
                    $select.=$post->Tel;
                    $select.="'";
                }
            }
            else{
                if($post->Tel!=''){
                    $select.=" WHERE telefonos_funcionarios.telefono like '";
                    $select.=$post->Tel;
                    $select.="%'";
                }
            }
            $select.="UNION select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2 as Parte  from Alumnos JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut";
            if($post->Rut!=''){//rut es el nombre
                $select.=" WHERE Alumnos.nombres LIKE '".$post->Rut."%' or apellido_paterno like '".$post->Rut."%' OR apellido_materno like '".$post->Rut."%'";
                if($post->Tel!=''){
                    $select.=" and telefonos_alumnos.numero_telefono='";
                    $select.=$post->Tel;
                    $select.="'";
                }
            }
            else{
                if($post->Tel!=''){
                    $select.=" WHERE telefonos_alumnos.numero_telefono='";
                    $select.=$post->Tel;
                    $select.="'";
                }
            }
        }
        //echo $select;
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            //print_r ($datos->result()); 
            return $datos->result();
        }
        else{
            return FALSE;
        }
        $this->db->close();
    }
    public function ConsultaLetra($letra){
        $select="select funcionarios.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_funcionarios.telefono as Telefono,cargo as estado,1  as Parte from funcionarios JOIN telefonos_funcionarios on telefonos_funcionarios.rut=funcionarios.rut  ";
        if($letra!=''){//LIKE "c%" or apellido_paterno like "c%" or apellido_materno like "c%"
            $select.=" WHERE funcionarios.nombres LIKE '".$letra."%' or apellido_paterno like '".$letra."%' OR apellido_materno like '".$letra."%'";
            
        }
        $select.="UNION select Alumnos.rut,nombres,apellido_paterno,apellido_materno,correo_electronico,telefonos_alumnos.numero_telefono as Telefono,estado,2  as Parte from Alumnos JOIN telefonos_alumnos on Alumnos.rut=telefonos_alumnos.rut";
        if($letra!=''){//rut es el nombre
            $select.=" WHERE Alumnos.nombres LIKE '".$letra."%' or apellido_paterno like '".$letra."%' OR apellido_materno like '".$letra."%'";
            
        }//echo $select;
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            //print_r ($datos->result()); 
            return $datos->result();
        }
        else{
            return FALSE;
        }
        $this->db->close();
    }
}