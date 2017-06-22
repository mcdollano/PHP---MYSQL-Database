	<?php

		function get_title(){
			echo "products page";
		}
		function display_content(){
		// echo "<form method='POST' action=''>";
		// 	create_dropdown('category',$category);
		// echo "</form>";
		require 'connection.php';
		echo "<div class = 'row'>";
			$sql = "SELECT * FROM products";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
					extract($row);
					echo "<div class='col-sm-6 col-md-4 col-lg-4'>";
						echo "<div class='thumbnail'>";
							echo '<img src ="' . $image . '">' . '<br>';  
							echo  $name . '<br>';
							echo $description . '<br>';
							echo $price . '<br>';
							echo $category . '<br>';
							echo "<p><a href='#' class='btn' role='button' id='purchase-button'> Purchase Now</a><p>";
						echo "</div>"; //--thumbnail
					echo "</div>"; //----column
				}
			}
		echo "</div>";
	}
	require_once('template.php');
?>
	
