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
			<a href="vegetables.php">VEGETABLES</a>
			<a href="pulses.php"class = "active">PULSES</a>
			<a href="flower.php">FLOWERS</a>
		</nav>
		<span class="box">
			<select name="list" id="list" accesskey="target">
			<option value="nothing" selected="selected">SELECT PULSES</option>
			<option value="greengram.php">Green gram beans</option>
			<option value="blackeye.php"> Black eyed beans</option>
			<option value="redlentiles.php">Red lentils</option>
			<option value="yellowpegion.php">Yellow pigeon peas</option>
			<option value="redkidney.php">Red kidney beans</option>
			<option value="whiteandgreenpeas.php"> White and green peas</option>
			<option value="SBgram.php"> Split Bengal gram(chana dal)</option>
			<option value="blackgrambeans.php">Black gram beans</option>
			<option value="rice.php">Rice</option>
			
			
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
	
<div class="content">

	<h1 style="text-align: left; font-size: 35px;">Did you know facts:</h1><br>
	<p style="color:white" ><i>
>>The word pulse originates directly from the Latin puls meaning "thick gruel, porridge, mush.”<br>
	>>Humans have relied on pulses for centuries. Archaeological remains found in modern day Turkey indicate that farmers grew chickpeas and lentils as far back as 7000 - 8000 B.C.
	<br>
	>>The most widely cultivated pulses in Africa include common beans, pigeon pea, cowpea, groundnuts, chickpea and soybean.
	<br>
	>>It takes just 43 gallons of water to produce one pound of pulses, compared with 216 for soybeans and 368 for peanuts.<br>
	>>As nitrogen-fixing crops, pulses actually enrich soils rather than deplete them of nutrients during the growing process.<br>
	
	>>Pulses help to improve food security because as dried seeds, they can be stored for a long period of time without a decrease in nutrition.
	<br>
	>>Pulses are drought-tolerant and hardy under frost conditions, making them suitable to a wide range of environments.
	<br>
	>>Pulses are good sources of protein, fiber, and folate as well as calcium, iron, lysine, and vitamin C.<br>
	>>Pulses contribute about 10 percent of protein intake and 5 percent of energy intake in low-income countries.<br>
	>>Pulses are extremely beneficial for women and children because folate is a key nutrient during periods of rapid growth, such as pregnancy and infancy.

	</i>
</div>
	<main>	
    
</main>
</body>
</html>