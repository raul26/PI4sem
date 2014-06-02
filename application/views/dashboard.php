<?php $this->load->view("head"); ?>
<body>
  <div class="container">
    <?php $this->load->view("navbar"); ?>
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
  </div>
</body>
