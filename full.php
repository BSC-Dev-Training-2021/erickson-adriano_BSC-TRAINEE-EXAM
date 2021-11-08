<?php
session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ML shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  body{

    background-color: #EDE9E8;

  }

  .box-item{

    width: 80%;
    height: 80%;
    overflow: inherit;
    margin: 20px;
    background-color: white;
      padding: 10px;

}
tr,th{

  border:1px solid black;
  padding: 10px:;
  font-size: 30px;
}

.to-pay{

  width: 80%;
  height: 80%;
  margin: 20px;
  border:1px solid gray;
  border-radius: 5px;
  padding: 10px;
}
</style>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="main.php">Ml Shop</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="main.php">Shop item</a></li>
      <li><a href="aboutus.html">buy Diamond</a></li>
      <li class="active"><a href="full.html">MY item</a></li>
      <li><a href="contactus.html">contact us</a></li>

      <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <img style="height: 30px;width: 60px;" src="img/dias.png">diamond <input  style="width: auto;" type="text" name="diamond" value="24681" placeholder="24681"> <a href="#"></a></li>
      
    </ul>
  </div>
</nav>
  
<div class="box-item">
  <table align="center"> 
      <tr>  
    <th style="background-color: gray;text-decoration: none;">&nbsp<a href="full.html"> To Pay &nbsp</a> </th>
    <th>&nbsp<a href="toship.html"> to ship</a> &nbsp </th>
    <th>&nbsp <a href="delivered.html">delivered</a> &nbsp</th>

      </tr>

  </table>
    <?php
  include 'handler.php';
  $query ="select * from cart";
  $d = $db->query($query);
  ?>

  <h1 align="center">ALL DATA OF TABLE</h1>
  <center>
  <table border="3" cellpadding="2" cellspacing="2">
    <tr>
      <th>order ID</th>
      <th>order</th>
      <th>quantity</th>
      
      
      
    </tr>
    <?php 
    foreach ($d as $data)
    {// opening query in foreach------------------------>
    ?>
    <tr>
      <td><?php  echo $data['cart_id'];?></td>
      <td style="padding: 20px;"> <?php echo '<img src="img/'.$data['cart_list'] . '"';  ?>></td>
      <td><?php echo $data['cart_quantity'];  ?></td>
    </tr>
    <br><br>


  <?php 
  };//closing query in foreach------------------------->
  ?>
  </table>
  <br><br>

<form action="pay.php" method="post">
      enter id you want to pay<input type="text" name="id">

      <button type="submit" name="pay">pay</button>
      
    </form>
</center>
</div>

</body>
</html>