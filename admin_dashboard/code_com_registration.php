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

<!--            $insert_query1 ="insert into com_registration(company_name,no_of_seat,company_type,CTC,web_link,
            position_required,technology_required,location,phone_num,company_email,username,password) values('$com_name','$no_of_seat ','$com_type','$ctc','$web_link','$position_req','$skill','$head_q','$com_phn','$com_email','$com_user','$com_pwd')";
--->