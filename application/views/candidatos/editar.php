<br>
<br>
<br>
<br> <br> <br> <br> <br>
<body style="background-color:#ffa07a">


<div class="row">
<div class="col-md-8">
  <h1 class="text-center">EDITAR CANDIDATO 2023</h1>
</div>
<div class="col-md-4">
  <p class="text-center"> <img src="<?php echo base_url('assets/images/nuevo.png') ?>" height="60px" alt=""> </p>
</div>
<br>
<br>
<br>
<br>

<form class="" action="<?php echo site_url(); ?>/candidatos/procesarActualizacion" method="post">

    <div class="row">
      <div class="container">
        <input type="hidden" name="id_can" id="can" class="form-control" value="<?php echo $candidatoEditar->id_can; ?>">
      <div class="col-md-4">
          <label for="">Dignidad:</label>
          <br>
          <select class="form-control" name="dignidad_can" id="dignidad_can">
            <option name="dignidad_can" id="dignidad_can" value="<?php echo $candidatoEditar->dignidad_can; ?>">PRESIDENTE</option>
            <option name="dignidad_can" id="dignidad_can" value="<?php echo $candidatoEditar->dignidad_can; ?>">">ASAMBLEISTA NACIONAL</option>
            <option name="dignidad_can" id="dignidad_can" value="<?php echo $candidatoEditar->dignidad_can; ?>">">ASAMBLEISTA PROVINCIAL</option>
          </select>
      </div>
      <div class="col-md-4">
          <label for="">Apellido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese su apellido"
          class="form-control"
          name="apellido_can" value="<?php echo $candidatoEditar->apellido_can; ?>">"
          id="apellido_can">
      </div>
      <div class="col-md-4">
        <label for="">Nombre:</label>
        <br>
        <input type="text"
        placeholder="Ingrese su nombre"
        class="form-control"
        name="nombre_can" value="<?php echo $candidatoEditar->nombre_can; ?>">"
        id="nombre_can">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="container">
      <div class="col-md-4">
          <label for="">Edad:</label>
          <br>
          <input type="number"
          placeholder="Ingrese su edad"
          class="form-control"
          name="edad_can" value="<?php echo $candidatoEditar->edad_can; ?>">"
          id="edad_can">
      </div>
      <div class="col-md-4">
          <label for="">Movimiento Político:</label>
          <br>
          <select class="form-control" name="movimiento_can" id="movimiento_can">
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">CENTRO DEMOCRÁTICO</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">UNIDAD POPULAR</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">REVOLUCIÓN CIUDADANA</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">PARTIDO SOCIAL CRISTIANO</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">AVANZA</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">IZQUIERDA DEMOCRATICA</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">PACHAKUTI</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">SUMA</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">CREO</option>
            <option value="<?php echo $candidatoEditar->movimiento_can; ?>">CONSTRUYE</option>

          </select>

      </div>
      <div class="col-md-4">
          <label for="">Título Obtenido:</label>
          <br>
          <input type="text"
          placeholder="Ingrese su titulo"
          class="form-control"
          name="titulo_can" value="<?php echo $candidatoEditar->titulo_can; ?>"
          id="titulo_can">
      </div>
      <br>
      <br>
      <br> <br> <br>
      <div class="row">

        <div class="col-md-4">

            <label for="">Latitud:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la latitud"
            class="form-control" readonly
            name="latitud_can" value="<?php echo $candidatoEditar->latitud_can; ?>"
            id="latitud_can">
        </div>

        <div class="col-md-4">
            <label for="">Longitud:</label>
            <br>
            <input type="number"
            placeholder="Ingrese la longitud"
            class="form-control" readonly
            name="longitud_can" value="<?php echo $candidatoEditar->longitud_can; ?>"
            id="longitud_can">
        </div>
        <div class="col-md-4">
            <label for="">Tipo:</label>
            <br>
            <select class="form-control" name="tipo_can" id="tipo_can">
              <option name="tipo_can" id="dignidad_can" value="<?php echo $candidatoEditar->tipo_can; ?>">DERECHA</option>
              <option name="tipo_can" id="tipo_can" value="<?php echo $candidatoEditar->tipo_can; ?>">IZQUIERDA</option>

            </select>
        </div>
      </div>



      <br>
      <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/candidatos/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
<br>
    <div class="row">
      <div class="col-md-12">
        <div id="mapaUbicacion"
        style="height:500px; width:100%;
        border:2px solid black;"></div>
      </div>
    </div>
</form>


<script type="text/javascript">
function initMap(){
var centro=
new google.maps.LatLng(<?php echo $candidatoEditar->latitud_can; ?>,
<?php echo $candidatoEditar->longitud_can; ?>);
var mapa1=new google.maps.Map(
document.getElementById('mapaUbicacion'),
{
center:centro,
zoom:7,
mapTypeId:google.maps.MapTypeId.ROADMAP
}
);
var marcador=new google.maps.Marker({
position:centro,
map:mapa1,
title:"Seleccione la direccion",
icon: "<?php echo base_url('assets/images/seleccione.png'); ?>",
draggable:true
});
google.maps.event.addListener(marcador,
'dragend',function(event){
//alert("Se termino el Drag");
document.getElementById('latitud_can').value=
this.getPosition().lat();
document.getElementById('longitud_can').value=
this.getPosition().lng();
});
}//cierre de la funcion initMap
</script>
</form>
</div>
<br>
<br>
</body>
<br><br>
