<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Student Portfolio</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  custom style sheet -->
    <link rel="stylesheet" href="../css/new.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../bootstrap-3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- -------------------------- Carousel header Images ------------------------------ -->

	<?php require('includes/CONCTheader.php') ?>

<!-- ------------------------- Stationary NAV bar under images ------------------------->

	<?php require('includes/CONCTnav.php') ?>

 <!-- -------------------Container (CIS/ CSEC program Section)----------------------- -->
<div id="band" class="container">
	<div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Sat. 28 November 2015</p>
        </div>
      </div>
  <div class="col-sm-8">
      <h3 class="text-center">Emerging Technologies</h3>
      <div>
      	<h4>Faculty</h4>
      	<p>Youngblood, Phil - Research Biochemist in 1970's, U.S. Navy from 1970's-1990's (retired in 1996), over 20 years teaching at three universities. Married to Deb for over 26 years: two dogs 
      	and extended family. Loves to travel, garden, play video games. In dissertation phase of PhD in Education (Organizational Leadership); PhD (ABD) in Information Systems, M.S. in Information Systems, 
      	B.S. in Chemistry from University of Hawaii. Founded and headed UIW�s CIS Program from 2003-2017.</p>
      </div>
 	  <br>
      <div>
      	<h6><b>Networking Classes Required</b></h6>
  	  		<p><b>1000 Level</b>
  	  		<br> 1301 Computer Information Systems
	  		<br>
	  		<p><b>2000 Level</b>
	  		<br> 2328 Hardware and Systems Software
	  		<br> 2330 Programming I
      		<br> 2335 Network+
      		<br> 2340 Windows Operating Systems
      		<br> 2350 UNIX/Linux Operating Systems (pre: 2340)
      		<br> 2368 Website Development I (pre: 2328)
      		<br>
      		<p><b>3000 Level</b>
      		<br> 3319 Internship in CIS
			<br> 3362 Systems Analysis and Design
			<br> 3367 Networks and Telecommunications (pre: 2335)
			<br> 3380 Emerging Technologies 
			<br>
			<p><b>4000 Level</b>
			<br> 4190 Seminar in CIS
			<br> 4310 Management of Technology
			<br> 4340 Computer Systems Security
			<br> 4380 Virtual Environments 
			<br> 4390 CIS Capstone
      </div>
  </div>
</div>

<!-- ------------------------ Container (TOUR Section) ------------------------------ -->
<div id="tour" class="bg-grey">
  
</div>

<!-- -----------------------------------Footer--------------------------------------- -->

	<?php require('includes/CONCTfooter.php') ?>

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