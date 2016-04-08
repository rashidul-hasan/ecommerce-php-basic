<?php

require_once('dbconnect.php');

function get_category(){
	global $conn;
	$sql = "SELECT * FROM category";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$category_id = $row['category_id'];
		$category_name = $row['category_name'];
		echo "<a class='teal item' href='category.php?category_id=$category_id'>
				$category_name
				<div class='ui teal label'>1</div>
			  </a>";
	}
}

function get_brand(){
	global $conn;
	$sql = "SELECT * FROM brand";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$brand_id = $row['brand_id'];
		$brand_name = $row['brand_name'];
		echo "<a class='teal item' href='brand.php?brand_id=$brand_id'>
				$brand_name
				<div class='ui teal label'>1</div>
			  </a>";
	}
}

