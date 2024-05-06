<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Med-Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        tr,th,td
        {
            font-family:Times new roman;
            padding-top:20px;
            padding-bottom:20px;
            padding-left:10px;
            padding-right:5px;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
       
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i> 1-677-124-44227</li>
            <li><i class="fa fa-map-marker"></i> Los Angeles Gournadi, 1230 Bariasl</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 18:00pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.html" style="color: black; font-weight: bold;">Med-Shop</a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="adminhome.php">Home</a></li>
                                <li><a href="staffdetails.php">Staff</a></li>
                                <li><a href="medicinedetails.php">Medicine's</a></li>
                                <li><a href="#">View Details</a>
                                    <ul class="dropdown">
                                        <li><a href="viewwusers.php">Users</a></li>
                                        <li><a href="viewstock.php">Medicine Stock</a></li>
                                        <li><a href="viewpayment.php">Payment</a></li>
                                    </ul>
                                </li>
                                
                            </ul>
                        </nav>
                        
                        <div class="header__btn">
                            <a href="logout.php" class="primary-btn">Logout</a>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="breadcrumb-option spad set-bg" data-setbg="img/2.jpg">
        
    </section>
    <section class="contact spad">
        <div class="container">
            <div class="contact__content">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <h3>User Details</h3>
                            <table border="2" align="center">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact No no</th>
                        <th>Email</th>
            <th>ACTION</th>
        </tr>
        <?php
        include 'db_connection.php';
        $sql=mysqli_query($connection,"select * from user_reg");
        while($rw=mysqli_fetch_array($sql))
        {
            ?>
            <tr>
                <td><?php echo $rw['id'];?></td>
                <td><?php echo $rw['name'];?></td>
                <td><?php echo $rw['contact_no'];?></td>
              
                <td><?php echo $rw['email'];?></td>
                <td><a href="udel.php?id=<?php echo $rw['id'];?>" style="color:red;">Delete</a></td>
            </tr>
            <?php
                    }
                    ?>
    </table>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__logo">
                        <a href="#">Med-Shop</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="footer__newslatter">
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        
                       
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">News</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h5>Quick links</h5>
                    
                </div>
            </div>
            
           
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="" target="_blank">Musaliar College</a></p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class="col-lg-5">
                    <ul>
                        <li>All Rights Reserved</li>
                        <li>Terms & Use</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>


</body>
<script>
    function check()
    {
        var letters=/^['A-Z a-z']+$/;
        var numbers=/^['0-9']+$/;
        if(!document.getElementById("name").value.match(letters))
        {
            alert('Input Alphabets for name');
            return false;
        }
        else if(!document.getElementById("contact").value.match(numbers))
        {
            alert('Input digits for contact no');
            return false;
        }
        else
        {
            return true;
        }
    }
    </script>
</html>