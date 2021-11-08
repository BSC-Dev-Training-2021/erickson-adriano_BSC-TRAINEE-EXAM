<?php

if(isset($_POST['pay'])){

	$id = $_POST['id'];
	include 'handler.php';
	  $query ="select * from cart where cart_id='".$id."'";
	  $d = $db->query($query);
	  foreach ($d as $data)
	  {
	  		$quantity = $data['cart_quantity'];
	  		$list = $data['cart_list'];
	  }

	$sql ="INSERT INTO order_list (order_name,quantity) VALUES (?,?)";
					$stmtinsert = $db->prepare($sql);
					$result = $stmtinsert->execute([$list,$quantity]);
			if ( $result ) {
				
				$sql ="DELETE FROM cart  WHERE cart_id='".$id."'";
				$db->query($sql);

				header('location:pay_succ.php');

			}
			else {
				echo'error';
}

}
?>