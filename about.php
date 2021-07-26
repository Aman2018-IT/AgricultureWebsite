<?php 
 include("config.php");
 include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Agrihub.com</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
 
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
  display:block;
  margin:auto;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <button onclick="window.location.href='index.php'" style = "position:absolute; left:50px; top:60px;font-size: 20px; color: white; background-color:rgba(0, 0, 0, 0.3);border-radius: 30px;padding: 10px;">Home</button>
  <p></p>
   <strong><p>'Empowering Rural India Digitally!!'</p></strong>
   <p style="text-align:left;">This innovative agricultural portal helps rural communities drive efficiencies and sustainability. We help the farmers become more connected, integrated, & informed than ever before.
    The AgriHub is focused on maximizing food production while minimizing environmental impact and limiting the necessary operating costs. Modernizing agricultural practices is no short-term endeavor, but through the experience of veteran industry leaders, decades of IBM research, artificial intelligence, analytics, and predictive insights with unique, Internet of Things (IoT) data we hope to lead the evolution of modern agriculture.
   </p>

</div>


 
  <div class="column">
    <div class="card">
      <img src="Images/image.jpeg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Aman Kumar</h2>
        <p class="title">Student</p>
        <p><i>Department of Information Technology, Sikkim Manipal Institute of Technology,Majhitar,Sikkim</i></p>
        <p>Email: <Strong>kumaraman190598@gmail.com </Strong></p>
        
      </div>
    </div>
  </div>
  
 
    </div>
  </div>
</div>

</body>
</html>
