<br>
<br>
<br>
<br>
<br>
<br><br>
<body style="background-color:red">

<div class="container">
<div class="row">
  <div class="col-md-10">
     &nbsp; &nbsp; &nbsp; <h1 class="text-center"> <b>UBICACIÓN DE CANDIDATOS ASAMBLEISTAS PROVINCIALES </b> </h1>
  </div>
    <div class="col-md-2">
      <p class="text-right"> <img src="<?php echo base_url('assets/images/presi.png') ?>" height="100px" alt=""> </p>
    </div>
  </div>
</div>
<br>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="mapaLugares" style="height:500px; width:100%; border:2px solid black;">
						<script type="text/javascript">
							function initMap(){
								var centro=new google.maps.LatLng(-0.9330512724983058, -78.61439822198312);
								var mapaLugaresTuristicos=new google.maps.Map(
									document.getElementById('mapaLugares'),
									{
										center:centro,
										zoom:6.5,
										mapTypeId:google.maps.MapTypeId.HYBRID
									}
								);
								<?php if($candidato3): ?>
									<?php foreach($candidato3 as $lugarTemporal): ?>
									var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can; ?>, <?php echo $lugarTemporal->longitud_can; ?>);
									var marcador=new google.maps.Marker({
										position:coordenadaTemporal,
										title:"<?php echo $lugarTemporal->dignidad_can; ?>: <?php echo $lugarTemporal->nombre_can; ?> <?php echo $lugarTemporal->apellido_can; ?>",
                    icon: "<?php echo base_url('assets/images/iconprov.png'); ?>",
										map:mapaLugaresTuristicos
									});
									<?php endforeach; ?>
								<?php endif; ?>

							}//CIERRE DE LA CLASE
						</script>
					</div>
				</div>
			</div>
		</div>
    <br><br><br>
</body>
