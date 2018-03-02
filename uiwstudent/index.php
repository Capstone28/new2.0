<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Portfolio</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  custom style sheet -->
    <link rel="stylesheet" href="css/new.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body id="myPage" style="background-color: aqua;">

<!-- ---------------------------- Carousel header Images ------------------------------------ -->

	<?php require('includes/headerHOME.php') ?>
	<!--  require_once($_SERVER['DOCUMENT_ROOT'] . 'directory/directory/file'); -->

<!-- ----------------------- Stationary NAV bar under images ------------------------------>
	
	<?php require('includes/nav.php') ?>

 <!-- -----------------------Container (CIS/ CSEC program Section)--------------------------- -->
<div class="container-fluid main">
  <h3 class="text-center">IT Programs</h3>
  <p></p>
  <p></p>
  <br>
  
  <h3 class="text-center">Curriculum</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">CSEC</a></li>
    <li><a data-toggle="tab" href="#menu1">CIS</a></li>
    <li><a data-toggle="tab" href="#menu2">Concentrations</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Cyber Security</h2>
      <p></p>
	  <p></p>
    </div>
    
    <div id="menu1" class="tab-pane fade">
      <h2>Computer Information Systems</h2>
      <p></p>
      
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Realms of Learning</h2>
      <p>In the CIS/CSEC program, students have the opportunity to decide what their field of study will be. There are currently five areas that are offered and taught in this program: Cyber Security, Networking, Programming, Web Design, and Emerging Technologies. Each of the students will study in their choice field while being exposed to the other learning fields. During their time in this program, each student will learn the basics of each concentration to get a grasp and better understanding for the overall program.</p>
      <p>Cyber Security:	</p>
      <p>Networking:	</p>
      <p>Programming: </p>
      <p>Web Design: </p>
      <p>Emerging Technologies: </p>
    </div>
  </div>
</div>

<!-- -------------------------- Container (TOUR Section) ------------------------------ -->
 <div id="tour" class="bg-grey">
  <div class="container">
    <h3 class="text-center">TOUR DATES</h3>
    
   </div>
 </div>

<!----------------------------------- Footer --------------------------------------->
	
	<?php require('includes/footerHOME.php') ?>

<!-- --------------------------------Sticky Nav---------------------------------- -->
<script>
$(document).ready(function(){
    /* affix the navbar after scroll below header */
    $(".navbar").affix({offset: {top: $("header").outerHeight(true)} });
});
</script> <!-- ----------------------------------------------------------------- -->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>