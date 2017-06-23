<?php

require_once 'connection.php';

if (isset($_POST['add_new'])) {
	$name = $_POST['item_name'];
	$description = $_POST['item_description'];
	$image = "images/". $_POST['item_image'];
	$price = $_POST['item_price'];
	$category = $_POST['item_category'];

	if ($name != '' && $description != '' && $image != '' && $price != '' && $category != '')
	 {
		$sql = "INSERT INTO products(name,description,image,price,category)
				VALUES ('$name','$description','$image','$price','$category')";
		mysqli_query($conn,$sql);
		echo "Item Added Successfully!";
		// header('location:products.php');		
	}else {
		echo "<p class='error_msg'>Error! Fill in the blank fields!</p>";
	}
}

if (isset($_POST['cancel_add'])) {
	header('location:products.php');
}

function get_title(){
	echo 'Add New Item';
}

function display_content(){ ?>

	<div class="add-item-container">
		<form method="POST">
			<h2>Add New Item</h2>
			<div class="form-group">
				<label for="item_name">Name:</label>
				<input type="name" class="form-control" name="item_name" id="item_name">
			</div>	
			<div class="form-group">
				<label for="item_description">Description:</label>
				<input type="textarea" class="form-control" name="item_description" id="item_description">
			</div>	
			<div class="form-group">
				<label for='item_price'>Price:</label>
				<div class="input-group">
					<div class="input-group-addon">Php</div>
					<input type="text" class="form-control" name="item_price" placeholder="Amount">
				</div>
			</div>
			<div class="form-group">
				<label for="item_category">Category:</label>
				<select class="form-control" name="item_category">
					<option>Herschel</option>
					<option>Kate Spade</option>
				</select>
			</div>
			<div class="form-group">
				<label for='item_image'>Upload Image:</label>
				<input type="file" name="item_image">
			</div>
			<input class="btn btn-primary" type="submit" name="add_new" value="Add Items">
			<input class="btn btn-default" type="submit" name="cancel_add" value="Cancel">
		</form>
	</div>

<?php
}

require_once 'template.php';
?>