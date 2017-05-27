<?php
session_start();
session_destroy();
header("location:../SV-Presentacion/login.php")
?>