<?php
session_start();
if($_SESSION["id"] == ""){
echo '<script type="text/javascript">'; 
echo 'alert("Please Login First");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}



?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <?php
include "customerHeader.php";
    ?>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  .top-right {
    text-align: center;
    position: absolute;
    top: 250px;
    font-size: 18px;
  }








html, body {
    margin: 0;
    padding: 0;
    min-height: 100%;
}

.nav ul {
    margin: 0;
}

.nav li {
    display: inline;
}

.nav a {
    display: inline-block;
    padding: .5em;
    color: white;
    text-decoration: none;
}

.main-nav {
    text-align: center;
    font-size: 1.1em;
    font-weight: lighter;
    border-bottom: 1px solid rgba(255, 255, 255, .3)
}

.main-nav li {
    padding: 0 5%;
}

.nav a:hover {
    background-color: rgba(255, 255, 255, .3)
}

.main-header {
    background-color: rgba(0, 0, 0, .6);
    background-image: url("Images/Header Background.jpg");
    background-blend-mode: multiply;
    background-size: cover;
    padding-bottom: 30px;
}


.band-name-large {
    font-size: 30px;
}

.content-section {
    margin: 1em;
}

.container {
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
}



.about-band-image {
    float: left;
    height: 200px;
    width: 200px;
    margin: 15px;
    border-radius: 50%;
}

.main-footer {
    background-color: #56CCF2;
    color: white;
    padding: .25em 0;
}

.main-footer-container {
    display: flex;
    align-items: center;
}

.main-footer-container ul {
    flex-grow: 1;
    text-align: end;
}

.footer-nav li {
    padding: 0 .5em;
}

.footer-nav img {
    width: 30px;
    height: 30px;
}

.btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
}

.btn-header {
    margin: .5em 15% 2em 15%;
    color: white;
    border: 2px solid #2D9CDB;
    background-color: rgba(255, 255, 255, .1);
    border-radius: 0;
    font-size: 1.5em;
    font-weight: lighter;
    padding-left: 2em;
    padding-right: 2em;
}

.btn-header:hover {
    background-color: rgba(255, 255, 255, .3);
}

.btn-play {
    display: block;
    margin: 0 auto;
    color: #2D9CDB;
    font-size: 4em;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    padding: 0;
    text-align: center;
}

.btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .20px;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: #2D9CDB;
}


.shop-item {
    margin: 20px;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: left;
    font-weight:;
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.shop-item-image {
    height: 250px;
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
}

.shop-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 30%;
}

.cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
}

.cart-quantity {
    width: 35%;
}

.cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
}

.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: #333;
    font-size: 16px;
}

.btn-purchase {
    display: block;
    margin: 30px auto;
    font-size: 16px;
    color: white;
    background: #5F9EA0;
    padding: 10px;
    border: none;
    border-radius: 5px;
}

  </style>

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="customerMenu.php?id=<?php echo"$_SESSION[id]";?>">Home</a>
            </li>
            <li class="breadcrumb-item active">Equipment list</li>
          </ol>

          <!-- Page Content -->
          <h1>Select Your Equipment</h1>
          <hr>


<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()"></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <head>
        <title>Equipment</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="../../libs/cEquipment.js" async></script>
    </head>
    <body>
        
            <h1 class="band-name band-name-large">Equipment</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">Speaker</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Sony Speaker</span>
                    <img class="shop-item-image" src="../../libs/Sony_Speaker.png">
                    <div class="shop-item-details">Lan Sdn Bhd. Sony SS-CS8 2-Way 
                        3-Driver Centre 
                        Channel Speaker 
                        [Genuine Product 
                        From Sony Malaysia] 
                        CENTRE SPEAKER FINISH
                        Cloth (Grille) PP 
                        Sheet (Cabinet) 
                        <span class="shop-item-price">RM19.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Logitech Multimedia Speaker </span>
                    <img class="shop-item-image" src="../../libs/speaker2.png">
                    <div class="shop-item-details">Shah Sdn Bhd. Logitech Multimedia Speaker Z213 [Original Logitech Malaysia] FULL SOUND IN A COMPACT DESIGN
                        <span class="shop-item-price">RM24.99</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
            
                
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Canopy</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Instant Canopy</span>
                    <img class="shop-item-image" src="../../libs/canopy1.jpg">
                    <div class="shop-item-details">Siew Sdn Bhd. CANOPY TENT ACCESSORIES: Set of 4 wall panels that fits 10 x 10-foot straight leg W100, C100, or S100 Quik Shade canopies (not included)
                        <span class="shop-item-price">RM72.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Caravan Canopy</span>
                    <img class="shop-item-image" src="../../libs/canopy2.jpg">
                    <div class="shop-item-details">Ruben Sdn Bhd. The TitanShade® is a light-duty, steel commercial grade instant canopy. The durable device is designed for use at outdoor venues, such as street fair vendors, farmer’s markets, tailgaters and work crews
                        <span class="shop-item-price">RM69.99</span>
                        <button class="btn btn-primary shop-item-button"  type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">RM0</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        
    </body>
</center>
<br>

       <br>

     <?php
         include 'customerFooter.php';
         ?>



</html>