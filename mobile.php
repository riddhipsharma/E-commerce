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
    <title>E-Commerce~Mobile</title>
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

     <!--end of top menu-->
     <section>
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="mobile.php">Mobiles</a>
    <a href="refrigerator.php">Refrigerator</a>
    <a href="ac.php">A/C</a>
    <a href="tv.php">Television</a>
  </div>
  <div id="main">
    <button class="openbtn" onclick="openNav()">&#9776; Category </button>
    <br>
  </div>
    </section>
    <!--end of side menu-->
    <!-- Displaying Products Start -->

   <!-- Displaying Products Start -->
   <div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM product where cat_id="1301"');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
      <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
        <div class="card-deck">
          <div class="card p-2 border-secondary mb-2">
            <img src="<?= $row['P_image'] ?>" class="card-img-top" >
            <div class="card-body p-1">
              <h4 class="card-title text-center text-info"><?= $row['P_name'] ?></h4>
              <h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($row['Price'],2) ?>/-</h5>

            </div>
            <div class="card-footer p-1">
              <form action="" class="form-submit">
              <div class="row p-2">
                <div class="col-md-6 py-1 pl-4">
                    <b>Available : </b>
                  </div>
                  <div class="col-md-6">
                  
                    <input type="number"  class="form-control pqty" value="<?= $row['P_quantity'] ?>">
                  </div>
                </div>
                <input type="hidden" class="pid" value="<?= $row['Cart_id'] ?>">
                <input type="hidden" class="pname" value="<?= $row['P_name'] ?>">
                <input type="hidden" class="pprice" value="<?= $row['Price'] ?>">
                <input type="hidden" class="pimage" value="<?= $row['P_image'] ?>">
                <input type="hidden" class="pcode" value="<?= $row['P_id'] ?>">
                <button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to
                  cart</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <!-- Displaying Products End -->

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
