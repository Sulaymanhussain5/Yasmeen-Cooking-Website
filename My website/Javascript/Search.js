function openPage() {  //REFERS TO ATTRIBUTE (ONCHARGE) WHICH WAS ASSIGNED IN INPUT CODE WHICH ADDS INPUT BOX

    
    //-ASSIGNN VARIABLE X TO ID "searchBox" WHICH IS LOCATED IN INPUT TAG. 
    //-VALUE COLLECTS THE VALUE THAT USERS ENTERS INTO INPUT FIELD
    var x = document.getElementById("searchBox").value; 


    //-USES IF STATEMENT TO CHECK THE STRING THAT USERS INPUT IN THE SEARCH BOX AND OPENS FOODS PAGE
    //- "===" IS USED TO SEE IF USERS INPUTED THE SAME STRING IN SEARCH BOX
    //- "||" IS USED FOR  "OR". SO IF "foods" INPUTED OR "Foods" INPUTED IN SEARCH BOX THEN OPEN foods.html
    if (x === 'foods' || x === 'food' || x === 'Foods' || x === 'Food') { 
        window.open("foods.html"); //OPENS foods.html PAGE WHEN THESE STRINGS IS INSERTED IN INPUT BOX

    //USES ELSE IF TO ADD ADDITIONAL STRINGS INTO SEARCH BOX

    //-USES IF STATEMENT TO CHECK THE STRING THAT USERS INPUT IN THE SEARCH BOX AND OPENS CONTACT US PAGE
    //- "===" IS USED TO SEE IF USERS INPUTED THE SAME STRING IN SEARCH BOX
    //- "||" IS USED FOR  "OR". SO IF "contact us" INPUTED OR "Contact us" INPUTED IN SEARCH BOX THEN OPEN contact-us.html
    } else if (x === 'contact us' || x === 'Contact us' || x === 'Contact Us') {
        window.open("contact-us.html"); //OPENS contact-us.html PAGE WHEN THESE STRINGS IS INSERTED IN INPUT BOX

    
    //-USES IF STATEMENT TO CHECK THE STRING THAT USERS INPUT IN THE SEARCH BOX AND OPENS ROAST ORDERING  PAGE
    //- "===" IS USED TO SEE IF USERS INPUTED THE SAME STRING IN SEARCH BOX
    //- "||" IS USED FOR  "OR". SO IF "roast" INPUTED OR "roast chicken" INPUTED IN SEARCH BOX THEN OPEN roast-order-page.html
    } else if (x === 'roast chicken' || x === 'Roast Chicken' || x === 'Roast' || x === 'roast') {
        window.open("roast-order-page.php"); //OPENS roast-order-page.html PAGE WHEN THESE STRINGS IS INSERTED IN INPUT BOX

    //-USES IF STATEMENT TO CHECK THE STRING THAT USERS INPUT IN THE SEARCH BOX AND OPENS RICE ORDERING PAGE
    //- "===" IS USED TO SEE IF USERS INPUTED THE SAME STRING IN SEARCH BOX
    //- "||" IS USED FOR  "OR". SO IF "rice" INPUTED OR "brown rice" INPUTED IN SEARCH BOX THEN OPEN rice-order-page.html
    } else if (x === 'rice' || x === 'Rice' || x === 'brown rice' || x === 'Brown Rice') {
        window.open("rice-order-page.php"); //OPENS rice-order-page.html PAGE WHEN THESE STRINGS IS INSERTED IN INPUT BOX

    //USES ELSE TO  ADD ALTERNERTIVE WHEN NONE OF THE ELSE IF AND IF DOES NOT WORK
    //OPENS NO RESULT WHEN NONE OF THE STRINGS MATCHES WITH THE IF AND ELSE IF STATEMENT
    } else {
        window.open("notfound.html"); //OPENS notfound.html PAGE WHEN THESE STRINGS IS INSERTED IN INPUT BOX
    }
}

