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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />
    <!---css-->
    <link href="../css/style.css" rel="stylesheet">    
    <!-- charts.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        if(window.history.replaceState){
            window.history.replaceState(null, null, window.location.href );
        }
    </script>  
  </head>
  <body>
         <?php
                    include'company_header_sidebar_panel.php';
         ?>
                                <!-- main container -->
          <main>
            <div class="mt-5 pt-3">
                <div class="container">
                <div class="row">
                  <div class="col-sm-12 mt-2">
                    <h4>Student Request </h4>
                  </div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <div class="table-responsive">
                    <table class="table bg-light text-center">
                      <thead>
                        <tr>
                          <th scope="col">S.No</th>
                          <th scope="col">Student Photo</th>
                          <th scope="col">Student Name</th>
                          <th scope="col">Branch</th>
                          <th scope="col">Course</th>
                          <th scope="col">Request_status</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          
                          <?php
                            include'../connection.php';
                            $selectquery= "select * from std_registration where req_status='pending' ";
                            $query= mysqli_query($con,$selectquery);
                            $nums= mysqli_num_rows($query);

                            while($res= mysqli_fetch_array($query)){
                                
                            ?>       
                            <tr class="align-middle">
                              <th scope="row">
                                  <?php echo $res['reg_no']; ?> 
                              </th>
                              <td><img class="img-fluid rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar7.png" width="60"></td>
                              <td><span> <?php echo $res['name']; ?> </span></td>
                              <td><span><?php echo $res['branch']; ?></span></td>
                              <td><?php echo $res['course']; ?></td>
                              <td><?php echo $res['email']; ?></td>
                              <td>
                               <button class="btn btn-outline-dark btn-sm" type="button" name="show" data-bs-toggle="modal" data-bs-target="#update_modal<?php echo $res['reg_no']?>">Show profile</button>
                              </td>
                            </tr>
                                <!-- Modal -->
                    <div class="modal fade" id="update_modal<?php echo $res['reg_no']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Student Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                         <form method="post">
                          <div class="modal-body">
                            <div class="container-fulid">
                              <div class="row">
                                <div class="col-sm-6">
                                         <div class="form-floating mb-3 mt-3">
                                          <input type="text" class="form-control" value=" <?php echo $res['name'] ?> " aria-label="readonly input example" readonly name="std_name">
                                          <label for="email">Name</label>
                                        </div>
                                        <div class="form-floating mt-3 mb-3">
                                          <input type="text" class="form-control"value="<?php echo $res['roll_no'] ?>" aria-label="readonly input example" readonly name="std_roll_no">
                                          <label for="roll_no">Roll No</label>
                                        </div>
                                        <div class="form-floating mt-3 mb-3">
                                          <input type="text" class="form-control"value="<?php echo $res['branch'] ?>" aria-label="readonly input example" readonly name="user_name">
                                          <label for="con_pwd">Branch</label>
                                        </div>
                                        <div class="form-floating mt-3 mb-3">
                                          <input type="text" class="form-control" value="<?php echo $res['course'] ?>" aria-label="readonly input example" readonly name="user_name">
                                          <label for="con_pwd">Course</label>
                                        </div>
                                        <div class="form-floating mt-3 mb-3">
                                          <input type="password" class="form-control" value="<?php echo $res['name'] ?>" aria-label="readonly input example" readonly name="std_password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-floating mb-3 mt-3">
                                      <input type="text" class="form-control"value="<?php echo $res['email'] ?>" aria-label="readonly input example" readonly name="std_email">
                                      <label for="email">Email</label>
                                    </div>
                                    <div class="form-floating mt-3 mb-3">
                                      <input type="text" class="form-control form-control-sm"value="<?php echo $res['per_ten'] ?>" aria-label="readonly input example" readonly name="std_per10">
                                      <label for="per10">Percentage in 10</label>
                                    </div>
                                    <div class="form-floating mt-3 mb-3">
                                      <input type="text" class="form-control"value="<?php echo $res['per_twelve'] ?>" aria-label="readonly input example" readonly name="std_per12">
                                      <label for="pwd">Percentage in 12</label>
                                    </div>
                                    <div class="form-floating mt-3 mb-3">
                                      <input type="text" class="form-control"value="<?php echo $res['per_ug'] ?>" aria-label="readonly input example" readonly name="std_perug">
                                      <label for="pwd">Percentage in Guraution</label>
                                    </div>
                                    <div class="form-floating mt-3 mb-3">
                                      <input type="text" class="form-control"value="<?php echo $res['per_pg'] ?>" aria-label="readonly input example" readonly name="std_perug">
                                      <label for="pwd">Percentage in post Guraution</label>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="sumit" class="btn btn-secondary" name="std_approval" onclick="window.location.reload(true);">Approval</button>
                            <button type="button" class="btn btn-primary" name="std_reject">Reject</button>
                          </div>
                        </div>
                        </form>
                      </div>
                    </div>
                    
                </div>    
                          <?php     
                            }

                            ?>
                      </tbody>
                    </table>
                   </div>
                    
                </div>
              </div>
            </div>
            </div>
          </main>
                                <!-- main container -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>    

<?php
        
include'connection.php';

   if(isset($_POST['std_approval']))
   {
    $user=$_POST['std_email']; 
    $chk_req='approval';
    $std_update="update std_registration set req_status='$chk_req' where email='$user' ";
    $query= mysqli_query($con,$std_update);
    if($query){
            
        }else{
             ?>
            <script>
                alert('not insert successfull');
            </script>
            <?php
        } 
   }
                                
?>