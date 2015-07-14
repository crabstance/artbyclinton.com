<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinton Wiltse - Portfolio</title>
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
                   <a class="navbar-brand page-scroll" href="http://artbyclinton.com#page-top">Home</a>
               </div>

               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <ul class="nav navbar-nav navbar-right">
                       <li>
                           <a class="page-scroll" href="#portfolio">Portfolio</a>
                       </li>
                       <li>
                           <a class="page-scroll" href="http://artbyclinton.com#links">Instagram</a>
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



	<section id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h2>Portfolio</h2>

						<ul>
							<?php
							$index= 0;
							foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator('img/portfolio')) as $filename)
							{
								// filter out "." and ".."
								if ($filename->isDir()) continue;


							?>
							<li><div style="background-image:url('<?php echo $filename; ?>')"><a class="mag-pop" href="<?php echo $filename; ?>">&nbsp;</a></div></li>
							<?php
							}
							?>

						</ul>

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
						  <div class="list-group-item">
							<h5 class="list-group-item-heading">Message:</h5>
							<textarea name="mesg" id="message" placeholder="Message" name="message" class="form-control"></textarea>
						  </div>
						  <div class="list-group-item">
							<input type="hidden" name="sendtoemail" value="contact@artbyclinton.com">
							<input type="submit" value="Send Email">
						  </div>
						</div>
</form>				</div>
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
		$('#portfolio ul').magnificPopup({
		  delegate: 'li div a', // child items selector, by clicking on it popup will open
		  type: 'image'
		  // other options
		});
	});
	</script>



</body>

</html>
