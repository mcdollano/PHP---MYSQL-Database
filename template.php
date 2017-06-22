<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php get_title()?></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family= Bubbler+One|Open+Sans|Satisfy" rel="stylesheet"> 
</head>
<body>

<?php
require_once 'partials/nav.php';

?>

<?php
display_content();
?>

<?php
require_once 'partials/footer.php';
?>

</body>
</html>
