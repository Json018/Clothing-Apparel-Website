<!DOCTYPE html>
<html>
<head>
    <title>BihiSItee Register</title>
    <link rel="stylesheet" href="../CSS/style-regis.css">
    <script type="text/javascript" src="../JS/nav.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="navbar">
        <div class="small-nbcontainer">
            <div class="logo">
                <img src="../PICTURE/LOGO/logo2.png" alt="no image" >
            </div>
            <div class="navbar-title">
                <h3>REGISTER</h3>                
            </div>
        </div>
    </div>
    
    <!--Main - Content Part-->
    <div class="main">
        <div class="hbanner-container">
            <div class="container">
            <div class="back"><a href="../PHP/BihiSItee-guest.php"><button class="back-btn"><</button></a></div>
                <div class="registerhead">
                    <h1> REGISTER HERE</h1> 
	                <p> Please fill in the information below to create your account </p> <!-- CHANGE TEXT & TEXT COLOR -->
                </div>


                <!------FORM OF REGISTRATION-------->

                <form  method="post" action="../PHP/regadd.php" class="form"  onsubmit="return validate()">
                    <fieldset>
                    <br>
            
                    <legend>
                        <b>Registration Form</b>
                    </legend>
    
                    <br>

                    <table class="table1">	<!-- ADD DIVISION SPACING -->
                        <p class="t-head">Personal Information</p>
                        <!-- USER INPUT: Client Personal Information -->
                        <tr>
                            <td>Given Name: </td>
                            <td>
                            
                            <input type="text" class="input" id = "givenname" name = "givenname" required  >
                           
                
                        </td>

                        </tr>
                        <tr>
                            <td>Surname: </td>
                            <td><input type="text" class="input" id = "surname" name = "surname" required >
                     
                        </td>
                        </tr>

                        <tr>
                            <td>Middle Name: </td>
                            <td><input type="text" class="input" id = "middlename" name = "middlename" required >
                        </td>
                        </tr>
                        <tr>
                            <td>Gender: </td>
                               <td><input type="text" class= "input" id = "gender" name = "gender" required>   
                            </td>
                        </tr>
                        <tr>
                            <td>Email Address: </td>
                            <td><input type="email" class="input" id = "email" name = "email" required></td>
                        </tr>
                        <tr>
                            <td>Phone Number: </td>
                            <td>
                                <input type="phone" class="input" id = "phonenumber" name = "phonenumber" required>
                            </td>
                        </tr>
                    </table>
                    
                    <table class="table1"> <!-- ADD DIVISION SPACING -->
                
                        <p class="t-head">Account Details</p>
                        
                        <!-- USER INPUT: Client Personal Information -->
                        <tr>
                            <td>Username: </td>
                            <td><input type="text" class="input" id = "username" name = "username" required></td>
                        </tr>
                    
                        <tr>
                            <td>Password: </td>
                            <td><input type="password" class="input" id = "password" name = "password" required></td>
                        </tr>
                        <h4 id="error"></h4><br>
                    </table>
                    <div class="btn3-container">
                        <div class="btn3-items">
                            <br>
                            <input type="Reset" class="btn3">
                            <button type="submit" name = "submit" class="btn3" >Register</button>
                        </div>
                    </div>
                </form>

                <script type="text/javascript" src="../JS/register.js"></script>

  <!------END FORM OF REGISTRATION-------->
  

            </div>
        </div>
    </div>
</body>
</html>