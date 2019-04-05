<?php
    session_start();
?>
<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marketspace</title>
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:regular,700,600&amp;latin" type="text/css" />
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css" type="text/css"> 
        <link id="theme_style" type="text/css" href="assets/css/style_index.css" rel="stylesheet" media="screen">
     </head>
    <body onload="getLocation()">
        <div class="wrapper">
            <header class="navbar navbar-default navbar-fixed-top navbar-top">
                <div class="container">
                    <div class="navbar-header">
                       <a href="#" class="navbar-brand"><span class="logo"><i class="fa fa-leaf"></i> Marketspace</span></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="new-ads"><a href="#" class="btn btn-ads btn-block">post right now</a></li>
                            <li><a href="signup.php" class="fa fa-user-plus">Signup</a></li>
                            <?php if (isset($_SESSION["email"])) {
                            echo '<li><a href="login.php?logout" class="fa fa-user">Log out</a>';}
                            else {
                            echo'<li><a href="login.php" class="fa fa-user">Login</a>';}
                            ?>
                            <?php if (isset($_SESSION["email"])): ?>
                            <li><a href="myself.php" class="fa fa-paw">Myself</a>
                            <?php else: ?>
                            <li><a href="loginfirst.php" class="fa fa-paw">Myself</a>
                            <?php endif ?>
                        </ul>
                    </div>
                </div>
            </header>
            <section class="serchbar">
                <div class="container text-center">
                    <h2 class="serchbar-title">Find An Awesome Thing !</h2>
                    <p class="serchbar-description hidden-xs">Find all things you need on Marketspace. We give you a simple way.</p>
                    <div class="row serchbar-search-box">
                        <form>
                            <div class="col-md-4 col-sm-4 search-input">
                                <input type="text" class="form-control input-lg search-first" placeholder="I'm looking for...">
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                <select class="form-control input-lg search-second">
                                    <option selected="">All Location</option>
                                    <option>Sydney</option>
                                    <option>Melbourne</option>
                                    <option>Brisbane</option>
                                    <option>Perth
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-4 search-input">
                                <button class="btn btn-custom btn-block btn-lg"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="main">
            <?php if (isset($_SESSION["email"])): ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="row">
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-car shortcut-icon icon-blue"></i></a>
                                        <a href="#"><h3>Vehicle</h3></a>
                                        <span class="total-items">12,345</span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-bicycle shortcut-icon icon-green"></i></a>
                                        <a href="#"><h3>Bicycle</h3></a>
                                        <span class="total-items">12,345</span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-home shortcut-icon icon-brown"></i></a>
                                        <a href="#"><h3>Property</h3></a>
                                        <span class="total-items">12,345</span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-book shortcut-icon icon-light-green"></i></a>
                                        <a href="#"><h3>Book</h3></a>
                                        <span class="total-items">12,345</span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-mobile-phone shortcut-icon icon-dark-blue"></i></a>
                                        <a href="#"><h3>Electronics</h3></a>
                                        <span class="total-items">123,456</span>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-soccer-ball-o shortcut-icon icon-orange"></i></a>
                                        <a href="#"><h3>Sport</h3></a>
                                        <span class="total-items">12,345</span>
                                    </div>  
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-building shortcut-icon icon-light-blue"></i></a>
                                        <a href="#"><h3>Job</h3></a>
                                        <span class="total-items">15,546</span>
                                    </div>  
                                </div>
                                <div class="col-xs-4 col-sm-3">
                                    <div class="shortcut">
                                        <a href="#"><i class="fa fa-diamond shortcut-icon icon-violet"></i></a>
                                        <a href="#"><h3>Jewelry</h3></a>
                                        <span class="total-items">152,546</span>
                                    </div>  
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-9">
                                    <div class="section-header">
                                        <h2>Featured</h2>
                                    </div>
                                    <div class="col-xs-3 col-md-4">
                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-img-grid">
                                                    <a href="#"><img alt="" src="assets/img/products/product-1.jpg" class="img-responsive img-center"></a>
                                                </div>
                                                <div class="item-title">
                                                    <a href="#"><h4>Apple 15" MacBook Pro TouchBar 2.8GHz i7 16GB 256GB SSD</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="#">Computers</a> , <a href="#">Laptops</a></li>
                                                        <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Brisbane</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                        <h3>AU $2,370</h3>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="col-xs-3 col-md-4"> 
                                        <div class="item">
                                            <div class="item-ads-grid">   
                                                <div class="item-img-grid">
                                                    <a href="#"><img alt="" src="assets/img/products/product-2.jpg" class="img-responsive img-center"></a>
                                                </div>
                                                <div class="item-title">
                                                    <a href="#"><h4>Monopoly Junior Game: Disney/Pixar Incredibles 2 Edition</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="#">Games</a> , <a href="#">Board Games</a></li>
                                                        <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Brisbane</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <h3>AU $16</h3>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="col-xs-3 col-md-4">    
                                        <div class="item">
                                            <div class="item-ads-grid">
                                                <div class="item-img-grid">
                                                    <a href="#"><img alt="" src="assets/img/products/product-3.jpg" class="img-responsive img-center"></a>
                                                </div>
                                                <div class="item-title">
                                                    <a href="#"><h4>New Dyson V8 Animal Cordless Vacuum</h4></a>
                                                </div>
                                                <div class="item-meta">
                                                    <ul>
                                                        <li class="item-date"><i class="fa fa-clock-o"></i> Today 10.35 am</li>
                                                        <li class="item-cat"><i class="fa fa-bars"></i> <a href="#">Home Applications</a></li>
                                                        <li class="item-location"><a href="#"><i class="fa fa-map-marker"></i> Brisbane</a></li>
                                                        <li class="item-type"><i class="fa fa-bookmark"></i> New</li>
                                                    </ul>
                                                </div>
                                                <div class="product-footer">
                                                    <h3>AU $599</h3>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">  
                            <div class="widget">
                                <div class="widget-header">
                                    <h3>Trends</h3>
                                </div>
                                <div class="widget-body">
                                    <ul class="trends">
                                        <li><a href="#">Smartphone &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Watch &amp; Jewelry &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Clothes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Shoes &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Games &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Home Application &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Photography &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                        <li><a href="#">Furniture &nbsp;<span class="item-numbers">(2,342)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget">   
                                <div class="widget-header">
                                    <h3 id="demo" >Your LOcation</h3>
                                </div>
                                <div class="widget-body" id="mapholder"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else: ?>
            <p class="text-center" style="font-size:24px">In order to show all market information, please sign in first!</p>
            <?php endif ?>
            </section>
        </div>
        <div class="footer">
            <div class="container">
            <ul class="pull-left footer-menu">
                <li>
                    <a href="#"> Home </a>
                    <a href="#"> About us </a>
                    <a href="mailto:sxlvlm@outlook.com"> Contact me </a>
                </li>
            </ul>
            <ul class="pull-right footer-menu">
                Copyright &copy; 2019. All rights reserved by Will_the_Wizard.<a class="fa fa-at" href="https://iwtw666.github.io/"> Me<a>
            </ul>
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script>
    var x=document.getElementById("demo");
    function getLocation()
    {
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition,showError);
            }
        else{
            x.innerHTML="Geolocation is not supported by this browser.";
            }
    }
    function showPosition(position)
    {
        lat=position.coords.latitude;
        lon=position.coords.longitude;
        latlon=new google.maps.LatLng(lat, lon)
        mapholder=document.getElementById('mapholder')
        mapholder.style.height='400px';
        mapholder.style.width='330px';
        
        var myOptions={
            center:latlon,zoom:15,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            mapTypeControl:false,
            navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
            };
        var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
        var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
        }
    function showError(error){
        switch(error.code) {
        case error.PERMISSION_DENIED:
        x.innerHTML="User denied the request for Geolocation."
        break;
        case error.POSITION_UNAVAILABLE:
        x.innerHTML="Location information is unavailable."
        break;
        case error.TIMEOUT:
        x.innerHTML="The request to get user location timed out."
        break;
        case error.UNKNOWN_ERROR:
        x.innerHTML="An unknown error occurred."
        break;
        }
    }
    </script>
    </body>
</html> 
