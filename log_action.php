<?php
 session_start();
if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	include 'handler.php';
		$query ="select * from userinfo where username ='".$username."'";
		$d = $db->query($query);

			foreach ($d as $data)
			{
				$admin=$data['password'];
					
				if( $password == $admin)	
				{
						session_regenerate_id();
						$_SESSION['username'] = $username;
						session_write_close();
						header('location:main.php');
				}

					else{

						header('location:re_log.php');
					}




			}

};
 ?>
}



?>