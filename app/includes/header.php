<?php
  session_start();
  include_once("./includes/funcoes.php");
  //valido se token é valido isso so ocorrer se login for valido
  (isset($_SESSION["log_token"])) ? $token = trim($_SESSION["log_token"]) : $token = null;
  if ($token != $funcoes->token(date("Ymd"))){
    echo "<script language=\"javascript\"> location.href='index.php';</script>";
    session_destroy();
    die();
    exit();
  }elseif ($_SESSION["log_data"] != date('Y-m-d')){
    echo "<script language=\"javascript\"> location.href='index.php';</script>";
    session_destroy();
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Agendamento | Agendix - Carros & Ambientes </title>

    <!-- Bootstrap -->
    <link href="./gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="frm_principal.php" class="site_title"><i class="fa fa-paw"></i> <span>Agendix</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="./img/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem vindo,</span>
                <h2><?php echo $_SESSION["log_nome"];?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                      <li><a href="index2.html">Dashboard2</a></li>
                      <li><a href="index3.html">teste</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

           
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="./img/user.png" alt=""><?php echo $_SESSION["log_nome"];?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="frm_trocasenha.php">Perfil</a>

                    
                      <a class="dropdown-item"  href="./logout.php"><i class="fa fa-sign-out pull-right"></i> Sair</a>
                    </div>
                  </li>
  
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->