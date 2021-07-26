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
			<a href="pulses.php">PULSES</a>
			<a href="flower.php"class = "active" >FLOWERS</a>
		</nav>
		<span class="box">
			<select name="list" id="list" accesskey="target">
			<option value="nothing" selected="selected">SELECT A FLOWER</option>
			<option value="adenium.php">ADENIUM</option>
			<option value="alamandacathartica.php">ALAMANDA CATHARTICA</option>
			<option value="Bougainvillea.php">BOUGAINVILLEA</option>
			<option value="clitoriaternatea.php">CLITORIA TERNATEA</option>
			<option value="crapejasmine.php">CRAPE JASMINE</option>
			<option value="hibiscusrosasinesis.php">HIBISCUS ROSA SINESIS</option>
			<option value="ixora.php">IXORA</option>
			<option value="kalanchoe.php">KALANCHOE</option>
			<option value="lantana.php">LANTANA</option>
			<option value="milli.php">MILLI</option>
			<option value="phlox.php">PHLOX</option>
			<option value="rose.php">ROSE</option>
			<option value="snapdragons.php">SNAPDRAGONS</option>
			<option value="tiobouchina.php">TIOBOUCHINA</option>
		
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
	<p style="color:white" >
	
		1.     Roses are related to apples, raspberries, cherries, peaches, plums, nectarines, pears and almonds.<br>

		2.     Tulip bulbs were more valuable than gold in Holland in the 1600s.<br>
		
		3.     Ancient civilizations burned aster leaves to ward off evil spirits.<br>
		
		4.     Tulip bulbs can be substituted for onions in a recipe.<br>
		
		5.     Chrysanthemums are associated with funerals in Malta and are considered unlucky.<br>
		
		6.     The very expensive spice, saffron, comes from a type of crocus flower.<br>
		
		7.     The largest flower in the world is the titan arums, which produce flowers 10 feet high and 3 feet wide. The flowers smell of decaying flesh and are also known as corpse flowers, as pictured at the top of this post. Creative Commons Flickr photo courtesy of un_cola.	<br>
		8.     Almost 60 percent of fresh-cut flowers grown in the U.S. come from California.
		<br>
		9.     Hundreds of years ago, when Vikings invaded Scotland, they were slowed by patches of wild thistle, allowing the Scots time to escape. Because of this, the wild thistle was named Scotland’s national flower.
		<br>
		10.  The lotus was considered a sacred flower by ancient Egyptians and was used in burial rituals. This flower blooms in rivers and damp wetlands, but may lie dormant for years during times of drought, only to rise again with the return of water. Egyptians viewed it as a symbol of resurrection and eternal life.
		<br>
		11.  Scientists discovered the world’s oldest flower in 2002, in northeast China. The flower, named Archaefructus sinensis, bloomed around 125 million years ago and resembles a water lily.
		<br>
		12.  The juice from bluebell flowers was used historically to make glue.
		<br>
		13.  Foxglove is an old English name, derived from the belief that foxes slipped their feet into the leaves of the plant to sneak up on prey.
		<br>
		14.  Dandelions might seem like weeds, but the flowers and leaves are a good source of vitamins A and C, iron, calcium and potassium. One cup of dandelion greens provides 7,000-13,000 I.U. of vitamin A.
		<br>
		15.  The flower buds of the marsh marigold are pickled as a substitute for capers.
		<br>
		16.  Sunflowers move throughout the day in response to the movement of the sun from east to west.
		<br>
		17.  Moon flowers bloom only at night, closing during the day.
		<br>		18.  Flowering nicotiana is related to tobacco, from which cigarettes are made.
		<br>
		19.  Gas plants produce a clear gas on humid, warm nights. This gas is said to be ignitable with a lit match.
		<br>
		20.  When Mormon pioneers arrived in the Salt Lake Valley, they subsisted on the roots of the Sego Lily Plant. This plant is the state flower of Utah.
		<br>
		21.  The cornstarch-like powder known as arrowroot is derived from the plant, Marantha arundinacea, and is native to India. It was used by indigenous people to draw out the toxins from a poisoned arrow wound. Today, it is used to thicken pies and jellies.
		<br>
		
		22.  Angelica was used in Europe for hundreds of years as a cure for everything from the bubonic plague to indigestion. It was thought to ward off evil spirits.
		<br>
		23.  Blue cohosh, also known as squaw root or papoose root, was used by Native American women to ensure an easy labor and childbirth.
		<br>
		24.  During the Middle Ages, lady’s mantle was thought to have magic healing properties.
		<br>
		25.  When Achilles was born, his mother dipped him head first in a bath of yarrow tea, believing it had protective qualities. Yarrow is still known for healing and was used during World War I to heal soldiers’ wounds.

	</i>
	</p>
</div>
	<main>

       
	</main>
</body>
</html>