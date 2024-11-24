<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS/header.css">
	<link rel="stylesheet" href="CSS/footer.css">
	<title>Roast Chicken</title>
	<meta charset="UTF-8"> <!-- display characters from several languages accurately since the character encoding has been set to UTF-8.--> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- this code helps by making sure the website is shown accurately and ideally on various devices, with the necessary scaling and sizing.-->
</head>


<body>


	<script type="text/Javascript" src="Javascript/roast-order.js"></script>

	<!--It uses SECTION to organise and display the header code-->
        <!--............................................................ -->
        <section>
            <div class="navigation-bar">   <!--This collects all the elements that will be included in the header -->
                <a href="homePage.html"> <img src="LOGO/logo.jpg" id="yasmeen-cooking-logo"> </a> <!--Adds the logo -->
                <a class="contact-us" href="contact-us.html">ContactUs</a> <!--Adds Contact Us Navigation button -->
                <a class="foods" href="foods.html">Foods</a>  <!--Adds Foods Navigation button -->
				<a href="login.php"> <img src="HP/account.png" id="account"></a>  <!--Adds the account icon-->
            </div>
                
			<div class="search">
                <!-- THIS SECTION INSERT THE SEARCH BOX <-->
                <input type="search" id= "searchBox" onchange="openPage()" value="" placeholder="Search.." >
                <a href="homePage.html"> <img src="HP/right-arrow.png" id="back"></a>  <!--Adds the back arrow-->
				<a href="contact-us.html"><img src="HP/left-arrow.png" id="forward"></a>  <!--Adds the forward arrow-->
            </div>
            

			<script src="Javascript/Search.js"></script> <!-- LINKS TO JAVASCRIPT FILE WHICH CONTAINS CODE THAT USERS TO DIFFERENT PAGE BASED ON THE SEARCH BOX INPUT-->
     
            
        </section>
        <!--............................................................ -->



	<br> <!--New line -->
	<br>


	 <!--ADDS ALL THE INFORMATION ABOUT ROAST -->
	 <!--.....................................................-->
	<!-- . This form tag sends data to roast-order-page when "buy" button is pressed-->
	<!-- . "action" is where form data will be sent when "buy" button is pressed, so it will be sent in roast-order-page.php -->
	<!-- . "method" is how data will be sent when "buy" button is pressed, so it will be sent without other people seeing it in roast-order-page.php -->
	<form action="roast-order-page.php" method="post" >

		<div class="roast-info-container"> <!-- Collects all the elements that involves with roast information, such as images, text and button -->
			<img src="FOODS/roast.jpg" width="512" height="751" id="roast" /> <!--Adds image of roast by width of 512 and height of 751 -->
			<h1 class="roastChickenText"> Roast Chicken </h1> <!-- Adds heading "Roast Chicken" that adds new line (br) -->
			<br>
			<h2 class="roastPrice"> £10.00 </h2> <!--Adds price of roast chicken that adds new line (br) -->
			<br>
			<p class="roastInfo">Enjoy the taste and get your hand oily with the chicken roast</p> <!-- Adds little information about roast chicken -->
			<br>
			<input type="submit" name="buy" value="buy" id="buyNowButton" > <!-- Adds button "buy". Name is given so that it will be referenced in PHP coding -->
			<br>
			<div class="num-container"> <!--Collects elements that involves with quantity box (how many roast they want to order) -->
				<input type="number" name="amount" min="0" max="5" step="1" value="0" id="input-num"> <!-- Adds input box which starts with 0 "Value" and max of roast "max = 5" -->
			</div>
		</div>
	</form>

	<!--.....................................................-->



	<div class="CookingInstructionContainer"> <!-- Collects elements that goes into cooking instruction section such as heading and lists -->
		<h1 class= "cookingInstruction" width="1920">Cooking Instruction </h1> <!-- Adds heading "Cooking Instruction" -->
		  <li class="CI1">Mix well and leave chicken to marinate for 4 fours in the fridge</li>  <!-- Adds lists of cooking instruction -->
		  <br></br> <!--Adds new line -->
		  <li class="CI2">Once completed, take the marinated chicken and place in a foiled tray <br> and place in the oven for 45 to 60 minutes, 
			turning the <br> chicken occasionally to make sure all sides are
			 properly cooked.</li> <!-- Adds lists of cooking instruction with new line (br) -->
		  <p></p>

		</div>
	  </div>

	  <div class="IngredientsContainer"> <!-- Collects elements that goes into ingredients such as heading -->
		<h1 class="Ingredients">Ingredients</h1> <!-- Adds heading "Ingridients" -->
		<div class="lists"> <!-- Because i cannot style all the class in CSS, i have added a div class "lists" -->
		  <li>Red Chillie Powder</li> <!-- Adds lists of ingredients -->
		  <li>Black Pepper</li> <!-- Adds lists of ingredients -->
		  <li>Salt</li> <!-- Adds lists of ingredients -->
		  <li>Dried Ginger</li> <!-- Adds lists of ingredients -->
		  <li>Tandoori Masala</li> <!-- Adds lists of ingredients -->
		  <li>Garam Masala</li> <!-- Adds lists of ingredients -->
		  <li>Yogurt </li> <!-- Adds lists of ingredients -->
		  <li>Lemon or Lime</li> <!-- Adds lists of ingredients -->
		</div>
	  </div>







	<!-- Uses "footer" tag to add a footer in the website -->
	<footer>
        <div class="footer-elements"> <!-- Collects all the element that creates a footer -->
            <h3>Yasmeen Cooking</h3> <!-- Adds a header "Yasmeen Cooking" -->
            <p>Copyright &copy; 2023 Yasmeen Cooking. All rights reserved</p> <!-- &copy creates a copyright symbol -->
            <p>YasmeenCooking28@Gmail.com</p> <!-- Uses P tag to add a email -->
            <p>07368541080</p> <!-- Uses P tag to add an mobile number -->
        </div>   
    </footer>

	
	
	
	<!--................................................................................................................-->
	
	
	
	
	  <style>


		/* Styles div class "roast-info-container" image */
		.roast-info-container img{
			position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width:512px; /* Width of "512" (PIXELS)*/
			height:751px; /* Height of "751" (PIXELS)*/
			left:58px; /*Position  left of the roast image  "58" (PIXELS) */
			top:389px; /*Position  top of the roast image  "389" (PIXELS) */
		}


		/* Styles div class "roast-info-container" heading 1 */
		.roast-info-container h1{
			position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width: 572px; /* Width of "572" (PIXELS)*/
			height: 78px; /* Height of "78" (PIXELS)*/
			left: 647px;  /*Position  left of the heading  "647" (PIXELS) */
			top: 418px;  /*Position  top of the heading  "418" (PIXELS) */
		}


		/* Styles div class "roast-info-container" heading 2 */
		.roast-info-container h2{
			position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width: 103px; /* Width of "103" (PIXELS)*/
			height: 39px; /* Height of "39" (PIXELS)*/
			left: 651px; /*Position  left of the heading  "651" (PIXELS) */
			top: 543px; /*Position  top of the heading  "543" (PIXELS) */
		}


		/* Styles div class "roast-info-container" paragraph */
		.roast-info-container p{
			position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width: 790px; /* Width of "790" (PIXELS)*/
			height: 78px; /* Height of "78" (PIXELS)*/
			left: 644px; /*Position  left of the heading  "644" (PIXELS) */
			top: 696px; /*Position  top of the heading  "696" (PIXELS) */
			font-size: 32px; /*Size of the text "32" (PIXELS) */

		}





		/* Styles div class "CookingInstructionContainer" */
		.cookingInstruction{
			position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			top:989px; /*Position  top of the heading  "989" (PIXELS) */
			width:1000px; /* width of "1000" (PIXELS)*/
			left:550px; /*Position  left of the heading  "550" (PIXELS) */
			text-decoration: underline; /*Underlines the heading text*/
			color:red;
		}


		/* Styles list 1 in cooking instruction */
		.CI1{
			position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width:1000px;  /* width of "1000" (PIXELS)*/
			top:1089px; /*Position  top of the list  "1089" (PIXELS) */
			left:550px; /*Position  left of the list  "550" (PIXELS) */

		}

		/* Styles list 2 in cooking instruction */
		.CI2{
			position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width:1000px; /* width of "1000" (PIXELS)*/
			top:1189px;  /*Position  top of the list  "1189" (PIXELS) */
			left:550px; /*Position  left of the list  "550" (PIXELS) */

		}


		/* Styles div class "IngredientsContainer" heading 1 */
		.IngredientsContainer h1{
			position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			color:rgb(255,0,0); /* RGB code for red colour */
			width:1000px;  /* width of "1000" (PIXELS)*/
			top:1289px; /*Position  top of the heading  "1289" (PIXELS) */
			left:550px; /*Position  left of the heading  "550" (PIXELS) */
			text-decoration:underline; /*Underlines the heading text*/
		}



		/* Styles div class "lists" which includes list of ingredients for roast */
		.lists{
			position:absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			top:1389px; /*Position  top of the lists  "1389" (PIXELS) */
			left:550px; /*Position  left of the lists  "550" (PIXELS) */
			width:1000px; /* width of "1000" (PIXELS)*/
		}




		/* Styles "buy" button */
		#buyNowButton{
			position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			width: 261.44px;  /* width of "261.44" (PIXELS)*/
			height: 85px; /* height of "85" (PIXELS)*/
			left: 632px; /*Position  left of the button  "632" (PIXELS) */
			top: 958px; /*Position  top of the button  "958" (PIXELS) */

		}

		

		


		/* Styles div class "num-container" which is the quantity input box  */
		.num-container{
			position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			top: 990px; /*Position  top of the input box  "990" (PIXELS) */
			left:1000px; /*Position  left of the input box  "1000" (PIXELS) */
		}




		/* Adds animation by using the div class "CookingInstructionContainer"  */
		.CookingInstructionContainer {
			position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
			-webkit-animation: fadeinout 10s linear forwards; /*Fades out the text*/
			animation: fadeinout 5s linear ; /*Fades in the text*/
		}
	
	
	


		/* Adds animation by using the div class "IngredientsContainer"  */
		.IngredientsContainer {
		  position: absolute; /* Position: "Absolute" allows me to take advantage on the position of the elements  */
		  -webkit-animation: fadeinout 10s linear forwards; /*Fades out the text*/
		   animation: fadeinout 5s linear ; /*Fades in the text*/
		}



		/* The WebKit rendering engine, which powers browsers like Safari and some variations of Chrome, 
		uses the vendor-specific prefix rule.  */
		@-webkit-keyframes fadeinout {
			0%,50% { opacity: 0; } 
			50% { opacity: 1; }
		}


		/*The version that is supported by the majority of modern browsers is rule.*/
		@keyframes fadeout {
			0%,50% { opacity: 0; }/* 0% is start of the fade and 50% is how the much percentage is it completey transparent */
  			50% { opacity: 0; } /*is the keyframe that marks the animation's halfway point.*/
		}

	  </style>
	
	
	
	
	<!--................................................................................................................-->
	


</body>
</html>


<!-- USED PHP CODE TO ADD ACTION TO THE BACKEND WHEN "buy" BUTTON IS PRESSED-->

<?php

if (isset($_POST['buy'])) //it will check if the button "buy" is pressed
{

	 
     $var1 = $_POST['amount']; //Var 1 collects the name "amount" in quantity input box
     $var2 = 10; //Var 2 collects the price of rice which is £10
	 $var4 = null; //For now var 4 is null meaning there is nothing in the variable
	 $price = $var2*$var1; //price times the cost by the amount of rice they buy
	 $var0 = null;  //For now var 0 is null meaning there is nothing in the variable
	 $getstock =  "SELECT stock FROM items WHERE itemname = 'roast chicken'"; //getstock  is a variable that requests information from the database table "items" on the quantity of rice that is currently in stock.
	


	$connect = mysqli_connect('localhost','root','') or die(mysqli_error()); //Connects to xampp server, which collects the server "localhost", username "root" and password ""
    $db_select = mysqli_select_db($connect,'order_page') or die(mysqli_error()); //Connects to database "order_page"

    $fin = mysqli_query($connect,$getstock) or die(mysqli_error()); //chooses the stock column from the items table where the itemname is "rice" and is stored in the variable $getstock.

	if (mysqli_num_rows($fin) > 0) { //It checks if there is any rows in the items table,which is used by function "mysqli_num_rows"
		while($row = mysqli_fetch_assoc($fin)) { //If there is rows it uses while loop and uses utilises the mysqli_fetch_assoc function to get each row one at a time.
			$var0 = $row["stock"]; //It sets the value of stock which is the column name in each row
			$roast = true; //roast variable is set to true when the value is set
		}
	}
 
	if ($var1 <=$var0){ //Uses if statement to see if amount of roast (var 1) is less than equal to stock (var0)
		$var4 = $var0 - $var1; //If it is then it uses var 4 to take away the stock in the database to amount 
		$sql = "UPDATE items
		SET stock = '$var4'
		WHERE itemname = 'roast chicken'
		"; //It updates new stock amount after it takes away from the stock and set it to var 4 which taked away the amount by stock, it selects the row "roast chicken" which is added in database
		$fin = mysqli_query($connect,$sql) or die(mysqli_error()); //It stores the result in the database and if that does not work it gives an error "die(mysqli_error)"
		echo"
		<script>
			alert('Successfully purchased. Cost:$price.');
		</script>";  //It creates an echo which javascript is added, where it will display a pop up message saying that item is successfully purchased. "price" variable is used to say how much in total is the roast chicken.

	}else{ //Uses else to say what the website will say when the roast chicken is out of stock.
		echo"
		<script>
			alert('Sorry this stock has runned out');
		</script>"; //It creates an echo which javascript is added, where it will display a pop up message saying item is out of stock
	}
		
	 }

	 

	
?>






