<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ben Shreeve</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
<script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<?php
$error = false;
$name = isset($_POST['name']) ? $_POST['name'] : 'name';
$email = isset($_POST['email']) ? $_POST['email'] : 'email';
$message = isset($_POST['message']) ? $_POST['message'] : 'message';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if ($name == '') {
?><script type="text/javascript">
window.addEventListener("load", function() {
document.getElementById("nameBlank").style.display = "inline-block";
});
</script><?php
$error = true;
}
if ($message == '') {
?><script type="text/javascript">
window.addEventListener("load", function() {
document.getElementById("messageBlank").style.display = "inline-block";
});
</script><?php
$error = true;
}

if ($email == '') {
?><script type="text/javascript">
window.addEventListener("load", function() {
document.getElementById("emailBlank").style.display = "inline-block";
});
</script><?php
$error = true;
}
else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
?><script type="text/javascript">
window.addEventListener("load", function() {
document.getElementById("emailInvalid").style.display = "inline-block";
});
</script><?php
$error = true;
}
}

if (!$error) {
$to = 'ben.shreeve@gmail.com';
$subject = 'benshreeve.com Contact';
$body = $name . ", " . $email . ", " . $message;

if (mail ($to, $subject, $body)) {
?><script type="text/javascript">
window.addEventListener("load", function() {
document.getElementById("returnMessage").textContent="Thanks, your request was sent successfully! You can expect a response within the next few business days.";
});
</script><?php
}
else {
?><script type="text/javascript">
window.addEventListener("load", function() {
document.getElementById("returnMessage").textContent="Sorry, something went wrong. Please try again!";
});
</script><?php
}
}
}
?>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                <!-- Commented out link to menu - it is superflous
                </button>
                <!a class="navbar-brand topnav" href="#">Start Bootstrap</a>
                -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                	<!-- Changing the menu
                    <li>
                        <a href="#GetCreative">About</a>
                    </li>
                    -->
                    <li>
                        <a href="#WhoamI">About me</a>
                    </li>
                    <li>
                        <a href="#Myresearch">My Research</a>
                    </li>
                    <li>
                        <a href="#CreativeTeams">CreativeTeams.Org</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<!--------------------------------   -------------------->
    <!-- Header -->
    <a name="GetCreative"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Hi, I'm Ben.</h1>
                        <h3>I specialise in helping teams identify problems
                		</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/The_Shreeve" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <!-- Lets see if removing this section gets rid of the github icon from the template.
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            -->
                            <li>
                                <a href="https://uk.linkedin.com/in/benshreeve" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
     <!-- /.intro-header -->
     
  <!--------------------------------   -------------------->   
    <!-- /.Who am I section -->

	<a  name="WhoamI"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">A little bit about me</h2>
                    <p class="lead">I don't quite know how to describe myself but lets give it a go. I am currently in the finishing stages of my PhD. My research has focussed on understanding whether there are any differences in the way that local and global teams identify and resolve problems. In particular I have been looking at whether there are differences in their creativity.
                    </p>
                </div>
                <div class="col-lg-5 col-sm-pull-6 col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
 
 <!--------------------------------   -------------------->  

    <!-- My Research -->

	<a  name="Myresearch"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">The importance of creativity<br>and remote working</h2>
                    <p class="lead">Technology is constantly affecting how we live. It enables us to collaborate with others anywhere in the world. Such communication and collaboration enable us to innovate like never before. The question is, why do we keep working in offices? Why limit ourselves to expensive, boring offices that make people less efficient? 
                    </p>
                    <p class="lead">
                    It is time to start questioning our outdated ways of working. And yes, sure there are some jobs that need to be completed by local teams. And yes, it is important to catch up. But what we should be doing is learning to structure organisations and teams so that people can work virtually. It isn't impossible and the benefits work both ways. As an organisation you end up with a more motivated work force who have the freedom to work more flexibly, and you no longer need such expensive offices. Your employees get the freedom they've always wanted. Now this is no easy thing, we have learned how to work in close proximity over hundreds of years, but we can learn to work virtually. Get in touch to learn more and start improving your organisation.
                    </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
<!--------------------------------   -------------------->  

    <!-- CreativeTeams -->

	<a  name="CreativeTeams"></a>
    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">The CreativeTeams project </h2>
                    <p class="lead">This project is the basis for my PhD. The project explores whether there is a difference in the creativity, and in the way that co-located (local) and virtual (global) teams resolve problems.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
 
    
<!--------------------------------   -------------------->
    <!-- Not just an academic -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Not just work</h2>
                    <p class="lead">It is important to have a good life-work balance (see what I did there?). In my spare time I'm a keen rock climber, getting outside whenever the weather permits. I'm also a keen cyclist and try to get out on my road bike on those not-so-good-for-climbing days.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

<!--------------------------------   -------------------->
    <!-- /.content-section-a -->

	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <h2>Get in touch</h2>
                    
                <div class="row">
				<div class="content col-lg-12" id="contactContent">
					<form action="/contact.php" method="post">
						<div class="row">
							<div class="col-lg-5">
								<div class="form-group">
									<label for="nameField">Name</label><span class="formError" id="nameBlank">Name is required</span>
									<input type="text" class="form-control" id="nameField" name="name" placeholder="name">
								</div>
								<div class="form-group">
									<label for="emailField">Email</label><span class="formError" id="emailBlank">Email address required</span><span class="formError" id="emailInvalid">Email address is invalid</span>
									<input type="email" class="form-control" id="emailField" name="email" placeholder="email">
								</div>
								<div class="g-recaptcha" 	data-sitekey="6LfQcykTAAAAAAOsb_8Ujk9hVh824czqlfC7bKsS">
								</div>	
							</div>
							<div class="col-lg-7">
								<div class="form-group">
									<label for="messageField">Comment</label><span class="formError" id="messageBlank">message is required</span>
									<textarea class="form-control" id="messageField" name="message" placeholder="leave a message"></textarea>
								</div>
								
								<p id="returnMessage"></p>
						
						<button type="submit" name="submit" class="btn btn-default">Submit</button>
								
							</div>
						
						</div>
						
						
					</form>
				</div>
			</div>
                    
                </div>
            	<div class="col-lg-4">
                    <ul class="list-inline banner-social-buttons">
                      	<!--
                      	<li>
                            <a href="mailto:ben.shreeve@gmail.com" class="btn btn-default btn-lg"><i class="fa  fa-envelope fa-fw"></i> <span class="network-name">Email</span></a>
                        </li> -->
                        <li>
                            <a href="https://twitter.com/The_Shreeve" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                        </li>
                        <!-- Removing link to github again
                        <li> 
                            <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        -->
                        <li>
                            <a href="https://uk.linkedin.com/in/benshreeve" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#GetCreative">Top</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Ben Shreeve 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>