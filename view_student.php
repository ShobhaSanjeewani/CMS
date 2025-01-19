<?php
error_reporting(0);
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

        $sql="SELECT * FROM user WHERE usertype='student'";

        $result=mysqli_query($data,$sql);
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>
            Admin Dashboard
        </title>
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
    <style type="text/css">
        .table_th
        {
            padding:20px;
            font-size:20px;
        }

        .table_td
        {
            padding:20px;
            background-color: skyblue;

        }

    </style>
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
           
               <h1>Student Data</h1>
               <?php

                if($_SESSION['message'])
                {
                    echo $_SESSION['message'];
                }
                unset ($_SESSION['message']);
               ?>
               <br><br>
               <table border="1px">
                <tr>
                    <th class="table_th">UserName</th>
                    <th class="table_th">Email</th>
                    <th class="table_th">Phone</th>
                    <th class="table_th">Password</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>

                </tr>

                <?php

                while($info=$result->Fetch_assoc())
                {

                

                ?>

                <tr>
                    <td class="table_td">

                        <?php echo "{$info['Username']}";
                        ?>

                    </td>
                    

                    </td>
                    <td class="table_td">

                    <?php echo "{$info['Email']}";
                        ?>

                    </td>
                    <td class="table_td">

                    <?php echo "{$info['Phone']}";
                        ?>

                    </td>
                    <td class="table_td">

                    <?php echo "{$info['Password']}";
                    ?>
                    </td>

                    <td class="table_td">

                    <?php echo "<a OnClick=\" javascript:return confirm('Are You Sure to Delete This');\"
                    class='btn btn-danger'
                     href='delete.php?student_id={$info['Id']}'>Delete </a>";
                    ?>

                    </td>
                    <td class="table_td">

                    <?php 
                    echo "<a class='btn btn-primary'href='update_student.php?student_id=
                    {$info['Id']}'>Update</a>"?>;
                    ?>
                    </td>



                </tr>

                <?php
                }
                ?>
               </table>
               </center>
    
          
        </div>
    </body>
</html>