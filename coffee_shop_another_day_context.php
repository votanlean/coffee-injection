<?php
//coffee_shop_another_day_context.php

//to load Class & Interface file when we need them
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

//at the coffee shop in another day
$milk = new Milk();
$coffee = new MilkCoffee($milk);
$consumer = new AtCoffeeShopConsumer($coffee);
$consumer->readyToWork();
