<?php
    error_reporting(0);
    session_start();
    session_destroy();

    if($_SESSION['message'])
    {
        $message=$_SESSION['message'];
        echo"<script type='text/javascript'>
        alert('$message');
        </script>";
    }
?>





<html>
    <head>
        <meta charset ="utf-8">
        <title> Student Management System</title>
        <link rel="stylesheet"type="text/css" href="style.css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
       <nav>
        <label class ="logo"> Course Mangement System</label>
        <ul>
            <li><a href=""> Home</a></li>
            <li><a href=""> Contact</a></li>
            <li><a href=""> Course</a></li>
            <li><a href="login.php"class="btn btn-success"> Login</a></li>

        </ul>
       </nav>
            <div class="section1">
                <label class="img_text">E- Learning Platform for Student </label>

                 <img class="main_img" src="The_cheapest_countries_to_study_in_Europe_for_Bachelors_Students_ut28xv.avif">
            </div>
            <br><br>

            <div claas="container">
                <div class="row">
                    <div>
                    <h1> Welcome to Open Distance Leaning Platform</h1>
                        <p>
                        <h3 align="justify">Welcome to the Open Distance Learning Platform, your gateway to flexible and accessible education. Designed to support self-paced learning, our platform enables students to explore educational opportunities from anywhere, anytime.</h3>
                    </div>
                
                <img src="istockphoto-864483214-612x612.jpg"width="100%" >

                        </p>
                        <center>
		                    <h1>Our Courses</h1>
	                    </center>


	<div class="container">

		<div class="row">

			<div class="col-md-4">

				<img class="teacher" src="AdobeStock_419269782-scaled.jpeg"width="100%"height="250px">
				<h3>Web Development</h3>
				
				
			</div>

			<div class="col-md-4">

				<img class="teacher" src="insights-how-artificial-intelligence-is-revolutionizing-private-equity-and-hedge-funds.jpg"width="100%"height="250px">
				<h3>Artificial Intelligence</h3>

				
			</div>

            <div class="col-md-4">

				<img class="teacher" src="Safeguarding-Your-Business-The-Critical-Importance-of-Cybersecurity-1.webp"width="100%"height="250px">
				<h3>Cyber Security</h3>
                
				
			</div>

		</div>	

	</div>
            </div>

                </div>

            </div>
    <center>
		<h1 class="adm">Admission Form</h1>

	</center>


	<div align="center" class="admission_form">

		<form action="data_check.php"method="POST">
			
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="text" name="name">
		</div>

		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="text" name="email">
		</div>

		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Message</label>
			<textarea class="input_txt"name="message"></textarea>
		</div>

		<div class="adm_int" >
			
			<input class="btn btn-primary" id="submit" type="submit" value="apply"name="apply" >
		</div>


		</form>
        </div>


	<footer>
		<h3 class="footer_text">All @copyright reserved by web tech knowledge</h3>
	</footer>


    </body>
</html>