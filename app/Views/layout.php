<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- ------------------------------------------owl carousel start------------------------ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ------------------------------------------owl carousel end------------------------ -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/front-page/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <!-- -----------------------header start----------------------- -->

    <header class="header2">
        <div class="container-fluid">
            <div class="row alignitem d-flex justify-content-around">
                <div class="col-6">
                    <div class="row alignitem d-flex justify-content-start">
                        <div class="col-5">
                            <a class="nav-link" href="javascript:void(0)"><img src="<?= base_url() ?>assets/front-page/image/logo,skin-care.png" width="50px" height="50px" alt="" className='logo' /><span style="margin-left:10px" class="itemline">BlossomBeauty</span></a>

                        </div>
                        <div class="col-7 topnav d-flex justify-content-start">
                            <li>
                                <?= anchor("/", "Home", ['class' => "itemline"]) ?>
                                <?= anchor("all", "Deals", ['class' => "itemline"]) ?>
                            </li>

                            <li>
                                <?= anchor("cart", '<div>

                                    <i class="bi bi-cart-dash-fill cart-icon position-relative">

                                       <span class="position-absolute translate-middle badge" id="cart_item_count">
                                           0
                                      </span>
                                     </i>
                                    </div>')
                                ?>
                            </li>

                            <!-- -----------------------cart--------------- -->

                           

                            <!-- <div class=" row pr-5 d-flex justify-content-center bg-info">
                                <div class="col-6 mr-5 border p-3 pd-4 bg-white ml-0" id="cart" style="position:absolute;z-index:1;top:80px;overflow:auto">
                                    <div class="d-flex">
                                        <div class="col-3">
                                            <h4>product</h4>
                                        </div>
                                        <div class="col-3 d-flex flex-wrap align-content center">
                                            <h4>Title</h4>
                                        </div>
                                        <div class="col-3 d-flex flex-wrap align-content center">
                                            <h4>quantity</h4>
                                        </div>
                                        <div class="col-2 d-flex flex-wrap align-content center">
                                            <h4>price</h4>
                                        </div>
                                    </div>
                                    <div id="order" style="overflow: auto;height: 250px;">

                                    </div>
                                    <div id="cart-footer">
                                        <div id="order_btn" class="text-center text-white w-100  p-2 font-weight-blod">
                                            <a><button class="btn allpbutton cart_btnn" style="width: 100%;">order</button></a>
                                        </div>

                                    </div>
                                </div>

                            </div> -->

                            <!-- -----------------------cart--------------- -->

                        </div>
                    </div>

                </div>



                <div class="col-4">
                    <form class="d-flex" role="search">
                        <input class="form-control searchform" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn buttoncolor" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-2 d-flex justify-content-around">

                    <li class="auth">
                        <?= anchor("login", "Login", ['class' => "auth"]) ?>
                        <?= anchor("registration", "registration", ['class' => "auth"]) ?>
                    </li>

                </div>
            </div>
        </div>
    </header>
    <!-- ----------------------------header end---------------------------- -->

    <!-- -----------------------------nav start-----------------------------------$_COOKIE -->
    <nav class="navbar-light nav_color" style="margin-left:0px;">

        <div class="container conteinernav">
            <div class="d-flex justify-content-between">
                <!-- <? //= anchor("", "WOMEN", ['class' => "dropdown-item, itemline"]) 
                        ?> -->


                <div class="dropdown">
                    <?= anchor("", "WOMEN", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('shari', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'V-neck T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'POLO SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'TROUSERS', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'NIGHTWEAR', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'HOODIES', ['class' => 'dropdown-item']); ?></li>
                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'JOGGERS', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'WOMEN TANK TOPS', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'SWEATSHIRTS', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'TRACKSUIT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'LEGGINGS', ['class' => 'dropdown-item']); ?></li>


                            </div>
                        </div>

                    </ul>
                </div>

                <div class="dropdown">
                    <?= anchor("momandbaby", "MEN", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <?= anchor("momandbaby", "KIDS", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <?= anchor("momandbaby", "SALWAR KAMEEZ", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <?= anchor("momandbaby", "PANJABI", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <?= anchor("momandbaby", "COSMETICS", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <?= anchor("momandbaby", "JEWELLERY", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'T-SHIRT', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>
                <div class="dropdown">
                    <?= anchor("", "SHAREE", ['class' => 'dropdown-toggle, itemline', 'id' => 'dropdown-toggle', 'data-bs-toggle' => "dropdown", 'aria-expanded' => "false"]) ?>

                    <ul class="dropdown-menu drop_devide">
                        <div class="row">
                            <div class="col-5 devide_border">
                                <li><?= anchor('jamdani', 'JAMDANI', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('', 'BENAROSHI', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'SILK', ['class' => 'dropdown-item']); ?></li>

                            </div>
                            <div class="col-5">
                                <li><?= anchor('women', 'TATER SHARI', ['class' => 'dropdown-item']); ?></li>
                                <li><?= anchor('women', 'KATAN', ['class' => 'dropdown-item']); ?></li>

                            </div>
                        </div>
                    </ul>
                </div>





            </div>
        </div>
    </nav>
    <!-- --------------------------------nav end-------------------------------------- -->
    <!-- -------------------------------ows carousel start------------------------------ -->
    <?= $this->renderSection('owlCarousel') ?>

    <!-- -------------------------------ows carousel end------------------------------ -->

    <?= $this->renderSection('content')?>
    <?= $this->renderSection('shari')?>
    <?= $this->renderSection('jamdani')?>
    <?= $this->renderSection('checkout')?>


    <!-- <h1>user(id, name, email, password, role, active, created_at)</h1>
  <h1>profile(id, user_id, phone, saddress, baddress2, creared_at)</h1>
  <h1>products()</h1> -->
  <!-- ----------------------------------------------footer1------------------------------ -->
  <div class="container-fluid footer1" style="margin: 30px 0px 30px 0px;">
    <div class="row d-flex justify-content-around align-items-center" style="padding: 10px 0px 10px 0px;margin-left: 36px;">

        <div class="col-4 d-flex">
            <h1 style="color: white;font-size:60px;"><i class="bi bi-chat-left"></i></h1>
            <p style="color: white;margin-left: 10px;">SUBSCRIBE TO OUR NEWSLETTER
                Get all the latest information on Events, Sales and Offers.</p>
        </div>
        <div class="col-2"></div>
        <div class="col-5 d-flex">
            <p style="color: white;">DOWNLOAD OUR NEW APP TODAY! Dont Miss our mobile-only offers and shop with Android Play.</p>
            <button type="button" class="btn btn-light">Download <span><i class="bi bi-arrow-down"></i></span></button>
        </div>
    </div>
</div>
    <!-- ------------------------------------------footer----------------------------- -->
    <div class='fcolor'>
        <div id="foot" class="container-fluid footer color p-2">
            <div class="footerinr color">
                <div class="row fmargin d-flex justify-content-around align-items-center">
                    <div class="col-md-3 about">
                        <h4 class="redline about_h4 flog">ABOUT US</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <div class="icon">
                            <i class="fa-solid fa-location-dot"></i>
                            <span class="f_text">1734 Stonecoal Road</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-phone"></i>
                            <span class="f_text">+021-95-51-84</span>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-envelope"></i>
                            <span class="f_text">email@email.com</span>
                        </div>
                    </div>
                    <div class="col-md-3 mx-2">
                        <h4 class="redline categ_h4 flog">CATEGORIES</h4>
                        <ul class="fotter-text">
                            <li><a class="text-dark">Hot deals</a></li>
                            <li><a class="text-dark">Laptops</a></li>
                            <li><a class="text-dark">Smartphones</a></li>
                            <li><a class="text-dark">Cameras</a></li>
                            <li><a class="text-dark">Accessories</a></li>
                        </ul>

                    </div>
                    <div class="col-md-3">
                        <h4 class="redline info_h4 flog">INFORMATION</h4>
                        <ul class="fotter-text">
                            <li><a class="text-dark">About Us</a></li>
                            <li><a class="text-dark">Contact Us</a></li>
                            <li><a class="text-dark">Privecy Policy</a></li>
                            <li><a class="text-dark">Orders & Returns</a></li>
                            <li><a class="text-dark">Terms & condetion</a></li>
                        </ul>

                    </div>
                    <div class="col-md-2 ">
                        <h4 class="redline serv_h4 flog">SERVICE</h4>
                        <ul class="fotter-text">
                            <li><a class="text-dark">My Account</a></li>
                            <li><a class="text-dark">View Cart</a></li>
                            <li><a class="text-dark">Eishlist</a></li>
                            <li><a class="text-dark">Track My Order</a></li>
                            <li><a class="text-dark">Help</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div style="text-align:center;padding:10px;font-size:40px;color:brown;border:1px solid  rgb(235, 233, 233)">
                <i class="bi bi-facebook" style="padding: 10px;"></i>
                <i class="bi bi-whatsapp" style="padding: 10px;"></i>
                <i class="bi bi-twitter" style="padding: 10px;"></i>
                <i class="bi bi-youtube" style="padding: 10px;"></i>
            </div>
            <div style="text-align:center;padding:30px;">
                <p class='Copyright'>Copyright ©2023 All rights reserved | @round53-lions</p>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
        <!-- ----------------------------------owl carousel--------------------------------- -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- ----------------------------------owl carousel--------------------------------- -->

        <script src="<?= base_url() ?>assets/front-page/js/custom.js"></script>
        <script src="<?= base_url() ?>assets/front-page/js/cart.js"></script>
        <script src="<?= base_url() ?>assets/front-page/js/owl.js"></script>


        <script>
            $(document).ready(function() {
                let cart = new Cart();

                // Update cart total on page load
                // $("#cart_item_count").html(cart.totalItems());

                $(".addto_cart").click(function() {
                    var productId = $(this).data("product-id");

                    let id = null;
                    let title = null;
                    let price = null;
                    let image = null;
                    let quantity = 1;


                    $.getJSON("<?= base_url(); ?>cartapi/" + productId, function(data) {
                        id = data.id;
                        title = data.title;
                        price = data.price;
                        image = data.image;

                        let product = {
                            'id': id,
                            'title': title,
                            'price': price,
                            'quantity': quantity,
                            'image': image
                        };

                        cart.addItem(product);

                        $("#cart_item_count").html(cart.totalItems());
                    });
                });


            });
        </script>

        <?= $this->renderSection('myscript') ?>

</body>

</html>

<!-- //data-product-id="<? //=  $row['id']
                        ?> data k bad diea likha jai -->
<!-- /getJSON() is a jQuery method used to send an AJAX GET request and retrieve JSON data from a server. -->