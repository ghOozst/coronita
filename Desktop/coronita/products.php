<?php
    //conectando con la base de datos
    $connection=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($connection,'store');
    //Haciendo una consulta para tener todos los productos
    $query="select * from `products`";
    $query_run=mysqli_query($connection,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product.style.css">
    <title>Productos</title>
</head>
<body>
  <?php include('Components/header.php')?>
  <main>
    <?php
      //Mostrando poniendo todos los productos en pantalla
      while($row=mysqli_fetch_array($query_run)){
        $urlImg='data:image;base64,'.base64_encode($row['img_product']);
        $productname= $row['name_product'];
        $productprice= $row['price_product'];
        ?>
        <div class="content">
          <img src=<?php echo $urlImg;?>>
          <p><?php echo $productname;?></p>
          <p>$<?php echo $productprice;?></p>
        </div>
      <?php  } ?>
    <?php include('Components/circules.php');?>
  </main>
</body>
</html>