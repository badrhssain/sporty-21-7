<?php include('dbconnect.php');
$idproduit = $_GET["id"];
$selectData="SELECT *  FROM produit  WHERE idProduit=$idproduit";
$selectData2="SELECT * FROM gallerie WHERE idProduit =$idproduit";
$rel = mysqli_query($db,$selectData);
$rel2 = mysqli_query($db,$selectData2);
if($rel -> num_rows>0){};
if($rel2 ->num_rows>0){}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>checkout</title>
    <link href="checkout.css" rel="stylesheet">
</head>
<body>
<div class="bigdiv shadow-lg ">
    
    </div>
    <form class="row g-3">
    <?php 
      while($row2=$rel2 ->fetch_assoc()){
        echo' 
        <div class="leftdiv">
        <img class="boot" src="assets/'.$row2["photo_1"].'"<br>';

    
        }
        while($row =$rel -> fetch_assoc()){
         echo'  
           <h2 >'.$row["libelle"].'</h2>
           <h5 class="libelleProduit txt">'.$row["prix"].' $</h5>';}?> 
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</body>
</body>
</html>