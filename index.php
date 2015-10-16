<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Art By Clinton - Tattoos and Designs by Clinton Wiltse</title>
    <meta name="Description" content="The official website for tattoo artist Clinton Wiltse!">
    <meta name="Keywords" content="tattoos, piercings, Clinton Wiltse, tattoo appointment, snohomish county, arlinton, everett, marysville">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">



    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/structure.css" type="text/css">
    <link rel="stylesheet" href="css/skin.css" type="text/css">
    <link rel="stylesheet" type="text/css" media="only screen and (max-device-width: 480px)" href="css/mobile-skin.css" />
    <link rel="stylesheet" tpye="text/css" href="css/magnific-popup.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="theme-1">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

       <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
           <div class="container-fluid">
               <!-- Brand and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
                   <a class="navbar-brand page-scroll" href="#page-top">Home</a>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav navbar-right">
                       <li>
                           <a class="page-scroll" href="http://artbyclinton.com/portfolio.php">Portfolio</a>
                       </li>
                       <li>
                           <a class="page-scroll" href="#links">Instagram</a>
                       </li>
                       <li>
                           <a class="page-scroll" href="#contact">Contact</a>
                       </li>
                   </ul>
               </div>
               <!-- /.navbar-collapse -->
           </div>
           <!-- /.container-fluid -->
    </nav>

	<section id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="img/clinton.jpg" class="img-responsive" alt="an image of Clinton Wiltse."/>
					<div class="clearfix">
						<h1>Clinton Wiltse</h1>
						<p>The artwork & Tattoos of Clinton Wiltse, currently tattooing at Mordor Tattoo. <a class="page-scroll" href="#links">View more artwork on Instagram</a>, or <a class="page-scroll" href="#contact">contact me for booking options</a>.</p>
					</div>
				</div>
				<div id="mini-portfolio" class="col-md-6 clearfix">
					<div class="wrapper">
						<ul>
							<?php
							$index= 0;
							foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('img/portfolio/front')) as $filename)
							{
								// filter out "." and ".."
								if ($filename->isDir()) continue;


							?>
							<li><div style="background-image:url('<?php echo $filename; ?>')"><a class="mag-pop" href="<?php echo $filename; ?>">&nbsp;</a></div></li>
							<?php
								if ($index==13) { exit; }
								$index++;
							}
							?>

						</ul>
						<h2><a href="http://artbyclinton.com/portfolio.php">View Full Portfolio</a></h2>


					</div>
				</div>
			</div><!--/ row -->
		</div><!--/ container -->
	</section>

	<section id="links">
		<div class="container">
			<div class="row">
				<div class="col-md-6 instagram">
					<h3><a href="https://instagram.com/artbyclinton/">Instagram</a></h3>
					<!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/c343d0eb55bb084268a663747d9254cf1065b288.html" id="instansive_c343d0eb55" name="instansive_c343d0eb55"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
					<a href="https://instagram.com/artbyclinton/">View All</a>
				</div>
				<div class="col-md-6 facebook">
					<h3 class="facebook"><a href="https://www.facebook.com/clintonwiltse">Facebook</a></h3>
					<div class="wrapper clearfix">
						<a href="https://www.facebook.com/clintonwiltse">
							<img class="photo img-responsive" src="img/facebook-photo.png" width="180" height="180" tite="Facebook photo" alt="An photo of Clinton Wiltse"/>
						</a>
						<p><a href="https://www.facebook.com/clintonwiltse">Visit Clinton's Facebook</a> for more artwork and news.</p>




						<div class="fb-like" data-href="https://www.facebook.com/clintonwiltse" data-width="400" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>



					</div>
					<div class="mordor clearfix">
						<h3>Mordor Tattoo</h3>
						<img class="button img-responsive" src="img/mordor-logo.png" width="137" height="137" tite="Mordo Logo" alt="An Image depicting a portal to hell, if you stare into long enough you will in the distance witness your own death."/>
						<p>
							117 E. Division Street,<br/>
							Arlington WA 98223
						</p>
					</div>
				</div>
			</div><!--/row-->
		</div><!--/container-->
	</section>










    <section id="contact">
		<div class="container">
			<div class="row">

				<div class="wrapper clearfix">
				<div class="col-md-6">
<form method="post" action="http://www.artbyclinton.com/hp_formmail_noimg/hp_formmail.php" name="contactform">
<input type="hidden" name="env_report" value="REMOTE_HOST,REMOTE_ADDR,HTTP_USER_AGENT,AUTH_TYPE,REMOTE_USER">

	<input type="hidden" name="recipients" value="clinton@artbyclinton.com" />
    <!-- STEP 3: Specify required fields in the 'required' value -->
    <input type="hidden" name="required" value="email:Your email address,realname:Your name" />
    <!-- STEP 4: Put your subject line in the 'subject' value. -->
    <input type="hidden" name="subject" value="An E-mail from ArtByClinton.Com" />
    <input type="hidden" name="subject" value="An E-mail from ArtByClinton.Com" />

							<h3>Contact or Request Booking</h3>
						<div class="list-group">

						  <div class="list-group-item">
							<h5 class="list-group-item-heading">Name:</h5>
							<input type="text" name="realname" id="name" placeholder="Name" class="form-control">
						  </div>
						  <div class="list-group-item">
							<h5 class="list-group-item-heading">E-mail:</h5>
							<input type="text" name="email" id="email" placeholder="Email" class="form-control">
						  </div>

						  <div id="form-phone-container" class="list-group-item">
							<h5 class="list-group-item-heading">Phone</h5>
							<input type="text" name="phone" id="phone" placeholder="Phone" class="form-control">
						  </div>
						  <div class="list-group-item">
							<h5 class="list-group-item-heading">How do  you prefer to be contacted?</h5>
							<select type="text" name="contact-type" id="contact-type" class="form-control">
								<option value='email'>By E-mail</option>
								<option value='phone'>By Phone</option>
							</select>
						  </div>

						  <div class="list-group-item">
							<h5 class="list-group-item-heading">Message:</h5>
							<textarea name="mesg" id="message" placeholder="Message" name="message" class="form-control"></textarea>
						  </div>
						  <div class="list-group-item">
							<input type="hidden" name="sendtoemail" value="contact@artbyclinton.com">
							<input type="submit" value="Send Email">
						  </div>
						</div>
</form>
				</div>
				</div>

      		</div>
      	</div>
    </section>


<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li>All rights reserved.</li>
						<li>&copy;Copyright Clinton Wiltse</li>
						<li>Website built by CrabStance 2015</li>
					</ul>
				</div>
			</div>
		</div>
</footer>





    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>


	<script language="javascript">
	$(document).ready(function() {
		$('#header .col-md-6:last-child ul').magnificPopup({
		  delegate: 'li div a', // child items selector, by clicking on it popup will open
		  type: 'image'
		  // other options
		});
	});
	</script>



</body>

</html>
