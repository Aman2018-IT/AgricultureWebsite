 <?php
 session_start();

 include("config.php");
 include("connection.php");
 include("functions.php");

 $user_data = check_login($con);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/again.css">
    <link rel="stylesheet" href="CSS/again2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <title>Agrihub.com</title>

</head>
<body>
    <div class="DSR">        
    <div id="parent">
            
    <h1 style="text-align:left;">Hi folks, Welcome to Agrihub.com.... </h1>

    <div id="border">
        
    </div>
    </div>
    </div>
    
    <div class="write">   
    <div class="container">
        <nav>
                <ul class="mcd-menu">
                    <li>
                            <i class="fa fa-home"></i>
                           <a href="index.php"><strong>Home</strong>
                            <small>sweet home</small></a>
                        <!-- </a> -->
                    </li>

                     <li>                        
                            <i class="fa fa-globe"></i>
                            <a href="fruits.php"><strong>Instruction&nbsp and&nbsp Knowledge </strong>
                            <small>India_Farming</small>
                        </a>
                    </li>

                    <li>
                            <i class="fa fa-gift"></i>
                          <a href="govnt.php"> <strong>Government Schemes </strong>
                            <small>India_Farming</small></a>
                        <!-- </a> -->
                    </li>
                   
                    <li>                        
                            <i class="fa fa-comments-o"></i>
                            <a href="crop_management.php"><strong>Crop&nbsp Management</strong>
                            <small>India_Farming</small>
                        </a>
                
                    <li>                        
                            <i class="fa fa-comments-o"></i>
                            <a href="Planning.php"><strong>Plannig & Estimation</strong>
                            <small>India_Farming</small>
                        </a>
                    
                      <li>                      
                            <i class="fa fa-edit"></i>
                            <a href="about.php"><strong>About us</strong>
                            <small>India_Farming</small>
                        </a>
                    </li>

                    <li class="float">    
                            <i class="fa fa-envelope-o"></i>
                            <a href="logout.php"><strong id="iteam">Logout</strong>
                            </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- <h1 id="heading">Appliction</h1>  -->
        
    </div>
    <div class="manupliate" >
    <div class="ham"> <h1 style="text-align:left;font-size: 40px;">How technology is making Indian agriculture smarter, inclusive and more resilient ?</h1>
    <p style="text-align:left;"> The Indian agriculture sector contributes nearly 18 percent of the gross domestic product (GDP) and 40 percent of the total rural Net Domestic Product (NDP). Despite its significant contribution to driving socio-economic growth, Indian agriculture still faces a number of challenges. These range from issues such as low productivity to climate change, and lack of access to finance.</p> </div>
        

        <div class="changes"><h3 style="text-align: left;"> Lack of knowledge about latest methods and technology:</h3>
       <p style="text-align:left;"> A majority of Indian farmers are smallholders who rely on traditional resource-intensive farming techniques. They have limited access to modern machinery, logistics and storage facilities, and information such as data on weather patterns, soil health, and protection of crops.</p>
        
       <h4 style="text-align:left;"><strong><i><u>Unpredictable climate changes and lack of access to information and forecasts to mitigate these</u>:</i></strong></h4><p style="text-align:left;">Adverse climate change is one of the main threats to sustainable agriculture in India, since it causes soil degradation and reduction in crop yield and produce. It also leads to increased attacks by pests such as locusts, as was seen most recently in December 2019 where over 25,000 hectares of crops were destroyed in what experts term as the worst-such attack in 25 years. A report by the Indian Council of Agricultural Research (ICAR) says that problems caused by climate change could reduce agricultural yields by up to 9 percent in the medium term (2010-2039).</p></div>
       
        <h3 style="text-align:left;color: white;font-size:25px ;">How technology is changing the narrative :</h3>
        <p style="text-align:left;">With the increasing digitalisation of India, today technology can address most of the challenges that farmers face -- from soil issues, climate, irrigation, to supply chain gaps. It can help them predict weather patterns more accurately, adopt more sustainable irrigation practices, reduce wastage and, in turn, enjoy better yields and higher incomes. Farmers can now use something as simple as their smartphones to receive timely updates, relevant information and monitor their crops. More farmers are beginning to understand how leveraging solutions that use the latest technologies such as Artificial Intelligence (AI), Machine Learning (ML), and Cloud offers them greater climate resilience, higher crop yield, and better price control.</p>
         
        <p style="text-align:left;"> Smart farming that uses modern digital technologies such as sensors, location data derived from GPS and satellites, robotics and analytics is changing the face of agriculture in India.</p>
        
        <p style="text-align:left;"> India’s National Strategy on AI recognises agriculture as a priority sector for implementation of AI-driven solutions. According to the Niti Aayog, AI in agriculture is expected to grow at a rate of 22.5 percent CAGR, and is likely to be valued at $2.6 billion by 2025. AI can help farmers predict weather patterns. Big Data helps improve the yield, reduces risk, and increases efficiency. With the right data, farmers will be able to take timely decisions, on what crop to sow, when to sow it, and what method to use.</p>
        
        <p style="text-align:left;">In recent years, the impact of climate change on the agriculture sector has been more pronounced. The Indian government’s Economic Survey (2018) estimated that adverse effects of climate change led to an annual loss of $9-10 billion. There is no doubt that climate-resilient technologies are the need of the hour, and precision agriculture enables farmers to tackle climate change challenges with ease and efficiency. Precision agriculture uses IoT-based approaches that make farming more accurate and deliver more precise outcomes. Based on this, farmers can make informed decisions. It utilises deep data about a specific location and crops to optimise processes, making them more efficient, both in terms of resource utilisation as well as cost. It also leads to more sustainable agricultural practices.</p></div>
 
  </div>
</body>
</html>