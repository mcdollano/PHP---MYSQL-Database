	<?php

		function get_title(){
			echo "Available Products"; 
		}
		function display_content(){
		// echo "<form method='POST' action=''>";
		// 	create_dropdown('category',$category);
		// echo "</form>";
		require 'connection.php';
		echo "<div class = 'row'>";
			echo "<div class='row'>";
				echo "<p><a href='add_items.php' class='btn btn-primary' id='add_new'>Add Products</a></p>";
			echo "</div>";
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
							// echo "<a href='#'><button class='btn btn-default id='purchase-button'>Buy Now!</button></a>";
							echo "<a href='edit.php?id=$id'><button class='btn btn-default id='purchase-button'>Edit</button></a>" ;
							echo "<a href='delete.php?id=$id'><button class='btn btn-default id='purchase-button'>Delete</button></a>";
						echo "</div>"; //--thumbnail
					echo "</div>"; //----column	
				}
			}
		echo "</div>";
	}

	require_once('template.php');
?>
	
