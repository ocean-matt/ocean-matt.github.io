<!DOCTYPE html>
<html lang="en">
<!-- This is the new (2020) website. Now in HTML 5 with Bootstrap 4 for mobile-optimisation. Thomas -->

<head>
  <title>Southampton University Hillwalking Club</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	include("head.php");
?>

</head>

<!-- BODY -->
<body>

<?php
	include("navbar.php");
?>

<!-- Jumbotron, the big grey box (grey by default, change colour using inline css) -->
<div class="jumbotron text-center">
  <img class="img-fluid" src="logo_trans.png"/>
  <p>Welcome to Southampton University Hillwalking Club's website.</p> 
</div>

<!-- Alerts -->
<div class="container">
  <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>COVID-19 Update:</strong> Following the Government lockdown guidelines, club events are currently on hold.
  </div>
  <div class="alert alert-info">
    You can add your walks during lockdown to our <a href="log.php">Land's End to John o'Groats tracker!<a> 
  </div>
</div>
<div class="container">
<p>We are Hillwalking Club, the University's largest sports club and also one of the friendliest!
Our club has a range of different activities every week open to almost anyone, with no committment or membership 
required. Find us on Facebook or join our mailing list by contacting walking@soton.ac.uk to find
out what our next events are. </p> 
</div>

<!-- the Things we Do boxes -->  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <br>
      <h3>Day Walks</h3>
      <p>Walks by ranging from 12 to 26km (occasionally more) usually on Saturday .</p>
      <p>These walks are open to everyone, the only cost is the train ticket and your lunch.</p>
      <a href="daywalks.php" class="btn btn-outline-info" role="button">Day Walks</a>
    </div>
    <div class="col-sm-4">
      <br>
      <h3>Away Trips</h3>
      <p>Whole weekend trips once a month exploring some more remote areas of the UK.</p>
      <p>Destinations include the National Parks (Lakes, Peak etc), Wales, Cornwall and Scotland.</p>
      <a href="awaytrips.php" class="btn btn-outline-info" role="button">Away Trips</a>
    </div>
    <div class="col-sm-4">
      <br>
      <h3>Socials</h3>        
      <p>A chance to meet up with like minded individuals and have some walk-free fun!</p>
      <p>Socials can involve almost anything: treasure hunts, ice skating and pudding socials have all featured in the past. </p>
      <a href="socials.php" class="btn btn-outline-info" role="button">Socials</a>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <br>
      <h3>Expeditions</h3>
      <p>For those keen to do longer, more adventurous or challenging trips and activities.</p>
      <p>Examples include long distance walks, navigation training, wild camping, winter skills, bothying, wild camping and international trips.</p>
      <a href="expeditions.php" class="btn btn-outline-info" role="button">Expeditions</a>
    </div>
    <div class="col-sm-4">
      <br>
      <h3>Membership & FAQ</h3>
      <p>We have two types of club membership. Membership is not required for Day Walks but we would encourage you to get it. </p>
      <p>This page also answers some of the most popular questions we get asked.</p>
      <a href="membership.php" class="btn btn-outline-info" role="button">Membership & FAQ</a>
    </div>
    <div class="col-sm-4">
      <br>
      <h3>Committee</h3>        
      <p>Responsible for managing the club and keeping everything going. Each committee member has their own area of responsibility.</p>
      <p>Keen to see what they think of themselves?</p>
      <a href="committee.php" class="btn btn-outline-info" role="button">Committee</a>
    </div>
  </div>
</div>
<br>
<div class="container">
<!-- Instagram Test -->
<center>
	<a class="nav-link" href="https://www.instagram.com/sotonsuhc/">
	  <i class="fab fa-instagram" style="font-size:60px"></i>
	</a>
</center>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://snapwidget.com/embed/805024"></iframe>
  </div>
</div>

</body>
</html>
