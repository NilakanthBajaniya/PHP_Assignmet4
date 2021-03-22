<?php

require('.\classes\Product.php');
?>

<html>
<head> <title>Electronic Retailor </title> </head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<body>
  <br/>
  <br/>
  <h5> Products: </h5>
<div style="margin-left: 10px;"class="row">

<?php foreach ($products as $product) { ?>

<div style="margin-left:5px; margin-right: 5px;">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo  $product-> getName(); ?> </h5>
      <p class="card-text"><?php echo "Price: $" . $product-> getPrice(); ?> </p>
      <a href="#" class="btn btn-primary prodctBuy" data-product="<?php echo $product-> getName(); ?>"> Buy </a>
    </div>
  </div>
</div>

<?php } ?>
</div>

  <h5 style="margin-top:10px;"> Amount: </h5>
<div style="margin-top:10px;margin-left: 10px;" class="row">

  <div style="margin-left:5px; margin-right: 5px;">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <span class="btn btn-primary amount" data-amount> $1 </span>
        <span class="btn btn-primary amount" data-amount> &cent; 5 </span>
        <span class="btn btn-primary amount" data-amount> &cent; 10 </span>
        <span class="btn btn-primary amount" data-amount> &cent; 25 </span>
      </div>
    </div>
  </div>
</div>
</body>
</html>
