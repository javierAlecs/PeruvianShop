<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Ayuda
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Casa</a></li>
        <li class="active">Ayuda</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> ¡Éxito!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <h4 style="font-size: 2em; text-align: center; font-weight: bold">Soporte de ayuda al Usuario:</h4>
                <div class="w3-card-4" style="width:70%">
     <div class="w3-container">
      <p style="font-weight: bold">Medio de comunicación:</p>
      <hr>
      <div class="row">
          <div class="col-xs-4">
          <img src="../images/soport.png" alt="" class="w3-left w3-circle w3-margin-right" style="width:60px">
          </div>
          <div class="col-xs-8">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus voluptate reprehenderit consectetur facilis fugiat enim consequuntur recusandae aperiam et illum sint unde, in quia repellendus asperiores tempora minima at modi.</p>
          </div>
      </div>
      
<br>
    </div>
  </div>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>

</body>
</html>
