<?php
/**
 *
 */
class Reportes extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Reporte');

  }

  public function presidentes(){
    $data["candidato1"]=$this->Reporte->obtenerTodosPresidente();
    $this->load->view('header');
    $this->load->view('reportes/presidentes',$data);
    $this->load->view('footer');
  }

  public function nacionales(){
    $data["candidato2"]=$this->Reporte->obtenerTodosNacional();
    $this->load->view('header');
    $this->load->view('reportes/nacionales',$data);
    $this->load->view('footer');
  }
  public function provinciales(){
    $data["candidato3"]=$this->Reporte->obtenerTodosProvincial();
    $this->load->view('header');
    $this->load->view('reportes/provinciales',$data);
    $this->load->view('footer');
  }
  public function todos(){
    $data["candidato1"]=$this->Reporte->obtenerTodosPresidente();
    $data["candidato2"]=$this->Reporte->obtenerTodosNacional();
    $data["candidato3"]=$this->Reporte->obtenerTodosProvincial();
    $this->load->view('header');
    $this->load->view('reportes/todos',$data);
    $this->load->view('footer');
  }
  public function tipos(){
    $data["tipo1"]=$this->Reporte->obtenerTodosTipoDerecha();
    $data["tipo2"]=$this->Reporte->obtenerTodosTipoIzquierda();
    $this->load->view('header');
    $this->load->view('reportes/tipos',$data);
    $this->load->view('footer');
  }
}//ciere de la clase


 ?>
