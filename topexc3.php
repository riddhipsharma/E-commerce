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

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
    <title>E-Commerce~Tops</title>
  </head>
  <body>
    <nav class="navbar  sticky-top navbar-expand-md navbar-light" style="background-color:#B3DCC3" >
      <a href="#" class="navbar-brand"><img src="images/logo.png"></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
          <div class="navbar-nav ml-auto mr-auto">
              <a href="shop_page.html" class="nav-item nav-link active">Home</a>
              <a href="contactus.html" class="nav-item nav-link active">Contact</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link  active dropdown-toggle" data-toggle="dropdown">Shops</a>
                  <div class="dropdown-menu">
                  <a href="tops.php" class="dropdown-item">Clothing</a>
                        <a href="ac.php" class="dropdown-item">Electronics</a>
                      <a href="pharma.php" class="dropdown-item">Pharmacy</a>
                  </div>
              </div>
              <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
          </div>
          <div class="navbar-nav ">
              <a href="index.php" class="nav-item nav-link"><img src="images/login.png"></a>
          </div>
      </div>
    </nav>
<!--start of side menu-->
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="tops.php">Tops</a>
  <a href="shirt.php">Shirt</a>
  <a href="jacket.php">Jacket</a>
  <a href="bottom.php">Bottom</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776;Category</button>
  <br>
</div>

<!--end of side menu-->
<!-- product page -->
<div class="small-container single-product">
  <div class="row">
    <div class="col-12 col-md-6">
      <img src="images/clothes/top/bluetee.jpg" width="80%" alt="">
    </div>
    <div class="col-12 col-md-6">
      <p>Home/Top</p>
      <h1>Blue Tee</h1>
      <h4>Rs.600</h4>
      <h4>Size:M</h4>
      <h4>Color:Light Blue Pattern</h4>
      <br>
      <h3>Product-Detail</h3>
      <p>Get this tee in your wardrobe for cool look in summers. </p>
    </div>
  </div>
</div>
  <!-- Footer -->
</section>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

<script type="text/javascript">
$(document).ready(function() {

  // Send product details in the server
  $(".addItemBtn").click(function(e) {
    e.preventDefault();
    var $form = $(this).closest(".form-submit");
    var pid = $form.find(".pid").val();
    var pname = $form.find(".pname").val();
    var pprice = $form.find(".pprice").val();
    var pimage = $form.find(".pimage").val();
    var pcode = $form.find(".pcode").val();

    var pqty = $form.find(".pqty").val();

    $.ajax({
      url: 'action.php',
      method: 'post',
      data: {
        pid: pid,
        pname: pname,
        pprice: pprice,
        pqty: pqty,
        pimage: pimage,
        pcode: pcode
      },
      success: function(response) {
        $("#message").html(response);
        window.scrollTo(0, 0);
        load_cart_item_number();
      }
    });
  });

  // Load total no.of items added in the cart and display in the navbar
  load_cart_item_number();

  function load_cart_item_number() {
    $.ajax({
      url: 'action.php',
      method: 'get',
      data: {
        cartItem: "cart_item"
      },
      success: function(response) {
        $("#cart-item").html(response);
      }
    });
  }
});
</script>
<script src="test.js"></script>
  </body>
</html>
