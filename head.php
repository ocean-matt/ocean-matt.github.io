<!-- This head sheet is based on the code from the SUHC website walking.susu.org. Author: Thomas Edwards, 2020. Edited for this site by Matt Clark, June 2020 -->
<!-- Font Awesome icons loaded for general use (inc. Facebook and Instagram icons in navbar) -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->

<!-- This part loads the Bootstrap CSS files, hosted elsewhere. This is key for almost everything, be careful. Key for mobile functionality -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
<!-- This section deals with the 'Favicon' or the little symbol in the top left next to the browser bar. From favicon.io -->
<!--  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  -->

<!-- This loads (load only) the reCaptcha -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<!-- Loads and sets Domine as the standard font as used in club logo. Remove for default style or replace using other font (remember to change stylesheet link too)-->

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Domine&display=swa">
<style>
  body {
    font-family: 'Domine', serif;
  }
  p {
    font-family: 'Domine', serif;
  }
  a {
    color:rgb(63,3,35);
  }
</style>


<!-- THE COMMITTEE-FIER: Changes web colour to SUHC Maroon for 20-21 year -->
<!-- WB In the section below, change all references to rgb(63,3,35) or rgba(63,2,35,0.5) to current committee colour. If new colour is light, you'll also need to change navbar.php logo and the seashell color to something readable-->
<!-- All the colour settings are in here. If in doubt rely on Bootstrap defaults by commenting out all the below -->

<style>          
    .navbar-custom { 
        background-color: rgb(63,3,35);

}
    .navbar-custom .navbar-nav .nav-link {
        color: seashell;
}
    .navbar-custom .navbar-toggler{
	border-color: seashell;
}
    .navbar-custom .navbar-toggler-icon {
	background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='seashell' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");

}
.btn-outline-info {
  color: rgb(63,3,35);
  border-color: rgb(63,3,35);
}

.btn-outline-info:hover {
  color: #fff;
  background-color: rgb(63,3,35);
  border-color: rgb(63,3,35);
}

.btn-outline-info:focus, .btn-outline-info.focus {
  box-shadow: 0 0 0 0.2rem rgba(63,3,35,0.5);
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: rgb(63,3,35);
  background-color: transparent;
}

.btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
.show > .btn-outline-info.dropdown-toggle {
  color: #fff;
  background-color: rgb(63,3,35);
  border-color: rgb(63,3,35);
}

.btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: 0 0 0 0.2rem rgba(63,3,35, 0.5);
}

</style> 
