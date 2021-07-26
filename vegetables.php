 <?php
 include("config.php");
 include("connection.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agrihub.com</title>
	<link rel="stylesheet" href="CSS/instructionandknowledge.css">
</head>
<body>
	<header>
		<h1>INSTRUCTION AND KNOWLEDGE</h1>
		<button onclick="window.location.href='index.php'" style = "position:absolute; left:70px; top:80px;font-size: 20px; color: white; background-color:rgba(0, 0, 0, 0.5);border-radius: 30px;padding: 10px;">Home</button>
		<nav>
			<a href="fruits.php">FRUITS</a>
			<a href="vegetables.php" class = "active">VEGETABLES</a>
			<a href="pulses.php">PULSES</a>
			<a href="flower.php" >FLOWERS</a>
		</nav>
		<span class="box">
			<select name="list" id="list" accesskey="target">
			<option value="nothing" selected="selected">SELECT A VEGETABLE</option>
			<option value="beetroot.php">BEET ROOT </option>
			<option value="Bitter_gourd.php">BITTER GOURD</option>
			<option value="Brinjal.php">BRINJAL</option>
			<option value="Broccolli.php">BROCCOLLI</option>
			<option value="Cabbage.php">CABBAGE</option>
			<option value="Capsicum.php">CAPSICUM</option>
			<option value="carrot.php">CARROT</option>
			<option value="Cucumber.php">CUCUMBER</option>
			<option value="Garlic.php">GARLIC</option>
			<option value="Ginger.php">GINGER</option>
			<option value="Ladies_finger.php">LADIES FINGER</option>
			<option value="Mushroom.php">MUSHROOM</option>
			<option value="Onion.php">ONION</option>
			<option value="Potato.php">POTATO</option>
			<option value="Pumpkin.php">PUMPKIN</option>
			<option value="Radish.php">RADISH</option>
			<option value="Spinach.php">SPINACH</option>
			<option value="Turmeric.php">TURMERIC</option>
			<option value="Turnip.php">TURNIP</option>
		
		
		</select>	<input type=button value="GO" onclick="goToNewPage()" />
	</span>
	<script type="text/javascript">
		function goToNewPage()
		{
			var url = document.getElementById('list').value;
			if(url != 'none') {
				window.location = url;
			}
		}
	</script>
	</header>
	<div style="color:white;">
	
<div class="content">
	<h1 style="text-align: left; font-size: 35px;">Did you know facts:</h1>
	<p style="color:white" >
	<i>
    >>Bell peppers are usually sold green, but they can also be red, purple or yellow.<br>
	>>Tomatoes are very high in the carotenoid Lycopene; eating foods with carotenoids can lower your risk of cancer.<br>
	>>Other vegetables high in carotenoids are carrots, spinach, sweet potatoes, and collard greens.<br>
	>>Most of the nutrients in a potato reside just below the skin layer.<br>
	>>A horn worm can eat an entire tomato plant by itself in one day!.<br>
	>>In the United States, more tomatoes are consumed than any other single fruit or vegetable!.<br>
	>>California produces almost all of the broccoli sold in the United States.
	<br>
	>>White potatoes were first cultivated by local Indians in the Andes Mountains of South America.<br>
	>>Yams and sweet potatoes are not the same thing!.<br>
	>>A baked potato (with skin) is a good source of dietary fiber (4 grams).<br>
	>>Actually a fruit, it took a ruling by the Supreme Court in 1893 to make the tomato a vegetable.<br>
	>>Potatoes first appeared in Europe in 1586; they made it to North America in 1719.<br>
	>>The potato disease ?Late Blight? was the principal cause of the Irish Potato Famine, which killed a half million people.<br>
	>>It is recommended that you eat five servings of fruit or vegetables a day. A serving equals one-half cup.

	
</i></p>
</div>
	<main>
       
		
	</main>
</body>
</html>