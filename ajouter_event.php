<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            ><!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a><a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                           <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des promotions
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="tables.php">Afficahge des promotions</a><a class="nav-link" style="font-size: 13px;" href="index.html">Ajouts des promotions</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="../../../categorie/views/tables.php">Afficahge des categories</a><a class="nav-link" style="font-size: 13px;" href="../../../categorie/views/index.html">Ajouts des categories</a></nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts3"
                                ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Gestions des évenements
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" style="font-size: 13px;" href="afficher_event.php">Afficahge des évenements</a><a class="nav-link" style="font-size: 13px;" href="ajouter_event.php">Ajouts des évenements</a>
                                                                    <a class="nav-link" style="font-size: 13px;" href="afficher_reservation.php">Afficher les réservations</a></nav>

                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
         
          
   <div id="layoutSidenav_content">
                <main style="padding: 30px;">
                    <div class="container-fluid">
                        <h1 class="text-center font-weight-light my-1" style="padding-bottom: 30px;padding-top: 30px;">Ajouter un évenement</h1>
                        <center>  

  

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
         
          <div class="form-group">
          <a1>Destination : </a1>
          <input type="text" name="destination" class="form-control" placeholder="Destination" minlength="1" required oninvalid="setCustomValidity('Choisir destination')" oninput="setCustomValidity('')" autofocus>
          </div>
          <div class="form-group">
          <a1> Date de départ  : </a1>
          <input id="datetime" name="debut" type="date" class="form-control" placeholder="Date départ" autofocus>
          </div>
          <div class="form-group">
            <a1>Date de retour : </a1>
          <input id="datetime2" name="fin" type="date" class="form-control" placeholder="Date retour" autofocus>
          </div>
          <div class="form-group">
          <a1>Tarif : </a1>
          <input type="text" name="tarif" class="form-control" placeholder="Tarif" required oninvalid="setCustomValidity('Choisir Tarif')" oninput="setCustomValidity('')"  autofocus>
          </div>
          <div class="form-group">
          <a1>Photo de l'event : </a1>
          <input type="file" name="photo" class="form-control" placeholder="Photo"  autofocus>
          </div>

          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    
  </div>
</main>
 
            </div>
        </div>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>

         <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
      $('#datetime').datepicker({
    timepicker: true,
    datepicker: true,
    minDate: 0,
    onShow: function(ct){
        this.setOptions({
           maxDate: $('#datetime2').val() ? $('#datetime2').val() : false
        })
    }
})

$("#datetime2").datepicker({
    timepicker: true,
    datepicker: true,
    onShow: function(ct){
        this.setOptions({
            minDate: $('#datetime').val() ? $('#datetime').val() : false
        })
    }
})


    </script>
    </script>

    </body>
</html>
