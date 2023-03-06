<?php require "session.php";?>
<?php 
require "db_conn.php";
if (isset($_POST['submit'])) {
  $ncheq=$_GET['ncheq'];
    $typeC=$_POST['typeC'];
    $prixch=$_POST['prixch'];
    $dateC=$_POST['dateC'];
    $assur=$_POST['assur'];
$reponse = $conn->query("UPDATE `cheques` SET `typeC`='".$typeC."',`prixch`='".$prixch."',
`dateC`='".$dateC."',`assur`='".$assur."'
 WHERE  `cheques`.`ncheq` = '".$ncheq."';"); 
}
?> 
<?php
require "db_conn.php";
$ncheq=$_GET['ncheq'];
 $stmt=$conn->query("select * from cheques where ncheq='".$ncheq."' ");
      while($cat=$stmt->fetch()){
        $typeC=$cat['typeC'];
        $prixch=$cat['prixch'];
        $dateC=$cat['dateC'];
        $assur=$cat['assur'];
      }
 /*$stmt1=$conn->query("select DATE_FORMAT(dateD ,'%d/%m/%Y') AS dateD from ASSURANCE where ndos='".$ndos."' ");
      while($cat1=$stmt1->fetch()){
        $dateD=$cat1['dateD'];
      }*/
      ?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assurances HENNANI</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/mini1.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index11.php"><img src="assets/images/allianz-logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index11.php"><img src="assets/images/mini.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <!-- <div class="search-field d-none d-md-block">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">
                <div class="input-group-prepend bg-transparent">
                                    <button class="input-group-text border-0 mdi mdi-magnify"style="font-size: larger;"></button>

                </div>
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
              </div>
            </form>
          </div> -->
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="assets/images/faces/facead.svg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Administrateur</p>
                </div>
              </a>
              
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
      
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Log out </a>
              </div>
            </li>  
            <li class="nav-item nav-settings d-none d-lg-block">
              <a class="nav-link" href="logout.php">
                <i class="mdi mdi-power"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="assets/images/faces/facead.svg" alt="profile">
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Administrateur</span>
                  <span class="text-secondary text-small">Agent Général</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index11.php">
                <span class="menu-title" active>Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basicc" aria-expanded="false" aria-controls="ui-basicc">
                <span class="menu-title">Clients</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-account-group-outline menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basicc">
                
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="clientlst.php">Liste Des Clients</a></li>
                  <li class="nav-item"> <a class="nav-link" href="clientadd.php">Ajouter Un Client</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          
                <span class="menu-title">Assurance</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-shield menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="assurancelstall.php">Liste Des Assurances</a></li>
                 </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
                <span class="menu-title">Chèques</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-cash menu-icon"></i>
              </a>
              <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="chequeadd.php"> Ajouter Un Chèque </a></li>
                  <li class="nav-item"> <a class="nav-link" href="chequelstall.php"> Chèques Impayés </a></li>
                  <li class="nav-item"> <a class="nav-link" href="chequeverse.php"> Chèques À Verser Payés</a></li>
                  <li class="nav-item"> <a class="nav-link" href="chequegarantit.php"> Chèques De Garantie Payés</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item sidebar-actions">
              <span class="nav-link" >
                <div class="border-bottom">
                  <!-- <h6 class="font-weight-normal mb-3">Gestion Des Employés</h6> -->
                </div>
                <a href="logout.php" class="btn btn-block btn-lg btn-gradient-primary mt-4">Logout</a>
                
              </span>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper"style="text-align: -webkit-center;text-align-last: left;">
            <div class="page-header">
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Modifier Un Chèque</h4>
<br>
                    <form class="forms-sample"  method="POST">
                    <div class="form-group">
                        <label>Assuré</label>
                        <input type="text" class="form-control" name="assur"  placeholder="Assuré" value="<?php echo $assur?> ">
                      </div>
                      <div class="form-group">
                        <label>Montant</label>
                        <input type="text" class="form-control" name="prixch"  placeholder="Montant" value="<?php echo $prixch?> ">
                      </div>
                      <div class="form-group">
                        <label>Date D'échéance</label>
                        <input type="text" class="form-control" name="dateC"  placeholder="Date D'échéance" value="<?php echo $dateC?> ">
                      </div>
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" name="typeC"  placeholder="Type" value="<?php echo $typeC?> ">
                      </div>
                   
                     
                      <button type="submit" class="btn btn-gradient-primary me-2" name="submit" >Modifier</button>
                      <a href="chequelstall.php" class="btn btn-light">Retour</a>
                    </button>         
                     
                    </form>
                  </div>
                </div>
              </div>            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © 2022</span>
              </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
     
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>