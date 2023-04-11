<?php
session_start();
?>
<html>
<head>
    <title>BihiSItee Login</title>
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../JS/nav.js"></script>
</head>
<body>
    <div class="navbar">
        <div class="small-nbcontainer">
            <div class="logo">
                <img src="../PICTURE/LOGO/logo2.png" alt="no image" >
            </div>
            <div class="navbar-title">
                <h3>LOGIN</h3>                
            </div>
        </div>
    </div>
    
    <!--Main - Content Part-->
    <div class="main">
        <div class="hbanner-container">
            <form method = "post" action="../PHP/tologin.php" class="container"  onsubmit="return validate()">
                <header><span style="color: rgb(155, 152, 4); -webkit-text-stroke: 1px gray;"> WELCOME to</span> <span style="color: crimson; -webkit-text-stroke: 1px black;">Bihis ITee</span></header>
                <p>"Connecting Fashion and Technology"</p><br>
                <div class="form">
                    <input id="username" type="text" name="username" placeholder="Username">
                    <i class="fa fa-times u_times"></i>
                    <i class="fa fa-check u_check"></i> 
                </div>
        
                <div class="form">
                    <input id="password" type="password" name="password" placeholder="Password">
                    <i class="fa fa-times p_times"></i>
                    <i class="fa fa-check p_check"></i>
                </div>
                <div class="form">
                    <h4 id="error"></h4><br>
                    <input type="submit" name="login-btn" value="LOGIN" ><br><br>
                </div>
                <div class="sign-txt">Not a member? <a href="../PHP/Register.php">Register Here!</a></div>
            </form>
            <script type="text/javascript" src="../JS/login.js"></script>
        </div>
    </div>

    <!--Footer Part-->
    <div class="footer">
        <div class="footerbar">
            <table class="tbfooter">
                <tr>
                    <td><div class="hfooter">COMPANY INFO</div></td>
                    <td><div class="hfooter">HELP & SUPPORT</div></td>
                    <td><div class="hfooter">CUSTOMER CARE</div></td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li><a href="../HTML/Aboutus-guest.html">About Us</a></li>
                            <li><a href="../HTML/404-error.html">Affiliate</a></li>
                            <li><a href="../HTML/404-error.html">Fashion Blogger</a></li>
                            <li><a href="../HTML/404-error.html">Social Responsibility</a></li>
                        </ul>
                    </td>
                    <td>                             
                        <ul>
                            <li><a href="../HTML/404-error.html">Shipping Info</a></li>
                            <li><a href="../HTML/404-error.html">Returns</a></li>
                            <li><a href="../HTML/404-error.html">How To Orde</a></li>
                            <li><a href="../HTML/404-error.html">How To Track</a></li>
                            <li><a href="../HTML/404-error.html">Size Guide</a></li>
                         </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="../HTML/404-error.html">Contact Us</a></li>
                            <li><a href="../HTML/404-error.html">Payment Method</a></li>
                            <li><a href="../HTML/404-error.html">Bonus Point</a></li>
                        </ul>
                       </div>
                    </td>
                 </tr>
            </table>
            <div class="findus">
                <div class="findh">
                    <h2>FIND US ON</h2>
                </div>
                <div class="findimg">
                    
                </div>
           </div>
        </div>    
    </div>
    
</body>
</html>