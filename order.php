<?php

if(isset($_POST['pay'])){

	$cart = $_POST['cart'];
	include 'handler.php';
	  $query ="select * from cart";
	  $d = $db->query($query);
	  foreach ($d as $data)
	  {
	  		$quantity = $data['cart_quantity'];
	  }


	$order = $_POST['order'];
	$quantity = $_POST['quantity'];
	$sql ="INSERT INTO order_list (order_name,quantity) VALUES (?,?)";
					$stmtinsert = $db->prepare($sql);
					$result = $stmtinsert->execute([$cart,$quantity]);
			if ( $result ) {
				header('location:order_succ.php');
			}
			else {
				echo'error';
}

}
?>