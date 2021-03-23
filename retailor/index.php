<?php

require('.\classes\Product.php');
?>

<html>
<head> <title>Electronic Retailor </title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>

    let name = "";
    let price = 0;
    let paidAmount = 0;

    $(document).ready(function(e){

      $(".amount").click(function(e){

            if(name === ""){

              alert("Please select a product!");
              return;
            }

            selectedAmount = parseFloat($(this).attr('data-amount'));
            paidAmount += selectedAmount;
            var remaindAmount = price - paidAmount;

            if(remaindAmount == 0){

              alert("Enjoy!!");
            }
            else if(remaindAmount < 0){

              alert("Enjoy! Return Amount is " + Math.abs(remaindAmount) + ".");
            }

            $('#amountPaid').html("Paid: " + paidAmount);
            $('#amountRemained').html('Remained: ' + remaindAmount);
      });
    });

    function clickBuy(productName, productPrice){

      name = productName;
      price = productPrice;
      paidAmount = 0;

      $('#selectedProductTitle').parent().css("border", "1px solid darkred");
      $('#selectedProductTitle').parent().css("padding", "10px");

      $('#selectedProductTitle').html("Product: " + productName);
      $('#productPrice').html("Price: " + productPrice);

      $('#amountPaid').html("");
      $('#amountRemained').html("");
    };
  </script>
</head>



<body>
  <br/>
  <br/>
  <h5> Products: </h5>
<div style="margin-left: 10px;"class="row">


<div class="col-md-8">
  <div class="row">
<?php foreach ($products as $product) { ?>

<div style="margin-left:5px; margin-right: 5px;">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?php echo  $product-> getName(); ?> </h5>
      <p class="card-text"><?php echo "Price: $" . $product-> getPrice(); ?> </p>
      <span  class="btn btn-primary productBuy" onClick="clickBuy('<?php echo $product-> getName(); ?>', <?php echo $product-> getPrice(); ?>)" data-product="<?php echo $product-> getName(); ?>"> Buy </span>
    </div>
  </div>
</div>

<?php } ?>
</div>
</div>

<div style="margin-right: 10px;"class="col-md-3">

<h4 id="selectedProductTitle">  </h4>
<h5 id="productPrice"></h5>
<h6 id="amountPaid"> </h6>
<h6 id="amountRemained"> </h6>
</div>
</div>

  <h5 style="margin-top:10px;"> Coin Options: </h5>
<div style="margin-top:10px;margin-left: 10px;" class="row">

  <div style="margin-left:5px; margin-right: 5px;">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <span class="btn btn-primary amount"  data-amount="1"> $1 </span>
        <span class="btn btn-primary amount"  data-amount="0.25"> &cent; 25 </span>
        <span class="btn btn-primary amount"  data-amount="0.1"> &cent; 10 </span>
        <span class="btn btn-primary amount"   data-amount="0.05"> &cent; 5 </span>
      </div>
    </div>
  </div>
</div>
</body>
</html>
