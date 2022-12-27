<?php
    function component($productName,$productPrice,$productImg){
        $arr = array($productName,".php");
        $link = implode($arr);
    $element = "
    <div class=\"product\">
        <div class=\"product-img\">
            <img src=\"$productImg\" alt=\"\">
            <div class=\"product-label\">
                <span class=\"sale\">-30%</span>
                <span class=\"new\">NEW</span>
            </div>
        </div>
        <div class=\"product-body\">
            <p class=\"product-category\">Category</p>
            <h3 class=\"product-name\"><a href=\"\">$productName</a></h3>
            <h4 class=\"product-price\">$productPrice$<del class=\"product-old-price\">$990.00</del></h4>
            <div class=\"product-rating\">
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
                <i class=\"fa fa-star\"></i>
            </div>
        </div>
        <div class=\"add-to-cart\">
        <a href=\"$link\"><button class=\"add-to-cart-btn\"><i class=\"fa fa-shopping-cart\"></i> add to cart</button></a>
        </div>
    </div>
        ";
        echo $element;
    }

    function products($pName,$pPrice,$proinfo,$img1,$img2,$img3,$img4){
        $page = "
        <!DOCTYPE html>
        <html lang=\"en\">
            <head>
                <meta charset=\"utf-8\">
                <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

                <title>Product</title>

                <!-- css -->

                <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,500,700\" rel=\"stylesheet\">

                <link type=\"text/css\" rel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>

                <link type=\"text/css\" rel=\"stylesheet\" href=\"css/slick.css\"/>
                <link type=\"text/css\" rel=\"stylesheet\" href=\"css/slick-theme.css\"/>

                <link type=\"text/css\" rel=\"stylesheet\" href=\"css/nouislider.min.css\">

                <link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">

                <link type=\"text/css\" rel=\"stylesheet\" href=\"css/style.css\"/>
            </head>
            <body>
                <header>
                    <div id=\"top-header\">
                        <div class=\"container\">
                            <ul class=\"header-links pull-left\">
                                <li><a href=\"index.php\" class=\"logo\">
                                    <img src=\"./img/logo.png\" alt=\"FastBrand\" width=\"15%\" height=\"3%\">\
                                </a></li>
                                <li><a href=\"#\"><i class=\"fa fa-phone\"></i> +99890 015 14 10</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> ikromovinomjon123@gmail.com</a></li>
                                <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i> yangiyol shahar</a></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <div class=\"section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-5 col-md-push-2\">
                                <div id=\"product-main-img\">
                                    <div class=\"product-preview\">
                                        <img src=\"$img1\" alt=\"\">
                                    </div>

                                    <div class=\"product-preview\">
                                        <img src=\"$img2\" alt=\"\">
                                    </div>

                                    <div class=\"product-preview\">
                                        <img src=\"$img3\" alt=\"\">
                                    </div>

                                    <div class=\"product-preview\">
                                        <img src=\"$img4\" alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-2  col-md-pull-5\">
                                <div id=\"product-imgs\">
                                    <div class=\"product-preview\">
                                        <img src=\"$img1\" alt=\"\">
                                    </div>

                                    <div class=\"product-preview\">
                                        <img src=\"$img2\" alt=\"\">
                                    </div>

                                    <div class=\"product-preview\">
                                        <img src=\"$img3\" alt=\"\">
                                    </div>

                                    <div class=\"product-preview\">
                                        <img src=\"$img4\" alt=\"\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-md-5\">
                                <div class=\"product-details\">
                                    <h2 class=\"product-name\">$pName</h2>
                                    <div>
                                        <div class=\"product-rating\">
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star\"></i>
                                            <i class=\"fa fa-star-o\"></i>
                                        </div>
                                        <p class=\"review-link\">10 dona sotilgan</p>
                                    </div>
                                    <div>
                                        <h3 class=\"product-price\">$pPrice $ </h3>
                                        <span class=\"product-available\">Sotuvda bor</span>
                                    </div>
                                    <p>
                                        $proinfo
                                    </p>

                                </div>
                            </div>

                            <div class=\"col-md-12\">
                                <div id=\"product-tab\">
                                    <ul class=\"tab-nav\">
                                        <li class=\"active\"><a data-toggle=\"tab\" href=\"#tab1\">Buyurtma berish</a></li>
                                    </ul>

                                    <div class=\"tab-content\">
                                        <div id=\"tab1\" class=\"tab-pane fade in active\">
                                        <div class=\"row\">
                                                <div class=\"col-md-3\">
                                                    <div class=\"form-group\">
                                                        <label for=\"name\">Ismingiz va Familiyangizni kiriting : </label>
                                                    </div><br>
                                                    <div class=\"form-group\">
                                                        <label for=\"addres\">Manzilingizni kiriting</label>
                                                    </div><br>
                                                    <div class=\"form-group\">
                                                        <label for=\"\"> mahsulotdan nechta kerakligini yozing</label>
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <label for=\"\">Telefon raqamingizni kiriting</label>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-9\">
                                                <form action=\"base.php\" method=\"post\">
                                                    <div class=\"form-group\">
                                                        <input class=\"input\" type=\"text\" name=\"name\" placeholder=\"F.I.O\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input class=\"input\" type=\"text\" name=\"addres\" placeholder=\"Manzil\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input class=\"input\" type=\"text\" name=\"number\" placeholder=\"Soni\">
                                                    </div>
                                                    <div class=\"form-group\">
                                                        <input class=\"input\" type=\"text\" name=\"tel\" placeholder=\"Telefon raqami\">
                                                    </div>
                                                    <button type=\"submit\" class=\"btn btn-danger\">Buyurtma berish</button>
                                                </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <div id=\"newsletter\" class=\"section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"newsletter\">
                                    <p>Yangiliklardan xabardor bo'lish uchun <strong>Emailingizni kiriting</strong></p>
                                    <form>
                                        <input class=\"input\" type=\"email\" placeholder=\"Emailingizni kiriting\">
                                        <button class=\"newsletter-btn\"><i class=\"fa fa-envelope\"></i> Yuborish</button>
                                    </form>
                                    <ul class=\"newsletter-follow\">
                                        <li>
                                            <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"><i class=\"fa fa-telegram\"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <footer id=\"footer\">
                    <div class=\"section\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-3 col-xs-6\">
                                    <div class=\"footer\">
                                        <h3 class=\"footer-title\">About Us</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                                        <ul class=\"footer-links\">
                                            <li><a href=\"#\"><i class=\"fa fa-map-marker\"></i>Yangiyol shahar</a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i>+99890 015 14 10</a></li>
                                            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>ikromovinomjon123@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"col-md-3 col-xs-6\">
                                    <div class=\"footer\">
                                        <h3 class=\"footer-title\">Categories</h3>
                                        <ul class=\"footer-links\">
                                            <li><a href=\"#\">Hot deals</a></li>
                                            <li><a href=\"#\">Laptops</a></li>
                                            <li><a href=\"#\">Smartphones</a></li>
                                            <li><a href=\"#\">Cameras</a></li>
                                            <li><a href=\"#\">Accessories</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"clearfix visible-xs\"></div>

                                <div class=\"col-md-3 col-xs-6\">
                                    <div class=\"footer\">
                                        <h3 class=\"footer-title\">Information</h3>
                                        <ul class=\"footer-links\">
                                            <li><a href=\"#\">About Us</a></li>
                                            <li><a href=\"#\">Contact Us</a></li>
                                            <li><a href=\"#\">Privacy Policy</a></li>
                                            <li><a href=\"#\">Orders and Returns</a></li>
                                            <li><a href=\"#\">Terms & Conditions</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"col-md-3 col-xs-6\">
                                    <div class=\"footer\">
                                        <h3 class=\"footer-title\">Service</h3>
                                        <ul class=\"footer-links\">
                                            <li><a href=\"#\">My Account</a></li>
                                            <li><a href=\"#\">View Cart</a></li>
                                            <li><a href=\"#\">Wishlist</a></li>
                                            <li><a href=\"#\">Track My Order</a></li>
                                            <li><a href=\"#\">Help</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <script src=\"js/jquery.min.js\"></script>
                <script src=\"js/bootstrap.min.js\"></script>
                <script src=\"js/slick.min.js\"></script>
                <script src=\"js/nouislider.min.js\"></script>
                <script src=\"js/jquery.zoom.min.js\"></script>
                <script src=\"js/main.js\"></script>

            </body>
        </html>
        ";
        echo $page;
    }
?>