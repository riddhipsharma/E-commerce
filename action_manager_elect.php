<?php
	session_start();
	include 'config.php';

	$update=false;
	$pid="";
	$name="";
    $category="";
    $price="";
    $description="";
	$qty="";
    $photo="";
    
	if(isset($_POST['add'])){
		$name=$_POST['name'];
		$category=$_POST['category'];
        $qty=$_POST['qty'];
        $pid=$_POST['pid'];
        $description=$_POST['description'];
        $price=$_POST['price'];

		$photo=$_FILES['image']['name'];
		$upload="images/".$photo;


		$query="INSERT INTO product(P_name,Cat_id,P_quantity,P_id,P_description,Price,P_image)VALUES(?,?,?,?,?,?,?)";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("sssssss",$name,$category,$qty,$pid,$description,$price,$upload);
		$stmt->execute();
		move_uploaded_file($_FILES['image']['tmp_name'], $upload);

		header('location:man_elect1.php');
		$_SESSION['response']="Successfully Inserted to the database!";
		$_SESSION['res_type']="success";
    }
    
    if(isset($_GET['delete'])){
		$pid=$_GET['delete'];

		$sql="SELECT P_image FROM product WHERE P_id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$pid);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['P_image'];
		unlink($imagepath);

		$query="DELETE FROM product WHERE P_id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$pid);
		$stmt->execute();

		header('location:man_elect1.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
    
?>