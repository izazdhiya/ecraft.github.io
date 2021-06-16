<?php
session_start();

if (!isset($_SESSION["login"])) {
      header('Location: ' . BASEURL . '/login');
      exit;
}

$admin = $data['admin'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= BASEURL; ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/favicon.ico">
  <title> <?= $data['judul'] ?> </title>

  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <link href="<?= BASEURL; ?>/css/bootstrap.min.css" rel="stylesheet" />

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <!-- CSS Files -->
  <link href="<?= BASEURL; ?>/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

</head>

  <body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          E Craft
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/dashboard/<?= $admin['email'] ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/user/<?= $admin['email'] ?>">
              <i class="material-icons">person</i>
              <p>Profil</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/product/<?= $admin['email'] ?>">
              <i class="material-icons">inventory</i>
              <p>Produk</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?= BASEURL; ?>/login/logout">
              <i class="material-icons">power_settings_new</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand"><?= $data['judul'] ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
            	<a class="navbar-item"><?= $admin['name'] ?></a>
              <li class="nav-item dropdown">
                <a class="nav-link">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->