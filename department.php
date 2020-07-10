<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Virtual Police Station</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/half-slider.css" rel="stylesheet">
	<style>
	
	</style>
	
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="font-size: 28px;" class="navbar-brand" href="#">Virtual Police Station</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
			<div class="col"> 
			<div class="row">
       <div class="collapse  navbar-right navbar-collapse " id="bs-example-navbar-collapse-1"> 
                <ul class="nav navbar-nav">
                    
                    <li>
                        <a href="admin/">ADMIN</a>
                    </li>
										<li> | </li>
					 <li>
                        <a href="users/adreg.php">ADMIN REGISTRATION</a>
                    </li>
					
					 <li>
                        <a href="users/comreg.php">COMMISONER REGISTRATION</a>
                    </li>
							<li> | </li>  	
					 <li>
                        <a href="commisoner/">COMMISONER</a>
                    </li>
					
                </ul>
            </div>
			
			</div>
			
			
			
			</div>
            <!-- /.navbar-collapse -->
       
        <!-- /.container -->
    </nav>
  
	
    <div id="myCarousel" class="carousel slide abc container-fluid" >
        <!-- Indicators -->
		
		
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
           
            <div class="item active">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1 (4).jpg');"></div>
                <div class="carousel-caption">
                  
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1 (7).jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1 (5).jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1 (3).jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1 (2).jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
			<div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('img/1 (8).jpg');"></div>
                <div class="carousel-caption">
                
                </div>
            </div>
			
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
</div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1>Virtual Police Station</h1>
                
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   <b class="copyright">&copy;  Virtual Police Station(VPN) </b> All rights reserved.
                </div>
            </div>
            <!-- /.row -->
		
	</div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
