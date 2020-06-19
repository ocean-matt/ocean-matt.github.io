<!DOCTYPE html>
<html lang="en">
<!-- This was created in June 2020 by Matt Clark, using the Start Bootstrap template available on GitHub. -->


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Matt Clark - Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">
  
  <!-- Font Awesome icons loaded for general use (inc. Facebook and Instagram icons in navbar) -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>

  <!-- Navigation -->
  <?php
	include("navbar.php");
?>
 
  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Home - Matt Clark</h1>
	  <h2> Oceanography PhD Student, University of Southampton, National Oceanography Centre Southampton. </h2>
      <p class="lead">
	  My current research focuses on the changing North Atlantic Ocean and its effects within European shelf seas. 
	  Using model outputs and observational datasets, I will analyse how the shelf seas are driven by basin-scale change over different timescales. 
	  There will be a strong emphasis on quantifying changes in temperature and salinity structure in the North Sea. 
	  I am excited to be taking an interdisciplinary approach to this: I am interested in how both physical and chemical changes to the water structure alter shelf sea ecosystems and productivity. 
	  I will also be using measurements of plankton biomass from the Continuous Plankton Recorder (CPR) survey to assess any possible relationships.
	  <br><br>My PhD research follows on from my MSci final year research project, which quantified a cold temperature anomaly in the North Atlantic Subpolar Gyre and its effects on transport towards and along the European shelf edge.
	  </p>
      <a href="https://www.southampton.ac.uk/oes/postgraduate/research_students/mpc2g13.page" class="btn btn-primary btn-lg">University web profile</a>
    </header>

	<!-- Alerts -->
	<div class="container">
	  <div class="alert alert-danger">
		<b>Warning:</b> This website is under construction.
	  </div>
	  <div class="alert alert-info">
		alert-info banner test 
	  </div>
	</div>
	
    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">My PhD research</h4>
            <p class="card-text">TEXT</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Publications</h4>
            <p class="card-text">I am currently writing my first paper. Details released soon.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-outline-primary">Content coming soon...</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Public outreach</h4>
            <p class="card-text">See how I've presented science to the public</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More</a>
          </div>
        </div>
      </div>

	  <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">CV & Contact details</h4>
            <p class="card-text">My full details can be found on LinkedIn.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More</a>
          </div>
        </div>
      </div>
      
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
	include("footer.php");
?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
