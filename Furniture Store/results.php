<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Really Bad Furniture Store</title>
	<link rel="stylesheet" href="results.css">
</head>
<body>
	<h1 id="name">Really Bad Furniture Store</h1>
	<div id="results">
	<?php
		if(isset($_POST["furniture"],$_POST["rating"], $_POST["message"])){
			$item = htmlspecialchars($_POST["furniture"]);
			$rating = htmlspecialchars($_POST["rating"]);
			$message = htmlspecialchars($_POST["message"]);
			if($rating==1){
				$rating = "<img src='images/star.png' width=35px height=35px>";
			} elseif($rating ==2){
				$rating = "<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>";
			} elseif($rating == 3){
				$rating = "<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>";
			} elseif($rating == 4){
				$rating = "<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>";
			} elseif($rating == 5){
				$rating = "<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>"."<img src='images/star.png' width=35px height=35px>";
			}
			echo "Item Rated: ".$item."<br>";
			echo "<br>";
			echo "Rating: ".$rating."<br>";
			echo "<br>";

			$edited = str_replace("awful", "pretty bad", $message);
			$edited = str_replace("abominable", "pretty bad", $edited);
			$edited = str_replace("dreadful", "pretty bad", $edited);
			$edited = str_replace("foul", "pretty bad", $edited);
			echo "Review: ".$edited."<br>";
		}
	?>
	</div>
</body>
</html>