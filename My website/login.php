<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8"> <!-- display characters from several languages accurately since the character encoding has been set to UTF-8.--> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- this code helps by making sure the website is shown accurately and ideally on various devices, with the necessary scaling and sizing.-->
</head>

<body>

<h1>Log In</h1> <!--Header "Log in" -->



 <!--ADDS ALL THE FORM LABELS FOR LOG IN  -->
	 <!--.....................................................-->
	<!-- . This form tag sends data to login page when "buy" button is pressed-->
	<!-- . "action" is where form data will be sent when "submit" button is pressed, so it will be sent in login.php -->
	<!-- . "method" is how data will be sent when "submit" button is pressed, so it will be sent without other people seeing it in login .php -->
<form action="login.php" method="post"> 

    <div class="form-box"> <!--This collects all the elements that will be included in the login form -->
        <label>Username</label> <!--Name label "Username" will appear in the input box -->
        <input type="text" name="username" placeholder="Enter your username" require> <!--Creates inbox for username.name lets you name a variable for future references, placeholder is what will display inside the inbox box and require is where input box must be filled in -->
        <label>Password</label> <!--Name label "Password" will appear in the input box -->
        <input type="password" name="password" placeholder="Enter your password" require> <!--Creates inbox for password.name lets you name a variable for future references, placeholder is what will display inside the inbox box and require is where input box must be filled in -->
        <input type="submit" name="submit" value="submit"> <!--Creates a submition buttin, which is linked to javascript file (onclick="submitButton") which the code is inserted -->
    </div>
</form>

<!--.....................................................-->


	

	<p class="Sign-up"> <!--Adds a class name "Sign-up" which is used in CSS -->
		<a href="sign-up.php">Sign Up</a> <!--Hyperlink text which is directed to "sign-up.php" when "Sign Up" is clicked -->
	</p>


	<a href="homePage.html"> <img src="log-in-yasmeen-logo.png" id="white-yasmeen-cooking-logo"></a> <!--Hyperlink image (logo) which is directed to "homePage.html" when logo is clicked -->









	<style>
	/*Adds styles in the page */
	/*................................................. */
	body{
		margin:0;  /*Page background is not margin, stays in normal position */
		padding:0; /*No gaps */
		height:100vh;
		overflow: hidden;
		background-color: black;  /*Background of the page black */
	}
	/*................................................. */

	

	/*Adds styles in the log in box */
	/*................................................. */
	.form-box{
		background-color: #f2833b;
		position:absolute;
		top:50%;
		left: 50%;
		transform: translate(-50%, -50%); 
		width:370px;
		height: 300px;
		border-radius: 10px;  
		margin-left: 20px; /*Aligns "log in form" left by 20px */
		padding: 0 40px; /*Moves the form to middle of the log in box */
		box-sizing: border-box; /*NEED TO RESEARCH */  
	}
	/*................................................. */




	/*Adds styles the header (Log in) */
	/*................................................. */
	h1{
		text-align: center;  /*Aligns "Login" center of the page */
		padding-top: 115px;   /*Space out the heading by 15px */
		color: white;
	}
	/*................................................. */




	/*Adds styles in each lables (Username and password) */
	/*................................................. */
	.form-box label{
		display:flex; /*This type of display will make gaps and position the form bellow */
		margin-top: 20px; /*It margin the log in form top 20px */
		font-size: 18px; /*Adds the font size of form text 18px */
		transform: translateY(-50%);
		pointer-events: none;
	}
	/*................................................. */




	/*Adds styles in log in input box */
	/*................................................. */
	.form-box input{
		width:100%; /*Width of the log in input box */
		padding:7px; /*Stretches out the log in input box by 7px */
		border:none; /*By adding none in my border it  disapears the border in the log in input box, however it allows me to add my chosen color to the log in input box */
		border:1px solid black; /*log in input border box black */
		border-radius: 6px; /*Adds a round shape rectangle inside the log in input box */
		outline: none;
	}
	/*................................................. */




	/*Adds styles in Suubmit button */
	/*................................................. */
	input[type="submit"]{
		width:320px; /*Width of submit button 320px */
		height: 35px; /*Height of Suubmit button 35px */
		margin-top:20px; /*Margins the Suubmit button down */
		border:none; /*By adding none in my border it  disapears the border in Submit button, however it allows me to add my chosen color to Submit button*/
		border:1px solid black; /*Color of my border white */
		background-color: blue; /*Background color of Submit button Sundown yellow */
		color: white;
		font-size: 18px; /*font size of Suubmit button 35px */
	}
	/*................................................. */




	/*Styles the "sign up" text */
	.Sign-up{
		position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
		padding-top: 20px;  /* Adds 20 (PIXELS) of space   */
		left:720px; /*Position  left of the text  "720" (PIXELS) */
		top:400px; /*Position  top of the text  "400" (PIXELS) */
	}


	/*Styles the hyperlink of "sign up" text */
	.Sign-up a{
		text-decoration: none; /* Adds no hyperlink lines in the text  */
		color: black; /* Color of the text is black */
		cursor: pointer; /* The link is represented by the cursor, which is a pointer. */
	}


	/*Styles the action when the pointer lands on sign up text */
	.Sign-up a:hover{
		color: red; /*When pointer lands on the text it will change red */
	} 



	/*Styles the logo image */
	#white-yasmeen-cooking-logo{
		position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
		width: 618px; /*Width of logo "618" (PIXELS) */
		height: 53px; /*height of logo "53" (PIXELS) */
		top:30px; /*Position  top of the logo  "30" (PIXELS) */
		left:450px; /*Position  left of the logo  "450" (PIXELS) */
	}

</style>
		
</body>
</html>




<!-- USED PHP CODE TO ADD ACTION TO THE BACKEND WHEN "submit" BUTTON IS PRESSED-->

<?php
if (isset($_POST['submit'])) //it will check if the button "submit" is pressed
 {
     $username = $_POST['username']; //It collects a string that is inserted in username input field. $_POST allows the php to access username submitted form.
     $password = $_POST['password']; //It collects a string that is inserted in password input field. $_POST allows the php to access name submitted form.
	 $sql = "SELECT username, password FROM users WHERE username = '$username'"; //sql  is a variable that requests information from the database table "users" on the username and password, where username is set as username variable.
	 $username = false; //Set username to false, by using boolean.
	 $form = null; //For now form is null meaning there is nothing in the variable



    $connect = mysqli_connect('localhost','root','') or die(mysqli_error()); //Connects to xampp server, which collects the server "localhost", username "root" and password ""
    $db_select = mysqli_select_db($connect,'account_form') or die(mysqli_error()); //Connects to database "order_page"

    $fin = mysqli_query($connect,$sql) or die(mysqli_error()); //Connects to the users table, if it does not connect then diplay error (die(mysqli_error))

	if (mysqli_num_rows($fin) > 0) { //"mysqli_num_rows" finds if any data is inserted to the database which returns the result set
		while($row = mysqli_fetch_assoc($fin)) { //"mysqli_fetch_assoc" retrieves (get) data from the database
			$form = $row["password"]; //Define a form variable to row which is password in SQL database
			$username = true; //Define the variable username to true
		}
	}else { //else the details not found in the database then it will print an error. Also by using echo i style the text by adding colour and positioning the text
		echo '<p style="color:#FFB500; text-alignment:center;">You have failed to login (Incorrect Username or Password). Try again.</p>';
		exit(); //Stops the if condition
	}



	if ($form == $password) { //Checks if the password matches with the database 
		echo '<p style="color:#FFB500; text-alignment:center;">YOU HAVE BEEN LOGIN SUCCESSFULLY . Click the logo</p>'; //This text will print when users logged in successfully
	}elseif ($username == true) { //checks if username is true which means that if the username has been entered
		echo '<p style="color:#FFB500; text-alignment:center;">PASSWORD INCORRECT .</p>'; //If username is entered but not the password, this error will print

	}


 }


?>
