<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Home/CSS/sign-up.css">
    <meta charset="UTF-8"> <!-- display characters from several languages accurately since the character encoding has been set to UTF-8.--> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- this code helps by making sure the website is shown accurately and ideally on various devices, with the necessary scaling and sizing.-->
    <title>Sign Up</title>
</head>


<body>

<h1>Sign Up</h1>

<form action="sign-up.php" method="post" autocomplete="off">
    <div class="form-box">
        <label>Full Name</label>
        <input type="text" name="name" id="Name" placeholder="Enter your full name"  require>
        <p class = "error_name"></p>
        <label>Email</label>
        <input type="text" name="email"  id="Email" placeholder="Enter your email" require>
        <label>Username</label>
        <input type="text" name="username" id="Username" placeholder="Enter your username"  require>
        <label>Password</label>
        <input type="password" name="password" id="Password" placeholder="Enter your password"  require>
        <input type="submit" name="submit" value="submit" id="press" onclick="submitButton()">
    </div>
</form>


	
	<p class="log-in">
		<a href="login.php">Log In</a>
	</p>

	<a href="homePage.html"> <img src="log-in-yasmeen-logo.png" id="white-yasmeen-cooking-logo"></a>




    


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
        width:400px;
        height: 440px;
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
        padding-top: 55px;   /*Space out the heading by 15px */
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


    .log-in{
        position:absolute;
        left:740px;
        top:500px;
    }

    .log-in a{
        text-decoration: none;
        color: black;
        cursor: pointer;
    }

    .log-in a:hover{
        color: red;
    }



    #white-yasmeen-cooking-logo{
        position: absolute;
        width: 618px;
        height: 53px;
        top:20px;
        left:450px;
    }

    </style>


    
		
</body>
</html>



<!-- USED PHP CODE TO ADD ACTION TO THE BACKEND WHEN "submit" BUTTON IS PRESSED-->

<?php
 if (isset($_POST['submit'])) //it will check if the button "submit" is pressed
 {
     $name = $_POST['name']; //It collects a string that is inserted in name input field. $_POST allows the php to access name submitted form.
     $email = $_POST['email']; //It collects a string that is inserted in email input field. $_POST allows the php to access email submitted form.
     $username = $_POST['username']; //It collects a string that is inserted in username input field. $_POST allows the php to access username submitted form.
     $password = $_POST['password']; //It collects a string that is inserted in password input field. $_POST allows the php to access password submitted form.
     $submit = ['submit']; //Defines a button name submit

    $sql = "INSERT INTO users SET
    name = '$name',
    email = '$email',
    username = '$username',
    password = '$password'
    
    "; //It access into table name "users" and set the column into variables which is linked to input field. When the user inserts values into the input field it will add that value to the SQL database.

    $connect = mysqli_connect('localhost','root','') or die(mysqli_error()); //Connects to xampp server, which collects the server "localhost", username "root" and password ""
    $db_select = mysqli_select_db($connect,'account_form') or die(mysqli_error()); //Connects to database "order_page"

    $fin = mysqli_query($connect,$sql) or die(mysqli_error()); //Connects to the users table, if it does not connect then diplay error (die(mysqli_error))

    if(empty($name)){ //If the name field is empty 
        echo '<p style="color:#FFB500; text-alignment:center;">Name field is empty. It must be filled in.</p>'; //Displays this message when name is empty
	}elseif(empty($email)){ //If the email field is empty 
        echo '<p style="color:#FFB500; text-alignment:center;">Email field is empty. It must be filled in.</p>'; //Displays this message when email is empty
    }elseif(empty($username)){ //If the username field is empty 
        echo '<p style="color:#FFB500; text-alignment:center;">Username field is empty. It must be filled in.</p>'; //Displays this message when username is empty
    }elseif(empty($password)){ //If the name password is empty 
        echo '<p style="color:#FFB500; text-alignment:center;">Password field is empty. It must be filled in.</p>'; //Displays this message when password is empty

    }elseif($submit){ //If the submit is pressed 
        echo"
        <script>
            alert('Welcome $name to Yasmeen Cooking ');
        </script>"; //It opens a pop up message saying that welcome (name added in full name) to yasmeen cooking, which uses javascript
    }
    }

?>