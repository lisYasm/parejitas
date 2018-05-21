<?php 
  date_default_timezone_set('America/La_Paz');
  include("conexion.php");
 /* $sql="select * from one_player";
  $resultado=mysqli_query($conexion, $sql);
  while ($consulta = mysqli_fetch_array($resultado)) {
    echo $consulta['puntaje'];
    echo " ";
  }
  mysqli_close($conexion);*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BROKEN HEART</title>
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="production/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-heart"></i> <span>BROKEN HEART</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile">
              <div class="profile_pic">
                <img src="production/images/logo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>FULL STACK</span>
                <h2></h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <br>
                <br>
                <br>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-heart-o"></i> SICA </a></li>
                  <li><a href="friendzone.php"><i class="fa fa-heart"></i> FRIENDZONE </a></li>
                  <li><a href="junior.php"><i class="fa fa-heart-o"></i> JUNIOR </a></li>
                  <li><a href="senior.php"><i class="fa fa-heart"></i> SENIOR</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>