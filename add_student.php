<?php
session_start();

        if(!isset ($_SESSION['username']))
        {
          header("location:login.php") ;
        }

        elseif($_SESSION['Usertype']=='student')
        {
            header("location:login.php") ; 
        }

        $host="localhost";
        $user="root";
        $password="";
        $db="cmsproject";

        $data=mysqli_connect($host,$user,$password,$db);

        if(isset($_POST['add_student']))
        {
            $user_name=$_POST['name'];
            $user_email=$_POST['email'];
            $userphone=$_POST['phone'];
            $user_type="student";
            $user_password=$_POST['password'];

            $check="SELECT * FROM user WHERE Username='$user_name'";
            $check_user=mysqli_query($data,$check);
            $row_count=mysqli_num_rows($check_user);

            if($row_count==1)
            {
                echo "<script type='text/javascript'>
                alert('Username Already Exist. Try Another One');
                </script";

                

            }
            else
            {

                
                $sql="INSERT INTO user(
                Username,
                Email,
                Phone,
                Usertype,
                Password
                )
                 VALUES('$user_name','$user_email','$userphone','$user_type','$user_password')";
            
                $result=mysqli_query($data,$sql);
            
                if($result)
                {
                echo "<script type='text/javascript'>
                alert('Data Upload Successfully');
                </script";
                }

                else
                {
                echo"Upload Failed";
                }
            }
        }
       
        

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>
            Admin Dashboard
        </title>

        <style type="text/css">
            label
            {
                display: inline-block;
                text-align: right;
                width:100px ;
                padding-top: 10px;
                padding-bottom: 10px;

            }
            .div_deg
            {
                background-color: skyblue;
                width:400px;
                padding-top:70px ;
                padding-bottom: 70px;
            }
        </style>

        
        <?php
        include 'admin_css.php';
        ?>
        
        <link rel="stylesheet"type="text/css" href="admin.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php

include 'admin_sidebar.php';
?>
        
        <aside>
                
            <ul>
                <li>
                    <a href="admission.php">Admission</a>
                </li>

                <li>
                    <a href="">Add Student</a>
                </li>

                <li>
                    <a href="">Add Courses</a>
                </li>

                <li>
                    <a href="">View Courses</a>
                </li> 

            </ul>
        </aside>
        <div class="content">
            <center>
           
               <h1>Add Student </h1>
               <div class="div_deg"> 
                <form action="#"method="POST">
                    <div>
                        <label>
                            Username
                        </label>
                        <input type="text"name="name">
                    </div>

                    <div>
                        <label>
                            Email
                        </label>
                        <input type="email"name="email">
                    </div>

                    <div>
                        <label>
                            Phone
                        </label>
                        <input type="number"name="phone">
                    </div>

                    <div>
                        <label>
                            Password
                        </label>
                        <input type="text"name="password">
                    </div>

                    <div>
                        
                        <input type="submit"class="btn btn-primary"name="add_student"value="Add Student">
                    </div>

                </form>
               </div>
               </center>
    
          
        </div>
    </body>
</html>