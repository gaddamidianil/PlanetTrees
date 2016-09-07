<?php
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Planet Trees</title>
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <script type="text/javascript" src="scripts/jquery.min.js"> </script>  
</head>

<body>
  <div id="main">
    <?php include "header.php" ;?>
    <div id="content_header"></div>
    <div id="site_content">
      <?php include "sidebar.php" ;?>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Volunteer</h1>
        <p>
        <a>Planettrees.asp.org</a> is seeking Regional Volunteers in each state!
Volunteers can work from home, contact executives in companies (possibly with an state governemnt connection), associations of American diaspora, and environmental organizations, and create awareness of the opportunity to plant trees and greet friends with ePlanetTreeCertificates.
<br><br><a>Planettrees.asp.org</a> will provide communication collateral that can be used by the volunteer for this purpose.
If the Volunteer is successful in acquiring substantial number of tree plantings from individuals or corporates, the volunteer can be awarded a reasonable remuneration for that success. 
        </p><br><br>
        <p>YOU can make a difference today-- by joining our team of our volunteers. We have a vision of a greener Missouri, but to get there, we rely on volunteers like you to help transform our region into a healthy urban ecosystem, one community at a time.

Volunteering with TreePeople is fun and rewarding. It’s also unlike typical volunteer experiences in that we empower YOU with the support, training and tools you need to be an engine of change.

If you’re not already registered to be a volunteer, sign up now. Once you have a username and password, you can browse through our calendar to sign up for an event.</p>
        <div id="cmngsoon">
        <h2>Coming more data soon...</h2>
        </div>
        <script>
			$(function() {
				$("#cmngsoon").hide(300).show(1000).hide(300).show(1000).hide(300).show(1000).hide(300).show(1000).hide(300).show(1000);
				});
        </script>
      </div>
    </div>
    <div id="content_footer"></div>
    <?php include "footer.php" ;?>
  </div>
</body>
</html>
