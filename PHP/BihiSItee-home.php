<?php
	session_start();
	if(!isset($_SESSION["username"]) && !isset($_SESSION["password"]))
	{
		header('Location: ../PHP/BihiSItee-guest.php');
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BihiSItee</title>
    <link rel="stylesheet" href="../CSS/style-xhome.css">
    <script type="text/javascript" src="../JS/nav.js"></script>
    <script type = "text/javascript" src="../JS/logout.js"></script>
</head>
<body>
<!--Navigation bar Part-->
    <div class="navbar">
        <div class="small-nbcontainer">
            <div class="logo">
                <img src="../PICTURE/LOGO/logo2.png" alt="no image" >
            </div>
            <div class="navbar-item">
                <table class="tablemenu" style="width:100%">
                    <tr>
                        <td>
                            <div class="menu">
                                <ul>
                                    <li><a href="../PHP/BihiSItee-home.php" class="links">HOME</a></li>
                                    <li><a href="../PHP/BihiSItee-home.php#category" class="links">CATEGORY</a></li>
                                    <li><a href="../HTML/Trendsnow.html" class="links">TRENDS</a></li>
                                    <li><a href="../HTML/shopnow.html" class="links">SHOP NOW</a></li>
                                    <li><a href="../HTML/Aboutus.html" class="links">ABOUT US</a></li>
                                    <li><a href="../PHP/BihiSItee-guest.php" class="links" onClick="logout();return false;">LOGOUT</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="searchbar">
                                <input class="srch" type="search" name="" placeholder="Search in Apparel Shop">
                                <a href="../HTML/404-error.html"><button class="btn">SEARCH</button></a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="space"></div>
<!--Main Content Part-->
    <div class="main">
        <div class="hbanner-container">
            <div class="banner-content">
                <img src="../PICTURE/LOGO/logo orange.png" class="logo2" alt="no image" >
                <p class="sub-heading">WEAR OUR BRAND, BE OUR BRAND!</p>
                <a href="../HTML/shopnow.html"><button class="btn2">SHOP NOW</button></a>
            </div>
        </div>
        <div class="category-container" id="category">
            <div class="hcategory">
                <div>
                    <h2 class="C_heading" >SHOP BY CATEGORY</h2>
                </div>
            </div>
            <div class="categories">
                <div class="catchoices">
                    <a href="../html/Men.html"><div class="c2"><img src="../PICTURE/CATEGORY/men-category.jpg" alt="no image" ></div></a>
                    <a href="../html/Women.html"><div class="c2"><img src="../PICTURE/CATEGORY/women-category.jpg" alt="no image" ></div></a>
                </div>
            </div>
        </div>
       <div class="brands-container">
           <div class="hbrands">
                <h2 class="B_heading">#THE BRANDS WE LOVE</h2>
           </div>
           <div class="nike">
                <a href="../HTML/404-error.html"><div class="c1"><img src="../PICTURE/BANNER/nike.png" alt="no image" ></div></a>
           </div>
           <div class="addidas">
                <a href="../HTML/404-error.html"><div class="c1"><img src="../PICTURE/BANNER/addidas.jpg" alt="no image" ></div></a>
           </div>
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
                            <li><a href="../HTML/Aboutus.html">About Us</a></li>
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
                    .
                </div>
           </div>
        </div>    
    </div>
</body>
</html>