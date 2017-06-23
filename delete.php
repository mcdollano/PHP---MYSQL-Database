<?php
		function get_title(){
			echo 'Delete Page'; 
		}
		function display_content(){
			require 'connection.php';

			$id = $_GET['id'];
			$sql = "SELECT * FROM products WHERE id='$id'";
			$result = mysqli_query($conn,$sql);

			while ($row = mysqli_fetch_assoc($result)) { 
				extract($row);
 ?>
					<h4>DELETE ITEM</h4>
	<p>
		Are you sure you want to Delete this item? 
	</p>

	<?php		
		echo '<img src ="' . $image . '">' . '<br>'; 
	?>
	<FORM method='POST'>
		<input type='submit' class='btn btn-danger' name='yes' value='DELETE'>
		<input type='submit' class='btn btn-default' name='no' value='NO'>
	</FORM>
<?php  
			}
	
			if (isset($_POST['yes'])) {
				$sql = "DELETE FROM products WHERE id='$id'";
				mysqli_query($conn,$sql);
				header('location: products.php');
			}

			if (isset($_POST['no'])) {
				header('location: products.php');
			}

	}
	require_once('template.php');
?>



