<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" />

		<!-- MY Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery -->
		<script scr="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- MY Custom JS -->
		<script src="js/custom.js" type="text/javascript"></script>

		<title>Bootstrap Demo</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<nav class="navbar navbar-de.fancy-boxfault">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Bootstrap Demo</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="main-menu">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Home</a></li>
							<li><a href="#bill">Bill Murray</a></li>
							<li><a href="form.php">Form Demo</a></li>
							<li><a href="https://bootcamp-coders.cnm.edu/~rlewis37" target="_blank">rlewis37</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Favorite Things :D<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="http://www.taqueriamexicoabq.com/" target="_blank">Tacos</a></li>
									<li><a href="https://animalhumanenm.org/adopt/?gclid=CJaD95TPjdICFYFYfgoduNMEnA" target="_blank">Fuzzy</a></li>
									<li><a href="https://www.japaneseclassics.com/">Fancy Cars</a></li>
									<li role="separator" class="divider"></li>
									<li><a href="http://www.lacumbrebrewing.com/" target="_blank">Beer</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			</header>

			<main>
				<div class="container">
					<!-- row 1-->
					<div class="row">
						<div class="col-xs-12">
							<h1>Hai! I'm a Bootstrap Page! :D</h1>
						</div>
					</div>

					<!-- row 2 -->
					<div class="row">
						<div class="col-md-4">
							<div class="fancy-box">
								Column 4/12
							</div>
						</div>
						<div class="col-md-4">
							<div class="fancy-box">
								Column 4/12
							</div>
						</div>
						<div class="col-md-4">
							<div class="fancy-box">
								Column 4/12
							</div>
						</div>
					</div>

					<!-- row 3 -->
					<div class="row">
						<div class="col-md-6">
							<div class="fancy-box">
								Column 6/12
							</div>
						</div>
						<div class="col-md-6">
							<div class="fancy-box">
								Column 6/12
							</div>
						</div>
					</div>

					<!-- row 4 -->
					<div class="row">
						<a name="bill"></a>
						<div class="col-md-3">
							<div class="fillmurray">
								Column 3/12
							</div>
						</div>
						<div class="col-md-3">
							<div class="fillmurray">
								Column 3/12
							</div>
						</div>
						<div class="col-md-3">
							<div class="fillmurray">
								Column 3/12
							</div>
						</div>
						<div class="col-md-3">
							<div class="fillmurray">
								Column 3/12
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						=^. .^= Meow!
					</div>
					<div class="col-md-6">
						&copy; 2017 Senator Arlo Productions
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>