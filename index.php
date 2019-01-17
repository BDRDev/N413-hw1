<?php

include("_includes/connect.php");

$query = "SELECT * from dogs";
$result = mysqli_query($link, $query);



$dogs = Array();
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)){
	
	$dogs[] = Array( 	"id" => $row["id"],
						"breed" => $row["breed"],
						"color" => $row["color"],
						"energy" => $row["energy"],
						"height" => $row["height"],
						"weight" => $row["weight"] );
}

?>

<DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/n413_roster.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Cute Dogs</title>
        <script src="js/app.js"></script>
    </head>
    
    <body>
    	<!-- BEGIN Bootstrap Navbar -->
    	<nav class="navbar navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Cute dogs</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>
        <!-- END Bootstrap Navbar -->
        <div class="container">
          <div class="row">
            <div class="col-xs-2"></div> <!-- 2-column spacer -->
            <div class="col-xs-10"> <!-- column for content -->
                <?php
                foreach ($dogs as $dog){
                    echo '
            				<div id="student_'.$dog["id"].'" class="student" data-id=' . $dog["id"] . ' 
            				data-breed="'.$dog["breed"] .'">
            				' . $dog["breed"] . '
            				</div>';
                }
                ?>
    		</div> <!-- /col-xs-10 -->
    	  </div> <!-- /.row -->
    	</div>  <!-- /.container -->
    </body>
</html>