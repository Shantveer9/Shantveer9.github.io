<!DOCTYPE HTML>
<html>
<head>
<title> Home Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style type=text/css>
/*--
	wrapper Start 
--*/
#intro {
  padding: 100px 0;
}
#intro .block h2 {
  padding-top: 35px;
  line-height: 27px;
  margin: 0;
}
#intro .block p {
  color: #7B7B7B;
  padding-top: 20px;
}
#intro .block img {
  padding-left: 40px;
  width: 100%;
}
#intro .section-title {
  margin-bottom: 0px;
}
#intro .section-title p {
  padding-top: 20px;
}
.bs-example {
            margin: 50px;
            padding-left: 351px;
        }
          
        .modal-content iframe {  
          margin: 0 auto;
            display: block;
        }
</style>
    <script>
        $(document).ready(function() {
            var url = $("#Geeks3").attr('src');
            $("#Geeks2").on('hide.bs.modal', function() {
                $("#Geeks3").attr('src', '');
            });
            $("#Geeks2").on('show.bs.modal', function() {
                $("#Geeks3").attr('src', url);
            });
        });
    </script>
</head>
<body>
<!--header-->
<div id="header_banner10">
			<div class="header">
                <div class="container">
                    <div class="header-top">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                      </button>
                                    <div class="navbar-brand">
                                       <img src="images\logo.webp" width='80' height='75' alt=" ">
                                    </div>
                                </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1;">
                              <ul class="nav navbar-nav" style="font-size:18px;">
                                    <li><a href="index.php">Home </a></li>
									<li><a href="admin/index.php">Login</a></li>
									<!--<li><a href="admin/index.php">Admin Login</a></li>-->
                                </ul>
                              
                            </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
                        </nav>

                    </div>
                </div>
            </div>
		</div>
   
<div class="container">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/12ss.webp" alt="Los Angeles" style="width:200%;">
      </div>

      <div class="item">
        <img src="images/13ss.webp" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="images/14ss.webp" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div class="block">
              <div class="section-title">
                <h1>About Us</h1>
                <h4>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics</p>
              </div>
              <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id </p>
            </div>
          </div><!-- .col-md-7 close -->
          <div class="col-md-5 col-sm-12">
            <div class="block">
              <img src="images/wrapper-img.gif" alt="Img">
            </div>
          </div><!-- .col-md-5 close -->
        </div>
      </div>
    </section>
    <div class="bs-example">
            <a href="#Geeks2"
            class="btn btn-lg btn-primary"
            data-toggle="modal"><img src="images/12ss.webp"></a>
  
            <div id="Geeks2" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-hidden="true">??</button>
                            <h4 class="modal-title">Introduction</h4>
                        </div>
                        <div class="modal-body">
                            <iframe id="Geeks3" width="450" height="350"
                                    src="images/video.mp4"  frameborder="0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="specials-section">
					<div class="container">
						<div class="specials-grids">
							
							<div class="col-md-4 specials1">
								<h3> details</h3>
								<ul>
									<li><a href="about.php">About Us</a></li>
									<li><a href="index.php">Home</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="admin/index.php">Admin</a></li>
								</ul>
							</div>
							<div class="col-md-4 specials1">
								<h3>contact</h3>
								
								<address>
									<p>Email : <?php  echo $row['Email'];?></p>
								 <p>Phone : <?php  echo $row['MobileNumber'];?></p>
								 <p><?php  echo $row['PageDescription'];?></p>
								</address><?php } ?>
							</div>
							<div class="col-md-4 specials1">
								<h3>social</h3>
								<ul>
									<li><a href="#">facebook</a></li>
									<li><a href="#">twitter</a></li>
									<li><a href="#">google+</a></li>
									<li><a href="#">vimeo</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
        <div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>&copy; 2020 Zoo Management System </p>
					</div>
				</div>
			</div>
</body>
</html>		
