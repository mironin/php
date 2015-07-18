<html>
<?php
    $title = "My Website";
    $pageTitle = "Welcome to <em>$title</em>";
    $aboutPath = "about.php";
    $today = date('1');
?>
<head>
	<?php echo $title; ?>
</head>
<body>
	<h1>
		<?php echo $pageTitle; ?>
	</h1>
	<p>
		Today is <strong><?php echo $today; ?></strong>
		date.timezone()
	</p>
</body>
</html>