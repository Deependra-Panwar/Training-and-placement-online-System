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
        <div class="container">
        <div class="mt-5 pt-5 mb-5 ">
            <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings text-center ">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin" width="90%">
                        </div>
                        <h5 class="user-name">Yuki Hayashi</h5>
                        <h6 class="user-email">yuki@Maxwell.com</h6>
                    </div>
                    <div class="about pt-5">
                        <h5 class="text-primary">About</h5>
                        <p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <?php
                            include'connection.php';
                            $selectquery= "select * from com_registration where company_email='skill5@gmail.com' ";
                            $query= mysqli_query($con,$selectquery);
                            $nums= mysqli_num_rows($query);

                            while($res= mysqli_fetch_array($query)){
                                
                            ?>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h5 class="mb-4 text-primary">Company Details</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="email">Company Name</label>
                            <input type="text" class="form-control" value=" <?php echo $res['company_name'] ?> " aria-label="readonly input example" readonly name="std_name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="website">Website URL</label>
                            <input type="url" value="<?php echo $res['web_link'] ?>" class="form-control" aria-label="readonly input example" readonly>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="eMail">Company Email</label>
                            <input type="email" value="<?php echo $res['company_email'] ?>" class="form-control" id="eMail" placeholder="Enter email ID" aria-label="readonly input example" readonly>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="phone">Company type</label>
                            <input type="text" value="<?php echo $res['company_type'] ?>" class="form-control" id="phone" placeholder="company type" aria-label="readonly input example" readonly>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="phone">Contact Number</label>
                            <input type="text" value="<?php echo $res['phone_num'] ?>" class="form-control" id="phone" placeholder="Enter phone number" aria-label="readonly input example" readonly>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="phone">Phone</label>
                            <input type="text"  class="form-control" id="phone" placeholder="Enter phone number" aria-label="readonly input example" readonly>
                        </div>
                    </div>  
                </div>
                <div class="row gutters mt-3">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h5 class="mb-4 text-primary">Recruitment Details</h5>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="Street">No of Seat</label>
                            <input type="name" value="<?php echo $res['no_of_seat'] ?>" class="form-control" id="Street" placeholder="Enter Street">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="ciTy">Place of Posting</label>
                            <input type="name" value="<?php echo $res['location'] ?>" class="form-control" id="ciTy" placeholder="Enter City" >
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="sTate">Branches allowed</label>
                            <input type="text" value="<?php echo $res['branch_allowed'] ?>" class="form-control" id="sTate" placeholder="Enter State">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="zIp">Eligibility Throughout</label>
                            <input type="text" value="<?php echo $res['eligibility'] ?>" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="zIp">CTC</label>
                            <input type="text" value="<?php echo $res['CTC'] ?>" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="zIp">Service Agreement(Bond)</label>
                            <input type="text" value="<?php echo $res['bond'] ?>" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="zIp">Technology</label>
                            <input type="text" value="<?php echo $res['technology_required'] ?>" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group mb-3">
                            <label for="zIp">phase of process </label>
                            <input type="text" value="<?php echo $res['phase'] ?>" class="form-control" id="zIp" placeholder="Zip Code">
                        </div>
                    </div>
                    
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right mt-3 mb-3 ">
                            <button type="button" id="submit" name="submit" class="btn btn-primary float-end m-2">Update</button>
                            <button type="button" id="submit" name="submit" class="btn btn-secondary float-end m-2">Cancel</button>
                        </div>
                    </div>
                </div>
                <?php
                            }
                ?>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
      </main>
  </body>
</html>