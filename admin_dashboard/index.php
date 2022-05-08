<?php

session_start();    
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
      
  </head>
  <body>
 <section class="vh-100 adient-custom">
  <div class="container py-5 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-info " style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            <div class="mb-md-4 mt-md-3 pb-3">
             <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">    
              <h2 class="fw-bold mb-3 text-uppercase text-white">Login</h2>
              <h4 class="text-white mb-4">Training And Placement Cell</h4>

              <div class="form-floating form-white mb-4">
                <input type="email" name="user" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating form-white ">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <p class="small mb-3 mt-3 pb-lg-1"><a class="text-white-50" href="#!">Forgot password?</a></p>
              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
             </form>
            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="registration.php" class="text-white-50 fw-bold">Sign Up</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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

<?php
    
    include'connection.php';

   if(isset($_POST['login']))
    {
    $user=mysqli_real_escape_string($con, $_POST['user']);
    $password=mysqli_real_escape_string($con, $_POST['pass']);
    echo $user;
    echo $password;
    $email_search=" select * from std_registration where email='$user'";
    $query= mysqli_query($con,$email_search);
        
    $email_count= mysqli_num_rows($query);
    
    if($email_count){
        $email_pass= mysqli_fetch_assoc($query);
        $db_pass= $email_pass['password'];
       $_SESSION['username'] =$email_pass['username'];   
        
       $pass_decode= password_verify($password,$email_pass['password']);
        if($pass_decode)
        {
            echo "login successfull";
             ?>
                <script>
                        location.replace("admin_dashboard.php");
                </script>
            <?php 
        }
        else
        {
            echo"Invaild password";
        }
    }
        else
        {
            echo "invaild Email";
        }
    
   }
?>