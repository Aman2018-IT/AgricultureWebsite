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
			<a href="fruits.php" class = "active">FRUITS</a>
			<a href="vegetables.php">VEGETABLES</a>
			<a href="pulses.php">PULSES</a>
			<a href="flower.php">FLOWERS</a>
		
     
		</nav>
		
			<span class="box" >
				<select name="list" id="list" accesskey="target">
					<option value='none' selected>SELECT A FRUIT</option>
					<option value="apple.php" >APPLE</option>
					<option value="banana.php">BANANA</option>
					<option value="cherry.php">CHERRY</option>
					<option value="coconut.php">COCONUT</option>
					<option value="date.php">DATE PALM</option>
					<option value="grapes.php">GRAPES</option>
					<option value="guava.php">GUAVA</option>
					<option value="jackfruit.php">JACKFRUIT</option>
					<option value="kiwi.php">KIWI</option>
					<option value="litchi.php">LITCHI</option>
					<option value="mango.php">MANGO</option>
					<option value="mosambhi.php">MOSAMBHI</option>
					<option value="orange.php">ORANGE</option>
					<option value="peach.php">PEACH</option>
					<option value="papaya.php">PAPAYA</option>
					<option value="pineapple.php">PINEAPPLE</option>
					<option value="plum.php">PLUM</option>
					<option value="pomegranate.php">POMEGRANATE</option>
					<option value="strawberry.php">STRAWBERRY</option>
					<option value="watermelon.php">WATERMELON</option> 
				</select>
				<input type=button value="GO" onclick="goToNewPage()" />
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
	<h1 style="text-align: left; font-size: 35px;">Did you know facts:</h1>
<p style="color:white" ><i>
>>The study of fruits is called POMOLOGY.<br>
>>A banana is not a fruit, it is a herb!<br>
>>Being easy to digest and highly nutritious, these are the first fruits offered to babies.<br>
>>Strawberries are the only fruit with seeds on the outside. There are 200 seeds in an average strawberry.<br>
>>Red-coloured fruits keep your heart strong.<br>
>>Orange -coloured fruits tend to keep your eyes healthy.<br>
>>Yellow-coloured fruits prevent you from getting sick.<br>
>>Green-coloured fruits help in making your bones and teeth strong.<br>
>>Purple and blue fruits help enhance memory.<br><br>

 
>>Orangutans love eating mangoes! Mangoes are the most loved and the No 1 fruit in the world.<br>
>>Dark green veggies have more vitamin C when compared to light-coloured veggies.<br>
>>Apples stay afloat in water as they are 25 percent air.<br>
>>A kiwi has two times the vitamin C present in an orange.<br>
>>7000 different kinds of apples are grown all around the globe!<br>
>>Pineapples are actually berries and it’s ripening can be speeded up by making it stand upside down (leafy side down).<br>
>>Horticulturists are of the opinion that banana was the first fruit on earth.<br>
>>Dried fruits have more calories than fresh fruits as the process of drying reduces the water content and volume.<br><br>

 
>>Half a cup of figs have the same amount of calcium as half a cup of milk.<br>
>>Eggplants are actually fruits and not veggies. In fact, they are botanically known as berries.<br>
>>The seeds of lychee are poisonous and should not be consumed.<br>
>>A cucumber is not a vegetable but a fruit.<br>
>>Tomatoes are not a veggie but a fruit. They are regarded as the world’s most popular fruit and have more genes than humans.<br>
>>Eating an apple is a more reliable method of staying awake than consuming a cup of coffee as it gives you more energy. The natural sugar in an apple is more potent than the caffeine in coffee.<br>
>>There’s a tree called SALAD TREE that sprouts 3 to 7 different fruits in the same tree.<br>
>>One pomegranate can hold more than 1000 seeds.<br>

 
>>The stalk, rind or skin of a fruit is typically more nutritious than the actual fruit. So, if you peel your fruits before eating them, you may be making a nutritional mistake.<br>
>>Apples, peaches and raspberries are all members of the rose family.<br>
>>Drinking Grapefruit juice while taking some prescription medications can cause instant overdose and death.<br>
>>The COCO DE MER palm tree has the earth’s largest fruit, weighing 42 kg and seeds weighing 17 kg.<br>
>>Pumpkins and avocados are not vegetables. They are fruits.<br>
>>According to one study, avocados are the most nutritious fruits in the world.<br>
>>Square Watermelons are grown by Japanese farmers for easier stack and store.
	</i>
</p>
</div>
</div>
	
<main>

</main>
</body>
</html>



