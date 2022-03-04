<?php
	session_start();
    require 'config.php';
    $update=false;


//update quantity
	if(isset($_POST['update_quantity'])){
		$qty = $_POST['qty'];
		$query = $conn->prepare('	CREATE TRIGGER inventory_update
		AFTER INSERT ON cart
		FOR EACH ROW
		UPDATE product
		SET product.P_quantity = product.P_quantity - cart.Cart_NoOfItems
		where product.P_id = Cart.P_id');
		$query -> bind_param('s',$qty);
		$query->execute();
		header('location:cart.php');
	}
?>