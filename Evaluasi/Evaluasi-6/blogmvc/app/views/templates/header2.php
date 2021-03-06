<?php
if (!$_SESSION['user']['status'] == 'Logged In') {
  header('Location:' . BASEURL . '/Home');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman <?=$data['judul']?></title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Custom styles for this template -->
  <style>
    #wrapper {
        overflow-x: hidden;
    }

    #sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin .25s ease-out;
    -moz-transition: margin .25s ease-out;
    -o-transition: margin .25s ease-out;
    transition: margin .25s ease-out;
    }

    #sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
    width: 15rem;
    }

    #page-content-wrapper {
    min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
    }

    @media (min-width: 768px) {
    #sidebar-wrapper {
        margin-left: 0;
    }

    #page-content-wrapper {
        min-width: 0;
        width: 100%;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: -15rem;
    }
    }
  </style>

</head>

<body>


  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Halaman Admin</div>
      <div class="list-group list-group-flush px-2">
        <a href="<?= BASEURL; ?>/Dashboard" class="list-group-item list-group-item-action bg-light">Dashboard</a>
        <a href="<?= BASEURL; ?>/Dashboard/tambah" class="list-group-item list-group-item-action bg-light">Tambah</a>
        <a href="<?= BASEURL; ?>/Dashboard/logout" class="list-group-item list-group-item-action bg-light">Logout</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light mb-5 bg-light border-bottom">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto p-3 mt-2 mt-lg-0">
          </ul>
        </div>
      </nav>


