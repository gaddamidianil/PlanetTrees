<?php
session_start();
?>
<html>

<head>
  <title>PlanetTrees</title>
  
  <meta name="description" content="CIS5690 - Advances systems Project" />
  <meta name="keywords" content="cis5690,palnts,donate,trees,ucmo,cis" />
    <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>

  <div id="main">
   <?php include "header.php" ;?>
	<div id="content_header"></div>
    <div id="site_content">
      <div id="banner"></div>
	   <?php include "sidebar.php" ;?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to the Planet Tree System</h1>
        <p> Planet Trees is a non-profit organization which promotes the planting of trees throughout the region. Currently serving Missouri, the organization looks forward to nationwide expansion. PlanetTree
works with municipal governments, state agencies and, in some cases, private land owners to place
trees. All trees are funded through donations and are planted by volunteers</p>
       
        <h2>Learn About more PlantTree <a href="AboutPlanetTree.php">..more</a>.</h2>
      
      <h1>   Our Mission </h1>

 		<p>Trees for the Future is dedicated to improving the livelihoods of impoverished farmers
 		 by revitalizing degraded lands.
 		 Through the “Trees for Life” project providing agro-forestry saplings to the farmers,
 		  PTS networks with NGOs and famers groups in Missouri, Michigan and Erode districts of Texas.<p>
 		  
 	<h1>	  Some of our successful NGO collaborations have been with: </h2>
	<p>
	<ul>
 <li>   Rajini Free Life Foundation, Malaysia.
 <li>   Pasha Web Technologies Cooperation Ltd., 
 <li>   ABS Marketing Limited, India.
 <li>   Planet4Life Trust, New Jersey, U.S.
 <li>   AGKG-Live & Let Live Foundation, Missouri, U.S.
 <li>   Gandhi Memorial Trust, Gujarat, India.
 <li>   GreenEarth Foundation, California, U.S
 <li>   ChildCare NGO Trust, Virginia, U.S.
 <li>   Surya Child Education, Tamil Nadu, India.
</ul>

Social Associations such as the Rotarey Club, The Leonas' Club and The Indian Green Cross have also all been involved in organizing mass tree planting days with their members.
 	 </p>     
      </div>
    </div>
    <div id="content_footer"></div>
    <?php include "footer.php" ;?>
  </div>
</body>
</html>
