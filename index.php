<?php 

function get_title(){
		echo "Wooden Hanger PH";
	}

function display_content(){
	echo "<div class='banner-container'>";
		echo "<img src='banner/banner1.png'>";
	echo "</div>";
	echo "<h3>FEATURED BRANDS</h3>";
	echo "<div class='featured-container'>";
		echo "<img src='featured/mk.jpg'>";	
		echo "<img src='featured/herschel.jpg'>";	
		echo "<img src='featured/coach.jpg'>";	
	echo "</div>";
	echo "<a href='#'><input type='button' name='button' value='Shop Now' class='btn-shop-now'></a>";
}

require_once('template.php');

?>

