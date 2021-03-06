<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Salvando Vidas - Cajamarca | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <div class="login-logo">
    <img src="imagen/login.png" class="login-logo" height="190">
  </div>
  
  <div class="login-box-body">
    <p class="login-box-msg">Asociación Salvando Vidas - Cajamarca</p>  
    <form action="../SV-Logica/control.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" id="id_buscar" name="buscar_txt">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="id_pass" name="pass_txt">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
          <div class="col-xs-8">
          </div>
         
          <div class="col-xs-4">
            <button type="submit" id="enviar" name="enviar_sb" value="Ingresar" class="btn btn-default btn-block btn-flat">Ingresar</button>
          </div>
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
</body>
</html>

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>