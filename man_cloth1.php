<?php
  include 'action_manager_cloth.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Manager-Cloth</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

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
                  <a href="man_cloth1.php" class="dropdown-item">Clothing</a>
                        <a href="man_elect1.php" class="dropdown-item">Electronics</a>
                      <a href="man_pharma.php" class="dropdown-item">Pharmacy</a>
                  </div>
              </div>
          </div>
          <div class="navbar-nav ">
              <a href="index.php" class="nav-item nav-link"><img src="images/login.png"></a>
          </div>
      </div>
    </nav>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Manage Products</h3>
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Add Record</h3>
        <form action="action_manager_cloth.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $pid; ?>">
          <div class="form-group">
            <input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="Enter name" required>
          </div>
          <div class="form-group">
            <input type="text" name="category" value="<?= $category; ?>" class="form-control" placeholder="Enter category id" required>
          </div>
          <div class="form-group">
            <input type="tel" name="qty" value="<?= $qty; ?>" class="form-control" placeholder="Enter quantity" required>
          </div>
          <div class="form-group">
            <input type="text" name="price" value="<?= $price; ?>" class="form-control" placeholder="Enter price" required>
          </div>
          <div class="form-group">
            <input type="text" name="description" value="<?= $description; ?>" class="form-control" placeholder="Enter description" required>
          </div>
          <div class="form-group">
            <input type="text" name="pid" value="<?= $pid; ?>" class="form-control" placeholder="Enter product id" required>
          </div>
          <div class="form-group">
            <input type="hidden" name="oldimage" value="<?= $photo; ?>">
            <input type="file" name="image" class="custom-file">
            <img src="<?= $photo; ?>" width="120" class="img-thumbnail">
          </div>
          <div class="form-group">
          <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT P_id,Cat_id,P_image,P_name,Price FROM product where Cat_id like "12%"';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info">Records Present In The Database</h3>
        <table class="table table-hover" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['P_id']; ?></td>
              <td><img src="<?= $row['P_image']; ?>" width="25"></td>
              <td><?= $row['P_name']; ?></td>
              <td><?= $row['Cat_id']; ?></td>
              <td><?= $row['Price']; ?></td>
              <td>
                <a href="action_manager_cloth.php?delete=<?= $row['P_id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this record?');">Delete</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>

<script src="./test.js"></script>
</body>

</html>