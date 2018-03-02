
<nav class="navbar navbar-default"> <!--data-spy = JS for sticky Nav bar-->
  <div class="container-fluid">
  	<!-- ------------------- Mobile Navbar ------------------- -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <!-- ------------------- Desktop Nav bar ------------------ -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
      	<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="cis.php">CSEC / CIS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li class="dropdown-header">CSEC program</li>
          	<li><a href="csec.php">CSEC</a></li>
          	<li class="divider"></li>
          	<li class="dropdown-header">CIS program</li>
          	<li><a href="cis.php">CIS</a></li>
          	<li class="dropdown-submenu">
              <a class="dropdown-toggle" data-toggle="dropdown">Concentration</a>
              <ul class="dropdown-menu">
              	<li><a href="concentration/conct_csec.php">CSEC</a></li>
              	<li><a href="concentration/network.php">Networking</a></li>
                <li><a href="concentration/program.php">Programming</a></li>
                <li><a href="concentration/web.php">Web Design</a></li>
                <li><a href="concentration/emergT.php">Emerging Tech</a></li>
              </ul>
            </li>  
          </ul>
        </li>
        <li><a href="#">ASID</a></li>
        <li><a href="#">FASION</a></li>
      	<li><a href="#">PORTFOLIO'S</a></li>
      	<li><a href="http://www.uiw.edu">UIW</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="stulog.php"><span class="glyphicon glyphicon-log-in"></span>     Student Login</a></li>
      </ul>
  	</div>
  </div>
</nav>