<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salvando Vidas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue-light sidebar-mini">
  <div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="../SV-Logica/Usuario.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b><b>V</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Salvando</b> <b>Vidas</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
          </li>
          <li>
            <a href="../SV-Logica/salir.php"><i class="glyphicon glyphicon-log-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Menú -->
    <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu">
        <li class="header">MENÚ DE OPCIONES</li>    
          <li>
              <a href="../SV-Logica/Usuario.php">
                <i class="glyphicon glyphicon-user"></i><span>USUARIOS</span>
              </a>
          </li>

          <li>
              <a href="../SV-Logica/Mascota.php">
                <i class="fa fa-paw"></i><span>MIS MASCOTAS</span>
              </a>
          </li>

          <li>
            <a href="../SV-Logica/Adopcion.php">
              <i class="glyphicon glyphicon-heart"></i><span>ADOPCIONES</span>
            </a>
          </li>

          <li>
            <a href="../SV-Logica/VisitasMensuales.php">
              <i class="fa fa-group"></i><span>VISITAS MENSUALES</span>
            </a>
          </li>

          <li class="active treeview menu-open">
            <a href="#">
              <i class="glyphicon glyphicon-bullhorn"></i> <span>NOTIFICACIONES</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="">
              <li class="active"><a href="../SV-Logica/Denuncias.php"><i class="fa fa-circle-o"></i>Denuncias</a></li>
              <li class="active"><a href="../SV-Logica/Extraviados.php"><i class="fa fa-circle-o"></i>Extraviados</a></li>
              <li class="active"><a href="../SV-Logica/Encontrados.php"><i class="fa fa-circle-o"></i>Encontrados</a></li>
            </ul>
          </li>

          <li>
            <a href="../SV-Logica/Eventos.php">
              <i class="fa fa-calendar"></i><span>EVENTOS</span>
            </a>
          </li>

      </ul>
    </section>
  </aside>