<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
   <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<script>
            function stu_preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            
            function ShowHideDiv() {
            var chkYes = document.getElementById("chkYes");
            var dvtext = document.getElementById("dvtext");
            dvtext.style.display = chkYes.checked ? "block" : "none";
            }
            function stud_submit(){
             window.alert("your form has been sumitted. Wait for Apporaval From TPO Cell")
            }
        </script>
<body>

<div class="container pt-3 my-4 border rounded bg-light text-dark">
    <div class="row">
        <div class="col-sm-9">
            <h1 class="text-dark"><strong>Registration Form</strong></h1>    
        </div>
        <div class="col-sm-3 ">
            <ul class=" nav nav-pills">
              <li class="nav-item bg-white ">
                    <a class="nav-link " data-bs-toggle="pill" href="#home">Student</a>
              </li>
              <li class="nav-item bg-white">
                <a class="nav-link" data-bs-toggle="pill" href="#menu1">Hirer</a>
              </li>
            </ul>
        </div>
    </div>
    
        <div class="tab-content">
            <div class="tab-pane" id="home">
         <form method="POST">
            <div class="row">
            <div class="col-sm-2">
                    <div class="mb-3 mt-3">
                        <img height="150px" width="150px" id="frame" src="" class="rounded mx-auto d-block img-responsive pl-5 mb-3 " />
                            <input class="form-control" type="file" id="stu_formFile" onchange="stu_preview()">
                        <h4 class="pt-5 text-cemter">Already have an Account?</h4>
                        <a href="index.php"><button class="btn btn-primary text-center">Login</button></a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="std_name" pattern="[a-zA-Z]{2,50}" title="Must have at least 2 characters of alphabet" autofocus required>
                      <label for="email">Name</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="roll_no" placeholder="Enter password" name="std_roll_no"  pattern="[a-zA-Z]{2,50}" title="Must have at least 2 characters of alphabet or number" required>
                      <label for="roll_no">Roll No</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                     <select class="form-select" id="branch" name="branch" required>
                        <option>Computer Science</option>
                        <option>Chemical </option>
                        <option>Mechnical</option>
                        <option>civil</option>
                      </select>
                      <label for="branch">Branch</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <select class="form-select" id="Course" name="course" required>
                        <option>B.tech</option>
                        <option>B.E </option>
                        <option>M.E</option>
                        <option>MCA</option>
                        <option>Phd</option>
                        </select>
                        <label for="Course">Course</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="user" placeholder="Enter password" name="user_name"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{5,}" 
                      title="Must have at least 5 characters, including UPPER/lowercase letters and number" required>
                      <label for="con_pwd">User Name</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="std_password"  aria-describedby="inputGroupPrepend1" required>
                      <label for="pwd">Password</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="password" class="form-control" id="con_pwd" placeholder="Enter password" name="pswd">
                      <label for="con_pwd">Conform Password</label>
                    </div> 
                </div> 
                <div class="col-sm-5">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="email" placeholder="Enter email" name="std_email" pattern="\w.*+\@+[a-z]+\.[a-z]{2,7}" title="Example: abc@yahoo.com"  required>
                      <label for="email">Email</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="per10" placeholder="Enter password" name="std_per10"
                             pattern="100$|^100.00$|^\d{0,2}(\.\d{1,2})? *%?" required>
                      <label for="per10">Percentage in 10</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="std_per12"
                             pattern="100$|^100.00$|^\d{0,2}(\.\d{1,2})? *%?" required>
                      <label for="pwd">Percentage in 12</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="std_perug"
                             pattern="100$|^100.00$|^\d{0,2}(\.\d{1,2})? *%?" required>
                      <label for="pwd">Percentage in Guraution</label>
                    </div>
                    <div class=" mt-3 mb-3 p-3">
                          <label>Are you post guraution student:-</label>
                            <input type="radio" id="chkNo" name="chk" onclick="ShowHideDiv()" />   No
                            <input type="radio" id="chkYes" name="chk" onclick="ShowHideDiv()" />  Yes 
                    </div>
                    <div class="form-floating mt-3 mb-3">
                            <input type="text" class="form-control" id="dvtext" placeholder="Enter percentage" name="std_perpg"
                                   pattern="100$|^100.00$|^\d{0,2}(\.\d{1,2})? *%?" required>
                            <label for="dvtext">Percentage in post Guraution</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                          <input type="submit" id="std_submit" class="btn btn-success btn-lg float-end" name="std_submit" value="Submit" onclick="stud_submit()">
                    </div>
                </div>
            </div>
            </form>
            </div>
            <div class="tab-pane container fade" id="menu1">
              <form method="POST">
                <div class="row">
                <div class="col-sm-2">
                    <div class="mb-3 mt-3">
                        <img height="150px" width="150px" id="frame" src="" class=" img-responsive pl-5 mb-3 " />
                            <input class="form-control" type="file" id="com_formFile" onchange="com_preview()">
                        <h4 class="pt-5 text-cemter">Already have an Account?</h4>
                        <a href="index.php"><button class="btn btn-primary text-cemter" value="Login" >Login</button></a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="com_name" name="com_name"
                       pattern="[a-zA-Z]{2,}" title="Must have at least 2 characters of alphabet" maxlength="50" autofocus required>
                      <label for="com_name">Company Name</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="no_of_seat" name="no_of_seat"
                             min="1" max="150"required>
                      <label for="no_of_seat">Number of Seat</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                     <select class="form-select" id="com_type" name="com_type">
                        <option>MNC</option>
                        <option>Product base</option>
                        <option>Serive Base</option>
                        <option>Other</option>
                      </select>
                      <label for="com_type">Company Type</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="com_ctc" placeholder="Enter password" name="com_ctc" pattern="\d{1,6}(?:\.\d{0,2})?" required>
                      <label for="com_ctc">CTC in LPA</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="web_link" placeholder="Enter password" name="web_link" pattern="https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)" required>
                      <label for="web_link">Website Link</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="position_req" placeholder="Enter password" name="position_req">
                      <label for="position_req">position Required</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="com_user" placeholder="Enter password" name="com_user" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{5,}" 
                      title="Must have at least 5 characters, including UPPER/lowercase letters and number" required>
                      <label for="com_user">Username</label>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-floating mb-3 mt-3">
                      <input type="text" class="form-control" id="skill" placeholder="Enter email" name="skill">
                      <label for="skill">Technology Required</label>
                    </div>

                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="head_q" placeholder="Enter password" name="head_q">
                      <label for="head_q">Location/Headquater</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="text" class="form-control" id="com_phn" placeholder="Enter password" name="com_phn"  required>
                      <label for="com_phn">Contact Number</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="email" class="form-control" id="com_email" placeholder="Enter password" name="com_email" pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)" title="Example: abc@yahoo.com" required>
                      <label for="com_email">Compaany Email</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="password" class="form-control" id="com_pwd" placeholder="Enter password" name="com_pwd"
                             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{5,}" required>
                      <label for="com_pwd">Password</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                      <input type="password" class="form-control" id="com_con_pwd" placeholder="Enter password" name="com_con_pwd"
                             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])\w{5,}" required>
                      <label for="com_con_pwd">Conform Password</label>
                    </div>
                    <div class="form-floating mt-3 mb-3">
                          <input type="button" id="com_submit" class="btn btn-success btn-lg float-end" name="com_submit" value="Submit">
                    </div>
                </div>
                </div>
             </form>
            </div>
    </div>
</div>
</body>
</html>

<?php
    include'connection.php';

        if(isset($_POST['std_submit']))
        {
        $name=mysqli_real_escape_string($con, $_POST['std_name']);
        $roll_no=mysqli_real_escape_string($con, $_POST['std_roll_no']);
        $branch=mysqli_real_escape_string($con, $_POST['branch']);
        $course=mysqli_real_escape_string($con, $_POST['course']);
        $user=mysqli_real_escape_string($con, $_POST['user_name']);
        $password=mysqli_real_escape_string($con, $_POST['std_password']);
        $email=mysqli_real_escape_string($con, $_POST['std_email']);
        $per_10=mysqli_real_escape_string($con, $_POST['std_per10']);
        $per_12=mysqli_real_escape_string($con, $_POST['std_per12']);
        $per_ug=mysqli_real_escape_string($con, $_POST['std_perug']);
        $per_pg=mysqli_real_escape_string($con, $_POST['std_perpg']);
                                          
        $pass= password_hash($password,PASSWORD_BCRYPT);
                                    
        $emailquery ="select * from std_registration where email='$email' ";
        $query= mysqli_query($con,$emailquery);
        
        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
            echo " email already exixts";
        }else{
         
            $insert_query ="insert into std_registration(roll_no, branch,course,name,per_ten,per_twelve,per_ug,per_pg,username, password, email) values('$roll_no','$branch','$course','$name','$per_10','$per_12','$per_ug','$per_pg','$user','$pass','$email')";
        
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
    }
?>
<?php
 include'connection.php';
 if(isset($_POST['com_submit']))
        {
        $com_name=mysqli_real_escape_string($con, $_POST['com_name']);
        $no_of_seat=mysqli_real_escape_string($con, $_POST['no_of_seat']);
        $com_type=mysqli_real_escape_string($con, $_POST['com_type']);
        $ctc=mysqli_real_escape_string($con, $_POST['com_ctc']);
        $web_link=mysqli_real_escape_string($con, $_POST['web_link']);
        $position_req1=mysqli_real_escape_string($con, $_POST['position_req']);
        $skill=mysqli_real_escape_string($con, $_POST['skill']);
        $head_q=mysqli_real_escape_string($con, $_POST['head_q']);
        $com_phn=mysqli_real_escape_string($con, $_POST['com_phn']);
        $com_email=mysqli_real_escape_string($con, $_POST['com_email']);
        $com_user=mysqli_real_escape_string($con, $_POST['com_user']);
        $com_pwd=mysqli_real_escape_string($con, $_POST['com_pwd']);
        
        $pass= password_hash($com_pwd,PASSWORD_BCRYPT);
                                    
        $emailquery ="select * from com_registration where company_email='$com_email' ";
        $query= mysqli_query($con,$emailquery);
        
        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
            echo " email already exixts";
        }else{
         
            $insert_query1 ="insert into com_registration(company_name,no_of_seat,company_type,CTC,web_link,technology_required,location,phone_num,company_email, username,password) values('$com_name','$no_of_seat','$com_type','$ctc','$web_link','$skill','$head_q','$com_phn','$com_email','$com_user','$com_pwd')";
            
        $res= mysqli_query($con,$insert_query1);
        echo $res;
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
    }
?>
