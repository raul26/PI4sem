<?php $this->load->view("head"); ?>
<body>
  <div class="container">
    <?php $this->load->view("navbar"); ?>
    <div class="aboutUs">
      <div class="panel panel-default">
        <div class="panel-heading">Estados de los elementos</div>
        <table class="table">
          <thead><tr><th>Nombre</th><th>Estado</th><th>hora</th><th>fecha</th></tr></thead>
          <tbody>
            <?php
            foreach($items as $fila){
              echo "<tr><td>".$fila['nombre_objeto']."</td><td>".$fila["status_objeto"]."</td><td>".$fila["hora"]."</td><td>".$fila["fecha"]."</td></tr>"; 
            }
            ?>  
          </tbody>
        </table>
      </div>
    <!--Aqui empieza lo de las imagenes truculentas-->
    <div class="row">
      <h2>Diagramas</h2>
      <div class="col-sm-6">
        <div class="diagrama">
          <img src="<?php echo base_url("assets/images/int1.jpg");?>">
            <?php
            foreach($items as $fila){
              $id=$fila["id_objeto"];
              if($id==6 OR $id==5 OR $id==3 OR $id==1){
                if($fila["status_objeto"]=="0"){
                  echo "<div class='elemento ".$fila['nombre_objeto']." off' data-toggle='tooltip' data-placement='bottom' title='".$fila['nombre_objeto']."' ></div>"; 
                }else{
                  echo "<div class='elemento ".$fila['nombre_objeto']."' data-toggle='tooltip' data-placement='bottom' title='".$fila['nombre_objeto']."'></div>"; 
                }
              }
            }
            ?>  
        </div>
      </div> 
      <div class="col-sm-6">
        <div class="diagrama">
          <img src="<?php echo base_url("assets/images/int2.jpg");?>">
            <?php
            foreach($items as $fila){
              $id=$fila["id_objeto"];
              if($id==2 OR $id==4){
                if($fila["status_objeto"]=="0"){
                  echo "<div class='elemento ".$fila['nombre_objeto']." off' data-toggle='tooltip' data-placement='bottom' title='".$fila['nombre_objeto']."'></div>"; 
                }else{
                  echo "<div class='elemento ".$fila['nombre_objeto']."' data-toggle='tooltip' data-placement='bottom' title='".$fila['nombre_objeto']."'></div>"; 
                }
              }
            }
            ?>  
        </div>
      </div> 
    </div> 
  </div>
  </div>
<script>
  $(document).ready(function(){
    $('.elemento').tooltip()
  });
</script>
</body>
