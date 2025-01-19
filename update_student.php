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

        $data=mysqli_connect($host, $user,$password,$db);

        $id=$_GET['student_id'];
        $sql="SELECT * FROM user WHERE Id='$id'";

        $result=mysqli_query($data,$sql);

        $info= $result -> fetch_assoc();

        if(isset($_GET['update']))
        {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $Phone=$_POST['phone'];
                $password=$_POST['password'];

                $query="UPDATE user SET Username='$name',
                Email='$email',Phone='$Phone',Password='$password' 
                WHERE id='$id'";

                $result2=mysqli_query($data,$query);

                if($result2)
                {
                    header("location:view_student.php");
                }
        }

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>
            Admin Dashboard
        </title>

        <?php

        include 'admin_css.php';
        ?>

        <style type="text/css">
            label
            {
                display:inline-block ;
                width: 100px;
                text-align: right;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .div_deg
            {
                background-color:skyblue ;
                width: 400px;
                padding-bottom: 70px;
                padding-top: 70px;
            }
        </style>
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

include 'admin_css.php';
?>
        <header class="header">
            <a href=""> Admin Dashboard</a>
           <div class="logout">
                <a href="logout.php" class="btn btn-primary"> Logout</a>
            </div>
        </header>
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
           
               <h1>Update Student</h1>

               <div class="div_deg">
                    <form action="#"method="POST">
                        <div>
                            <label>
                                Username
                            </label>
                            <input type="text"name="name"value="
                            <?php 
                            echo"{$info['Username']}";
                            
                            ?>">
                        </div>

                        <div>
                            <label>
                                Email
                            </label>
                            <input type="email"name="email"value="<?php
                             echo"{$info['Email']}";
                             ?>">
                        </div>

                        <div>
                            <label>
                                Phone
                            </label>
                            <input type="number"name="phone"value="<?php 
                            echo"{$info['Phone']}";
                            ?>">
                        </div>

                        <div>
                            <label>
                                Password
                            </label>
                            <input type="text"name="password"value="<?php
                             echo"{$info['Password']}";
                             ?>">>
                        </div>

                        
                            <input class="btn btn-success" type="Submit"name="Update" value="Update">
                        </div>
                    </form>
               </div>
    
               </center>
        </div>
    </body>
</html>