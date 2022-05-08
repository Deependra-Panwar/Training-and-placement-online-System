<?php
    
    session_start();

    if(!isset($_SESSION['username'])) 
    {
        header('location:index.php');
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <title>Admin Dashbaord</title>
    <!---css-->
    <link href="../css/style.css" rel="stylesheet">    
    <!-- charts.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>
  <body>
      <?php
            include'header_sidebar_panel.php';
      ?>
      
                                <!-- main container -->
                      
          <main>
            <div class="mt-5 pt-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-12 mt-2">
                    <h4>Dashboard</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-3 mb-3">
                    <div class="card text-white bg-primary mb-3 h-100" style="max-width: 14rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">view Details</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 mb-3">
                    <div class="card text-white bg-success mb-3 h-100" style="max-width: 14rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">view Details</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 mb-3">
                    <div class="card text-white bg-warning mb-3 h-100" style="max-width: 14rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">view Details</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 mb-3">
                    <div class="card text-white bg-danger mb-3 h-100" style="max-width: 14rem;">
                      <div class="card-header">Header</div>
                      <div class="card-body">
                        <h5 class="card-title">Primary card title</h5>
                        <p class="card-text">view Details</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6" style="position: relative; height:20vh; width:20vw ">
                      <canvas id="myChart" aria-level="chart" role="img"></canvas>
                      <script src="js/chart.js"></script>
                  </div> 
                </div>
              </div> 
            </div>
          </main>
                                <!-- main container -->







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>