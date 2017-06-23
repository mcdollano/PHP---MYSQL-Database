<?php
	function get_title(){
		echo 'Edit Page'; 
	}
	function display_content(){
		require 'connection.php';


		$id = $_GET['id'];
		$sql = "SELECT * FROM products WHERE id='$id'";
		$result = mysqli_query($conn,$sql);

		while ($row = mysqli_fetch_assoc($result)) { 
		extract($row);
 
 	echo "
 	<h4>EDIT ITEM</h4>
	<form method='POST' action=''>
		<div class='form-group'>
			<label for='item_name'>
				Name:
			</label>
			<input type='name' class='form-control' name='name' value='".$name."' id='item_name'>
		</div>		
		<div class='form-group'>
			<label for='item_description'>
				Description:
			</label>
			<input type='textarea' class='form-control' name='description' value=' ".$description."' id='item_description'>
		</div>	
		<div class='form-group'>
			<label for='item_price'>
				Price:
			</label>
			<div class='input-group'>
				<div class='input-group-addon'>
					Php
				</div>
				<input type='text' class='form-control' name='price' value=' ".$price."' placeholder='Amount'>
			</div>
		</div>
		<div class='form-group'>
			<label for='item_image'>
				Image Location:
			</label>
			<input type='file' name='image' value=' ".$image."'> 
		</div>
		<p>
			Are you sure you want to Edit this item? 
		</p>
		<input type='submit' class='btn btn-danger' name='yes' value='SAVE'>
		<input type='submit' class='btn btn-default' name='no' value='NO'>
	</form>

	";

			}
	
			if (isset($_POST['yes'])) {
				$name = $_POST['name'];
				$description = $_POST['description'];
				$price = $_POST['price'];
				$image = 'images/'.$_POST['image'];

				$sql = "UPDATE products SET
						name = '$name', 
						price = '$price',
						description = '$description', 
						image = '$image' 
						WHERE id='$id'";
				mysqli_query($conn,$sql);
				header('location: products.php');
			}

			if (isset($_POST['no'])) {
				header('location: products.php');
			}

	}
	require_once('template.php');
?>



