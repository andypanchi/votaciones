<?php

class Reporte extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  function obtenerTodosPresidente(){
    $this->db->where('dignidad_can','PRESIDENTE');
    $listadoCandidatos=$this->db->get("candidato");

    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }

  function obtenerTodosNacional(){
    $this->db->where('dignidad_can','ASAMBLEISTA NACIONAL');
    $listadoCandidatos=$this->db->get("candidato");

    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }

  function obtenerTodosProvincial(){
    $this->db->where('dignidad_can','ASAMBLEISTA PROVINCIAL');
    $listadoCandidatos=$this->db->get("candidato");

    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }

  function obtenerTodosTipoDerecha(){
    $this->db->where('tipo_can','DERECHA');
    $listadoCandidatos=$this->db->get("candidato");

    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }

  function obtenerTodosTipoIzquierda(){
    $this->db->where('tipo_can','IZQUIERDA');
    $listadoCandidatos=$this->db->get("candidato");

    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }

}


?>
