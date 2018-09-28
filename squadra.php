<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet">
	<script src="js/script.js" ></script>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.3.1.min.js" ></script>
	<script src="js/bootstrap.min.js"></script>
	<!--Google Maps-->
	<script src="https://maps.google.com/maps/api/js?key=YOUR_API_KEY"></script>
			
</head>
<body>
	<nav class="fixed-top navbar padding-t-0 navbar-expand-lg navbar-light bg-light border-t-black border-b-pink">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img src="/img/home.png" width="50" height="50" alt=""> 
				<span class="d-lg-none d-md-none">LM</span>
				<span class="d-none d-md-inline">Lokomotiv Mucchi </span>
				<span class="d-none d-lg-inline">- In lactae Vaccae robur et veritas </span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="timeline.php">La storia</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="squadra.php">La squadra</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Approfondimenti
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item disabled"><img src="/img/icons/cow.png" width="30" height="30" alt=""> Il Fantamucco</a>
							<a class="dropdown-item" href="fantamucco.php/#regole">Regolamento</a>
							<a class="dropdown-item" href="fantamucco.php/#partecipazioni">Partecipazioni</a>
							<a class="dropdown-item" href="fantamucco.php/#albo">Albo d'oro</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="academylk.php"><img src="/img/icons/oscar.png" width="30" height="30" alt=""> Gli Academylk Awards</a>
							<a class="dropdown-item" href="cena.php"><img src="/img/icons/steak.png" width="30" height="30" alt=""> La cena dei Mucchi</a>
							<a class="dropdown-item" href="gameofcows.php"><img src="/img/icons/throne.png" width="30" height="30" alt=""> Game of Cows</a>
						</div>
					</li>
					</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid border-t-black border-b-pink mt-5">
	<div class="container mt-4 mb-5">
		<div class="row">
			<div class="col-sm">
				<h2>La squadra</h2>
				<p>I giocatori</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
				<div class="card">
					<img class="card-img-top" src="img/ph300x300.png" alt="Card image cap">
					<div class="card-body bg-macchie">
						<h5 class="card-title mycard-title bg-light rounded border-mucchi">Tommy V - Lo sire</h5>
						<!--p class="card-text mycard-title bg-light rounded border-mucchi">Lo sire pronto alla pugna</p-->
						<a href="#" class="btn btn-light border-mucchi">Dettagli</a>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
	<footer class="font-small pt-4 bg-white border-t-black">
		<div class="container text-center text-dark text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3">
					<h5 class="text-uppercase">Footer Content</h5>
					<p>Here you can use rows and columns here to organize your footer content.</p>
				</div>
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Links</h5>
					<ul class="list-unstyled">
						<li><a class="text-light" href="#!">Link 1</a></li>
						<li><a href="#!">Link 2</a></li>
						<li><a href="#!">Link 3</a></li>
						<li><a href="#!">Link 4</a></li>
					</ul>
				</div>
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Links</h5>
					<ul class="list-unstyled">
						<li><a href="#!">Link 1</a></li>
						<li><a href="#!">Link 2</a></li>
						<li><a href="#!">Link 3</a></li>
						<li><a href="#!">Link 4</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div class="footer-copyright text-center text-dark py-3">© 2018 Copyright:
		<a class="text-dark"> Roberto Ciardi</a>
		</div>
	</footer>
</body>

</html>