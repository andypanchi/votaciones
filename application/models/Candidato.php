<?php
class Candidato extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  //funcion para insertar un instructor un instructor en mysql
  function insertar($datos){

  return $this->db->insert("candidato",$datos);
  }
  //FUNCION PARA CONSULTAR Instructores

  function obtenerTodos(){
    $listadoCandidatos=$this->db->get("candidato");

    if($listadoCandidatos->num_rows()>0){//SI HAY DATOOOOOS
      return $listadoCandidatos->result();
    }else {
      return false;
    }
  }
  //BORRAR Instructores
  function borrar($id_can){
    //DELTE FROM INSTRUCTOR WHERE id_ins
    $this->db->where("id_can",$id_can);
    if ($this->db->delete("candidato")) {
      return true;
    } else {
      return false;
    }

  }
}
 ?>
