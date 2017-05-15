<?php
session_start();
if(!isset($_SESSION["basket"]))
	{
		$_SESSION["basket"] = array();
	}
	$basket = $_SESSION["basket"];

	$id = $_REQUEST["hidId"];
	$name = $_REQUEST["hidName"];
	$image = $_REQUEST["hidImage"];
	$price = $_REQUEST["hidPrice"];
	$qty = $_REQUEST["txtQty"];

	$item = array('id'=>$id, 'name'=>$name, 'price'=>$price, 'qty'=>$qty);
	$basket[] = $item;

	$_SESSION["basket"] = $basket;
	header("location:basket.php");
?>