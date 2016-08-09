<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_model{
    public function Validar($post){
        $select="select user as Rut,nombre as Nombre, contrasenhia as contrasena, tipo as tipo from usuarios where user='";
        $select.=$post->Rut;
        $select.="' and contrasenhia='";
        $select.=$post->Contrasena;
        $select.="'";
        $datos= $this->db->query($select);
        if($datos->num_rows() > 0){
            return $datos->result();
        }
        else{
            return NULL;
        }
        $this->db->close();
    }
}