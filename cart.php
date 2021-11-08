<?php

if(isset($_POST['buy'])){

	include 'handler.php';
	$order = $_POST['order'];
	$quantity = $_POST['quantity'];
	$sql ="INSERT INTO cart (cart_list,cart_quantity) VALUES (?,?)";
					$stmtinsert = $db->prepare($sql);
					$result = $stmtinsert->execute([$order,$quantity]);
			if ( $result ) {
				header('location:order_succ.php');
			}
			else {
				echo'error';
}

}
?>