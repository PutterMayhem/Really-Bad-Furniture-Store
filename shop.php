<!DOCTYPE html>
<html>
	<head>
		<title>Really Bad Furniture Store</title>
		<link rel="stylesheet" href="shopstylesheet.css">
		<h1 id="name"> Really Bad Furniture Store</h1>
	</head>
	<body>
		<div id="outside-box">
			<?php
				$bedprice=1100;
				$bluecouchprice=699;
				$graycouchprice=450;
				$greenchairprice=299;
				$tableprice=999;
				$uglychairprice=25;
				$weirdcouchprice=750;
				$whitecouchprice=475;
				$membershipprice=39.99;

				$ismember = false;
				if(isset($_POST["furniture"], $_POST["method"], $_POST["quantity"], $_POST["membership"], $_POST["fname"], $_POST["lname"], $_POST["address1"], $_POST["address2"])){
					$item=htmlspecialchars($_POST["furniture"]);
					$method=htmlspecialchars($_POST["method"]);
					$quantity=htmlspecialchars($_POST["quantity"]);
					$membership=htmlspecialchars($_POST["membership"]);
					$fname=htmlspecialchars($_POST["fname"]);
					$lname=htmlspecialchars($_POST["lname"]);
					$address1=htmlspecialchars($_POST["address1"]);
					$address2=htmlspecialchars($_POST["address2"]);
	
					if($item=="Bed") {
						$price=$bedprice;
					} elseif($item=="Blue Couch") {
						$price=$bluecouchprice;
					} elseif ($item=="Gray Couch") {
						$price=$graycouchprice;
					} elseif ($item=="Green Chair") {
						$price=$greenchairprice;
					} elseif ($item=="Table") {
						$price=$tableprice;
					} elseif ($item=="Ugly Chair") {
						$price=$uglychairprice;
					} elseif ($item=="Weird Couch") {
						$price=$weirdcouchprice;
					} elseif ($item=="White Couch") {
						$price=$whitecouchprice;
					} elseif ($item=="Membership") {
						$price=$membershipprice;
					}
					

					$totalprice=$price*$quantity;
					if($membership == true){
						if(($quantity > 1) && ($quantity <= 5)){
							$totalprice = $totalprice * .90;
						} elseif (($quantity > 5) && ($quantity <= 8)){
							$totalprice = $totalprice * .85;
						} elseif ($quantity > 8) {
							$tempprice = ($price * 8) * .85;
							$quantoverlimit = $quantity - 8;
							$overquantityprice = $price * $quantoverlimit;
							$totalprice = $tempprice + $overquantityprice;
						}
					}
					
					$taxedprice=(float) $totalprice*1.08;
					$price = "$".number_format($taxedprice, 2);
					date_default_timezone_set("America/Chicago");
					$Date=date("m/d/Y");
					$methoddate=date("m/d/Y", strtotime($Date."+ 5 days"));

					echo "Order Submitted on ".date("m/d/Y")." at ".date("h:i:sa");
					echo "<br>";
					echo "Name: ".$fname." ".$lname."<br>";
					echo "Address: ".$address1."<br>";
					echo "Address: ".$address2."<br>";
					echo "You ordered ".$quantity." ".$item."s for a total of ".$price;
					echo "<br>";
					echo "Order will be ready for ".$method." on ".$methoddate;
				} else {
					echo "Please enter all information";
					echo "<br>";
					echo "<a href='http://localhost/form.html'>Form Page</a>";
				}

				$order = "Name: ".$fname." ".$lname." Price: ".$price." Date: ".$Date."\n"; 
				$file = fopen("furnitureorders.txt", "a");
				if(flock($file, LOCK_EX)){
					fwrite($file, $order);
					flock($file, LOCK_UN);
				} else {
					echo "Error writing to file";
				}
				fclose($file);

			?>
		</div>
	</body>
</html>

