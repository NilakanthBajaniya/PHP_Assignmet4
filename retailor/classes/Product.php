<?php

  class Product
  {
    public $name;
    public $price;
    public $quanity;

    function setName($name)
    {
        $this-> name = $name;
    }

    function getName()
    {
        return $this-> name;
    }

    function setPrice($price)
    {
        $this-> price = $price;
    }

    function getPrice()
    {
        return $this-> price;
    }

    function setQuantity($quantity)
    {
        $this-> quantity = $quantity;
    }

    function getQuantity()
    {
        return $this-> quantity;
    }


  }

  $products = [];

  $chocolateBar = new Product();
  $pop = new Product();
  $chips = new Product();

  $chocolateBar-> setName("Chocolate Bar");
  $chocolateBar-> setPrice(1.25);
  $chocolateBar-> setQuantity(10);

  $pop-> setName("Pop");
  $pop-> setPrice(1.50);
  $pop-> setQuantity(15);

  $chips-> setName("Chips");
  $chips-> setPrice(1.75);
  $chips-> setQuantity(20);


  $products[] = $chocolateBar;
  $products[] = $pop;
  $products[] = $chips;

?>
