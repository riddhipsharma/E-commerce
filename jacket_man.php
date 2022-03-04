<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="clothes_style.css" rel="stylesheet">
    <link rel="stylesheet" href="clothtest.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@700&family=Playfair+Display:wght@400;700&family=Poppins:wght@300&family=Scada&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <title>E-Commerce~Jacket</title>
  </head>
  <body>
    <nav class="navbar  sticky-top navbar-expand-md navbar-light" style="background-color:#B3DCC3" >
    <a href="#" class="navbar-brand"><img src="images/logo.png"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
 <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#" class="nav-item nav-link active">Contact</a>
              <a href="#" class="nav-item nav-link"><img src="images/cart.png"></a>
        </div>
        <form class="form-inline">
            <div class="input-group">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-plus-circle" color:#264653;></i>
                    <a href="additem_man.php">Add Item</a>
                      </button>
                </div>
            </div>
        </form>
        <div class="navbar-nav ">
            <a href="index.php" class="nav-item nav-link"><img src="images/login.png"></a>
        </div>
    </div>
</nav>
<section>
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="top_man.php">Tops</a>
    <a href="shirt_man.php">Shirt</a>
    <a href="jacket_man.php">Jacket</a>
    <a href="bottom_man.php">Bottom</a>
  </div>
  <div id="main">
    <button class="openbtn" onclick="openNav()">&#9776; Category </button>
    <br>
  </div>
<!--Latest row 1-->
<div class="small-container">
          <h2 class="title">Latest Products</h2>
          <div class="row">
            <div class="col-lg-3">
              <img src="images/clothes/jacket/blackblazerexclusive.png" alt="">
              <a href="jacket1.html">
              <h4>Black Blazer</h4></a>
              <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs.4000</p>
              <button type="button" name="button" class="Button">Delete</button>

            </div>
            <div class="col-lg-3">
              <img src="images/clothes/jacket/bluepuffedjacket.png" alt="">
              <a href="jacket2.html">
              <h4>Blue Puffed Jacket</h4></a>
              <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs.2000</p>
              <button type="button" name="button" class="Button">Delete</button>

            </div>
            <div class="col-lg-3">
              <img src="images/clothes/jacket/denimjacket.png" alt="">
              <h4>Denim Jacket</h4>
              <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
              </div>
              <p>Rs.3000</p>
              <button type="button" name="button" class="Button">Delete</button>

            </div>
            <div class="col-lg-3">
              <img src="images/clothes/jacket/greenhoodie.png" alt="">
              <h4>Green Hoodie</h4>
              <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
               <i class="fa fa-star-o"></i>
               <i class="fa fa-star-o"></i>
              </div>
              <p>Rs.1500</p>
              <button type="button" name="button" class="Button">Delete</button>

            </div>
            <div class="col-lg-3">
              <img src="images/clothes/jacket/leatherjacket.png" alt="">
              <h4>Leather Jacket</h4>
              <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
               <i class="fa fa-star-o"></i>
               <i class="fa fa-star-o"></i>
              </div>
              <p>Rs.2000</p>
              <button type="button" name="button" class="Button">Delete</button>

            </div>
        </div>
      </div>
        <br>
</section>
<script src="test.js"></script>
</body>
</html>
