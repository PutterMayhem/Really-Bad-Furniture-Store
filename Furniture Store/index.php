<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="homestylesheet.css">
	<title>Really Bad Furniture Store</title>
</head>
<body>
	<?php
		class Furniture {
			public $name;
			public $price;
			public $description;
			public $image;

			function __construct($name, $price, $description, $image){
				$this->name = $name;
				$this->price = $price;
				$this->description = $description;
				$this->image = $image;
			}
			function set_name($name){
				$this->name = $name;
			}

			function set_price($price){
				$this->price = $price;
			}

			function set_description($description){
				$this->description = $description;
			}

			function set_image($image){
				$this->image = $image;
			}

			function display(){
				echo "<div class='gallery'>";
				echo "<div class='title'>".$this->name."</div>";
				echo "<img src=".$this->image." alt=".$this->name." width='600' height='400'>";		
				echo "<div class='desc'>".$this->description."</div>";
				echo "<div class='price'>".$this->price."</div>";
				echo "</div>";
			}
		}
		$bed = new Furniture("Bed", 1100, "a bed", "images/bed.jpg");
		$bluecouch = new Furniture("Blue Couch", 699, "A Blue Couch", "images/bluecouch.jpg");
		$graycouch = new Furniture("Gray Couch", 450, "A Gray Couch", "images/graycouch.jpg");
		$greenchair = new Furniture("Green Chair", 299, "A Green Chair", "images/greenchair.png");
		$table = new Furniture("Table with Chairs", 999, "Table with Chairs", "images/tablewchairs.jpg");
		$uglychair = new Furniture("Ugly Chair", 25, "Don't buy this chair. It's ugly", "images/uglychair.jpeg");
		$weirdcouch = new Furniture("Weird Couch", 750, "The weird couch you need in your life", "images/weirdcouch.jpeg");
		$whitecouch = new Furniture("White Couch", 475, "A boring white couch", "images/whitecouch.jpeg");
		$membership = new Furniture("Membership", 39.99, "Become a member", "images/membership.jpeg");

		$shuffle = array($bed, $bluecouch, $graycouch, $greenchair, $table, $uglychair, $weirdcouch, $whitecouch, $membership);
		shuffle($shuffle);
		

		echo "<h1 id='name'> Really Bad Furniture Store</h1>";
		echo "<div id='shop'>";
		echo "<a href='form.html'>Shop Here</a><br><br><br>";
		echo "<a href='review.html'>Review a Product</a>";
		echo "</div>";
		echo "<div='buffer'>";
	
		$shuffle[0]->display();
		$shuffle[1]->display();
		$shuffle[2]->display();
		$shuffle[3]->display();
		$shuffle[4]->display();
		$shuffle[5]->display();
		$shuffle[6]->display();
		$shuffle[7]->display();
		$shuffle[8]->display();
		echo "</div>";


		$prices = array("Bed"=>1100, "Blue Couch"=>699, "Gray Couch"=>450, "Green Chair"=>299, "Table"=>999, "Ugly Chair"=>25, "Weird Couch"=>750, "White Couch"=>475);
		ksort($prices);
		echo "<div id='sorted'>";
		echo "Sorted: ";
		echo "<br>";
		foreach ($prices as $x => $value) {
			echo $x." ".$value;
			echo "<br>";
		}
		echo "</div>";
	?>



	</body>
</html>