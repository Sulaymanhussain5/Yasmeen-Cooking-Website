<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="CSS/header.css"> <!--Links to CSS file named header.css, which creates a header-->
	<link rel="stylesheet" href="CSS/footer.css"> <!--Links to CSS file named footer.css, which creates a footer-->
    <meta charset="UTF-8"> <!-- display characters from several languages accurately since the character encoding has been set to UTF-8.--> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- this code helps by making sure the website is shown accurately and ideally on various devices, with the necessary scaling and sizing.-->
    <title>Foods</title> <!--This title will appear in the task bar("Foods")-->
</head>


<body>

	<!--It uses SECTION to organise and display the header code-->
        <!--............................................................ -->
        <section>
            <div class="navigation-bar">   <!--This collects all the elements that will be included in the header -->
                <a href="homePage.html"> <img src="LOGO/logo.jpg" id="yasmeen-cooking-logo"> </a> <!--Adds the logo -->
                <a class="contact-us" href="contact-us.html">ContactUs</a> <!--Adds Contact Us Navigation button -->
                <a class="foods" href="foods.html">Foods</a>  <!--Adds Foods Navigation button -->
				<a href="login.php"> <img src="HP/account.png" id="account"></a>  <!--Adds the account icon-->
            </div>
                

            <!-- THIS SECTION INSERT THE SEARCH BOX -->
            <div class="search"> <!--Collects all the elements that creates search box-->
                <input type="search" id= "searchBox" onchange="openPage()" value="" placeholder="Search.." > <!--Adds search box. Also use "oncharge" to perform action when string is inserted-->
                <a href="homePage.html"> <img src="HP/right-arrow.png" id="back"></a>  <!--Adds the back arrow-->
				<a href="contact-us.html"><img src="HP/left-arrow.png" id="forward"></a>  <!--Adds the forward arrow-->
            </div>
        
            
            <script src="Javascript/Search.js"></script>  <!-- LINKS TO JAVASCRIPT FILE WHICH CONTAINS CODE THAT USERS TO DIFFERENT PAGE BASED ON THE SEARCH BOX INPUT-->

        </section>
        <!--............................................................ -->


        <h1>Order Page</h1>
    
        <form action="Order-page.php" method="post">
            <label for="name">Holders name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="sortCode">Sort Code:</label>
            <input type="text" id="sortCode" name="sortCode" required><br><br>
            
            <label for="accountNumber">Account Number:</label>
            <input type="text" id="accountNumber" name="accountNumber" required><br><br>
            
            <label for="cardName">Card Name:</label>
            <input type="text" id="cardName" name="cardName" required><br><br>
            
            <input type="submit" value="Purchase">
        </form>


</body>
</html>