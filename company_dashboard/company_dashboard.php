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
            include'company_header_sidebar_panel.php';
      ?>
        <main>
                <div class="container-fulid">
                    <div class="col-sm-12">
                            <h1>Company_dashboard</h1>
                    </div>
                </div>
        </main>
  </body>
  </html>