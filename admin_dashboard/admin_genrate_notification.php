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
              <div class="mt-5">
                <div class="container">
                <div class="row">
                <center><h4 class="pt-5">Create a Notification</h4></center>     
                </div>
                <div class="row pt-5 mt-5">
                    <div class="col-sm-1"></div>  
                    <div class="col-sm-5 mt-3">
                        <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Create a notication for Company</h5>
                                <form>
                                  <div class="mb-3">
                                      <?php
                                        include'connection.php';
                                        $selectquery= "select * from std_registration";
                                        $query= mysqli_query($con,$selectquery);
                                        $nums= mysqli_num_rows($query);
                                        ?>

                                        <label for="exampleInputEmail1" class="form-label">User</label>
                                        <select class="form-select" name="to_id">
                                          <option selected>Open this select menu</option>
                                         <?php    while($res= mysqli_fetch_array($query)){?>
                                        <option value="<?php echo $res['reg_no'] ?>"><?php echo $res['name'] ?></option>
                                            <?php } ?>
                                        </select>        
                                   </div>
                                </form>
                                <form method="post">
                                  <div class="mb-3">
                                    <label>message</label>
                                    <input type="text" class="form-control" name="messages">
                                  </div>
                                    <input type="submit" id="std_submit" class="btn btn-success btn-lg float-end" name="std_submit" value="Submit">
                                </form>
                              </div>
                            </div>    
                        </div>  
                    <div class="col-sm-5 mt-3">
                        <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Create a notication for Student</h5>
                                <form>
                                  <div class="mb-3">
                                      <?php
                                        include'connection.php';
                                        $selectquery= "select * from std_registration";
                                        $query= mysqli_query($con,$selectquery);
                                        $nums= mysqli_num_rows($query);
                                        ?>

                                        <label for="exampleInputEmail1" class="form-label">User</label>
                                        <select class="form-select" name="to_id">
                                          <option selected>Open this select menu</option>
                                         <?php    while($res= mysqli_fetch_array($query)){?>
                                        <option value="<?php echo $res['reg_no'] ?>"><?php echo $res['name'] ?></option>
                                            <?php } ?>
                                        </select>        
                                   </div>
                                </form>
                                <form method="post">
                                  <div class="mb-3">
                                    <label>message</label>
                                    <input type="text" class="form-control" name="messages">
                                  </div>
                                    <input type="submit" id="std_submit" class="btn btn-success btn-lg float-end" name="std_submit" value="Submit">
                                </form>
                              </div>
                            </div>
                        
                    </div>  
                    <div class="col-sm-1"></div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="btn-group">
                              <button type="button" class="btn  dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                Select student Name
                              </button>
                              <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
         </div>
      </main>
                                <!-- main container -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
</html>
<?php
    include'connection.php';
        if(isset($_POST['std_submit']))
        {
            
        $from_id='1';
        $to_id='2';
        $message=$_POST['messages'];
        $insert_query ="insert into notification(from_id,to_id,message) values('$from_id','$to_id','$message')";
        $res= mysqli_query($con,$insert_query);
        if($res){
            ?>
            <script>
                alert('insert successfull');
            </script>
            <?php
        }else{
             ?>
            <script>
                alert('not insert successfull');
            </script>
            <?php
        }
    }
?>
            
              
               <!---<div class="cntainer">
                    <div class=" row bg-light">
                        <center><h2>Create Notification</h2></center>
                        <div class="row">
                            <div class="col-sm-5">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Create a notication for Company</h5>
                                <form>
                                  <div class="mb-3">
                                      <?php
                                        include'connection.php';
                                        $selectquery= "select * from std_registration";
                                        $query= mysqli_query($con,$selectquery);
                                        $nums= mysqli_num_rows($query);
                                        ?>

                                        <label for="exampleInputEmail1" class="form-label">User</label>
                                        <select class="form-select" name="to_id">
                                          <option selected>Open this select menu</option>
                                         <?php    while($res= mysqli_fetch_array($query)){?>
                                        <option value="<?php echo $res['reg_no'] ?>"><?php echo $res['name'] ?></option>
                                            <?php } ?>
                                        </select>        
                                   </div>
                                </form>
                                <form method="post">
                                  <div class="mb-3">
                                    <label>message</label>
                                    <input type="text" class="form-control" name="messages">
                                  </div>
                                    <input type="submit" id="std_submit" class="btn btn-success btn-lg float-end" name="std_submit" value="Submit">
                                </form>
                              </div>
                            </div>    
                        </div>
                            <div class="col-sm-">
                            <div class="card">
                              <div class="card-body">
                                <h5 class="card-title">Create a notication for Company</h5>
                                <form>
                                  <div class="mb-3">
                                      <?php
                                        include'connection.php';
                                        $selectquery= "select * from std_registration";
                                        $query= mysqli_query($con,$selectquery);
                                        $nums= mysqli_num_rows($query);
                                        ?>

                                        <label for="exampleInputEmail1" class="form-label">User</label>
                                        <select class="form-select" name="to_id">
                                          <option selected>Open this select menu</option>
                                         <?php    while($res= mysqli_fetch_array($query)){?>
                                        <option value="<?php echo $res['reg_no'] ?>"><?php echo $res['name'] ?></option>
                                            <?php } ?>
                                        </select>        
                                   </div>
                                </form>
                                <form method="post">
                                  <div class="mb-3">
                                    <label>message</label>
                                    <input type="text" class="form-control" name="messages">
                                  </div>
                                    <input type="submit" id="std_submit" class="btn btn-success btn-lg float-end" name="std_submit" value="Submit">
                                </form>
                              </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div> -->
          