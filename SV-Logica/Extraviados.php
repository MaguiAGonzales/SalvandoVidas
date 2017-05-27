<?php
session_start();
if (!isset($_SESSION["administrador"])){
  header("location:salir.php");
}else{
?>
<?php include('../SV-Presentacion/template_cabecera.php') ?>

  <!--contenido va aqui -->
  <div class="content-wrapper">
    <section class="content">  

    <!-- Filtro  -->

    <div class="row"> 
      <?php include 'LBuscarExtraviados.php'; ?> 
    </div>

    <!-- ./  filtro -->

    <!-- tabla   -->

    <div class="row" >
    </div>

    <!-- ./  tabla -->

     
    </section>
  </div>
  <!-- fin de contenido -->


  <?php
    $script_module='modUsuario.js';
   ?>

<?php include('../Sv-Presentacion/template_footer.php') ?>
<?php } ?>