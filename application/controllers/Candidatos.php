<?php

    class Candidatos extends CI_Controller
    {
        function __construct()
        {
            parent::__construct();
            //cargar un modelp
           $this->load->model('Candidato');



        }

        //Funcion que renderiza la vista index
        public function index(){
          $data['candidatos']=$this->Candidato->obtenerTodos();

            $this->load->view('header');
            $this->load->view('candidatos/index',$data);
            $this->load->view('footer');
        }

        //Funcion que renderiza la vista nuevo
        public function nuevo(){
            $this->load->view('header');
            $this->load->view('candidatos/nuevo');
            $this->load->view('footer');
        }

        public function nosotros(){
          $this->load->view('header');
          $this->load->view('candidatos/nosotros');
          $this->load->view('footer');

        }

        public function noticias(){
          $this->load->view('header');
          $this->load->view('candidatos/noticias');
          $this->load->view('footer');

        }
        public function requisitos(){
          $this->load->view('header');
          $this->load->view('candidatos/requisitos');
          $this->load->view('footer');

        }
        public function guardar(){
          $datosNuevosCandidato=array("dignidad_can"=>$this->input->post('dignidad_can'),"apellido_can"=>$this->input->post('apellido_can'),
          "nombre_can"=>$this->input->post('nombre_can'),"edad_can"=>$this->input->post('edad_can'),"movimiento_can"=> $this->input->post('movimiento_can'),
          "titulo_can"=>$this->input->post('titulo_can'),"latitud_can"=>$this->input->post('latitud_can'),"longitud_can"=>$this->input->post('longitud_can'),
          "tipo_can"=>$this->input->post('tipo_can')
        );
        if($this->Candidato->insertar($datosNuevosCandidato)){
          redirect('candidatos/index');

        }else{
          echo "<h1>ERROR AL INSERTAR</h1>";
        }

     }
     //FUNCION PARA ELIMINAR CONSTRUCTORES
     public function eliminar($id_can){
       if ($this->Candidato->borrar($id_can)){
         redirect('candidatos/index');
         // code...
       } else {
         echo "ERROR AL BORRAR :/";
       }
     }

        }//cierre de la clases NOOOOOOOOOOO BORRRAARRRR

?>
