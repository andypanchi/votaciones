<br>
<br>
<br>
<br>
<br>
<br> <br>
<body style="background-color:lightblue">


<div class="container">
  <div class="row">
  <div class="col-md-6">
    <h1>LISTADO DE CANDIDATOS</h1>
  </div>
  <div class="col-md-2">
    <p class="text-right"> <img src="<?php echo base_url('assets/images/listado.png') ?>" height="60px" alt=""> </p>
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('candidatos/nuevo'); ?>" class="btn btn-primary"> <i class="glyphicon glyphicon-plus"></i>  Agregar Candidato</a>
  </div>
</div>
<br>
<?php if ($candidatos): ?>
  <table class="table table-striped table-bordered table-hover" style="color:black; border-color:black">
    <thead>
      <tr >
        <th style="border-color:black">ID</th>
        <th style="border-color:black">DIGNIDAD</th>
        <th style="border-color:black">APELLIDO</th>
        <th style="border-color:black">NOMBRE</th>
        <th style="border-color:black">EDAD</th>
        <th style="border-color:black">MOVIMIENTO</th>
        <th style="border-color:black">TÍTULO</th>
        <th style="border-color:black">LATITUD</th>
        <th style="border-color:black">LONGITUD</th>
        <th style="border-color:black">TIPO</th>
        <th style="border-color:black">ACCIONES</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($candidatos as $filaTemporal): ?>
        <tr>
          <td style="border-color:black">
            <?php echo $filaTemporal->id_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->dignidad_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->apellido_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->nombre_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->edad_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->movimiento_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->titulo_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->latitud_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->longitud_can; ?>
          </td>
          <td style="border-color:black">
            <?php echo $filaTemporal->tipo_can; ?>
          </td>
          <td style="border-color:black" class="text-center">
            <a href="<?php echo site_url('/candidatos/editar/'); ?><?php echo $filaTemporal->id_can;?>" onclick="return confirm('¿Estas seguro de editar el registro seleccionado?');" title="Editar Candidato" style="color:blue;">
              <i class="glyphicon glyphicon-pencil"></i>Editar
            </a>
            &nbsp; &nbsp; &nbsp;
            <a href="<?php echo site_url(); ?>/candidatos/eliminar/<?php echo $filaTemporal->id_can; ?>" onclick="return confirm('¿Estas seguro de eliminar el registro seleccionado?');" title="Eliminar Candidato" style="color:red;">
              <i class="glyphicon glyphicon-trash"></i>Eliminar
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

<?php else: ?>
  <h1>NO HAY DATOS</h1>
<?php endif; ?>

</div>

</body>
