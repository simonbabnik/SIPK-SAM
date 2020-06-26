<?php
#več kot je točk bolj je samomorilen

session_start();

if (!isset($_SESSION['skupaj_tocke'])) {
	$_SESSION['skupaj_tocke'] = 0;
}


$stran = 0;

if (isset($_POST["oddaj1"])) {
	$stran = $stran + 1;
}

if (isset($_POST["oddaj2"])) {
	$stran = $stran + 2;
}

if (isset($_POST["oddaj3"])) {
	$stran = $stran + 3;
}

if (isset($_POST["oddaj4"])) {
	$stran = $stran + 4;
}

if (isset($_POST["oddaj5"])) {
	$stran = $stran + 5;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Projekt SAM</title>
	<meta content="" name="descriptison">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="assets/img/favicon.png" rel="icon">
	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: Amoeba - v2.0.0
  * Template URL: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container">

			<div class="logo float-left">
				<h1 class="text-light"><a href="index.html"><span>PROJEKT SAM</span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
			</div>

			<nav class="nav-menu float-right d-none d-lg-block">
				<ul>
					<li><a href="index.html">Domov</a></li>
					<li class="active"><a href="aplikacija.php">Aplikacija</a></li>

			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End #header -->


	<main id="main">

		<!-- ======= About Us Section ======= -->
		<section id="about" class="about">
			<div class="container">

				<div class="section-title">
					<h2>Hitri test samomorilnosti</h2>
				</div>
				<div>
					<form action="" method="post">
						<?php

						if (isset($_POST["oddaj_konec"])) {

							$_SESSION["vpr32"] = $_POST["vpr32"];
							if ($_SESSION["vpr32"]) {
								$_SESSION['stran5'] = !$_POST["vpr33"] + !$_POST["vpr34"] + !$_POST["vpr35"];
								$_SESSION['skupaj_tocke'] += $_SESSION['stran4'];
							}

							$_SESSION['stran5'] += $_POST["vpr36"] + !$_POST["vpr37"] + !$_POST["vpr38"] + $_POST["vpr39"] + $_POST["vpr40"] + $_POST["vpr41"] + !$_POST["vpr42"] + $_POST["vpr43"] + $_POST["vpr44"];
							$_SESSION['skupaj_tocke'] += $_SESSION['stran5'];
							unset($_SESSION['stran5']);

							$vsetocke = $_SESSION['skupaj_tocke'];
							echo "Imate " . $vsetocke . " točk od 44 možnih. ";
							if($vsetocke>31){
								echo "
									<section id='contact' class='contact section-bg'>
								      <div class='container'>

								        <div class='section-title'>
								          <h1>Poiščite si pomoč</h1>
								            <br>
								        </div>

								        <div class='row'>

								          <div class='col-lg-3 col-md-6'>
								            <div class='info'>

								              <div>
								                <h4><b>Klic v primeru duševne stiske</b></h4>
								                <i class='icofont-phone'></i>
								                <p>01 520 99 00</p>
								              </div>

								            </div>
								          </div>

								          <div class='col-lg-3 col-md-6'>
								            <div class='info'>

								              <div>
								                <h4><b>Zaupni telefon Samarijan</b></h4>
								                <i class='icofont-phone'></i>
								                <p>116 123</p>
								              </div>

								            </div>
								          </div>

								          <div class='col-lg-3 col-md-6'>
								            <div class='info'>

								              <div>
								                <h4><b>Ženska svetovalnica</b></h4>
								                <i class='icofont-phone'></i>
								                <p>031 233 211</p>
								              </div>

								            </div>
								          </div>

								          <div class='col-lg-3 col-md-6'>
								            <div class='info'>

								              <div>
								                <h5><b>Tom telefon za otroke in mladostnike</b></h5>
								                <i class='icofont-phone'></i>
								                <p>116 111</p>
								              </div>

								            </div>
								          </div>

								        </div>

								      </div>
								    </section>
								";
							}
							if(32>$vsetocke && $vsetocke>20){
								echo "Vaše mentalno zdravje lahko izboljšate z redno fizično vadbo.";
							}
							if($vsetocke<21){
								echo "Čestitamo. Vaša stopnja samomorilnosti je nizka.";
							}
							unset($_SESSION['skupaj_tocke']);
						} else

    				if ($stran == 0) {
							echo '	
							<legend>Ali ste vsaj 3-krat tedensko aktivni?</legend>
    						<input type="radio" name="vpr1" value=1 required>Da <br>
                            <input type="radio" name="vpr1" value=0>Ne<br>
                            <br>

    						<legend>Ali izvajate katero izmed vrst  joge?</legend>
    						<input type="radio" name="vpr2" value=1 required>Da<br>
                            <input type="radio" name="vpr2" value=0>Ne<br>
                            <br>

    						<legend>Ali izvajate katero izmed vrst  meditacije?</legend>
    						<input type="radio" name="vpr3" value=1 required>Da<br>
                            <input type="radio" name="vpr3" value=0>Ne<br>
                            <br>

    						<legend>Ali se počutite utesnjeno?</legend>
    						<input type="radio" name="vpr4" value=1 required>Da<br>
                            <input type="radio" name="vpr4" value=0>Ne<br>
                            <br>

    						<legend>Ko se zjutraj zbudite, ali se počutite utrujeni?</legend>
    						<input type="radio" name="vpr5" value=1 required>Da<br>
                            <input type="radio" name="vpr5" value=0>Ne<br>
                            <br>

    						<legend>Ko se zjutraj zbudite, ali se veselite novega dne?</legend>
    						<input type="radio" name="vpr6" value=1 required>Da<br>
                            <input type="radio" name="vpr6" value=0>Ne<br>
                            <br>

							<legend>Ali ste v splošnem zadovoljni s svojim življenjem?</legend>
    						<input type="radio" name="vpr7" value=1 required>Da<br>
                            <input type="radio" name="vpr7" value=0>Ne<br> 
                            <br>

    						<legend>Ste zaposleni?</legend>
    						<input type="radio" name="vpr8" value=1 required>Da<br>
                            <input type="radio" name="vpr8" value=0>Ne<br>
                            <br>

							<input type="submit" name="oddaj1" value="Naslednja Stran"/>';
						}

						//////////////////////////////////////////
						if ($stran == 1) {
							if (isset($_POST["oddaj1"])) {
								$_SESSION["vpr8"] = $_POST["vpr8"];

								$_SESSION['stran0'] = !$_POST["vpr1"] + !$_POST["vpr2"] + !$_POST["vpr3"] + $_POST["vpr4"] + $_POST["vpr5"] + !$_POST["vpr6"] + !$_POST["vpr7"] + !$_POST["vpr8"];

								$_SESSION['skupaj_tocke'] += $_SESSION['stran0'];

								unset($_SESSION['stran0']);
							}

							echo "Tocke do sedaj: " . $_SESSION['skupaj_tocke'];
							echo "<br>";

							if ($_SESSION["vpr8"]) { #podvprašanja glede na vprašanje 8
								echo '	<legend>Ali ste zadovoljni z delom, ki ga opravljate?</legend>
    							<input type="radio" name="vpr9" value=1 required>Da<br>
                                <input type="radio" name="vpr9" value=0>Ne<br>
                                <br>

    							<legend>Ali ima organizacija, v kateri ste zaposleni, organizirane posebne aktivnosti za doseganje zadovoljstva zaposlenih na delovnem mestu?</legend>
    							<input type="radio" name="vpr10" value=1 required>Da<br>
                                <input type="radio" name="vpr10" value=0>Ne<br>
                                <br>

    							<legend>Ali je v delovnem okolju prisotno pozitivno vzdušje?</legend>
    							<input type="radio" name="vpr11" value=1 required>Da<br>
                                <input type="radio" name="vpr11" value=0>Ne<br>
                                <br>

    							<legend>Ali se na delovnem mestu počutite sproščenega?</legend>
    							<input type="radio" name="vpr12" value=1 required>Da<br>
                                <input type="radio" name="vpr12" value=0>Ne<br>
                                <br>

    							<legend>Ali so odnosi med zaposlenimi dobri?</legend>
    							<input type="radio" name="vpr13" value=1 required>Da<br>
                                <input type="radio" name="vpr13" value=0>Ne<br>
                                <br>

    							<legend>Ali je varnost na delovnem mestu zagotovljena?</legend>
    							<input type="radio" name="vpr14" value=1 required>Da<br>
                                <input type="radio" name="vpr14" value=0>Ne<br>
                                <br>

    							<legend>Ali je skrb za zdravje na delovnem mestu zagotovljena?</legend>
    							<input type="radio" name="vpr15" value=1 required>Da<br>
                                <input type="radio" name="vpr15" value=0>Ne<br>
                                <br>

    							<legend>Ali čutite pripadnost organizaciji, v kateri ste zaposleni?</legend>
    							<input type="radio" name="vpr16" value=1 required>Da<br>
                                <input type="radio" name="vpr16" value=0>Ne<br>
                                <br>

    							<legend>Ali sodelavcem lahko zaupate?</legend>
    							<input type="radio" name="vpr17" value=1 required>Da<br>
                                <input type="radio" name="vpr17" value=0>Ne<br>
                                <br>

    							<legend>Ali se zaradi svojega dela počutite čustveno izčrpani?</legend>
    							<input type="radio" name="vpr18" value=1 required>Da<br>
                                <input type="radio" name="vpr18" value=0>Ne<br>
                                <br>

    							<legend>Ali organizacija ukrepa zoper ravnanje zaposlenega, če to predstavlja nevarnost za zdravje zaposlenih?</legend>
    							<input type="radio" name="vpr19" value=1 required>Da<br>
                                <input type="radio" name="vpr19" value=0>Ne<br>
                                <br>

    							<legend>Ali po vašem mnenju zakonodaja organizacij ponuja zadostne vzvode za ukrepanje zoper vedenje zaposlenih, ki predstavlja tveganje za varnost in zdravje zaposlenih?</legend>
    							<input type="radio" name="vpr20" value=1 required>Da<br>
                                <input type="radio" name="vpr20" value=0>Ne<br>
                                <br>

    							<legend>Ali je v vaši organizaciji že prišlo do situacije, ko delodajalec, kljub pozivom zaposlenih, ni zagotovil varnega in zdravega delovnega okolja zaposlenim? </legend>
    							<input type="radio" name="vpr21" value=1 required>Da<br>
                                <input type="radio" name="vpr21" value=0>Ne<br>
                                <br>
								';
							}

							#obvezno vprašanje
							echo '		<legend>Ali menite, da ste izpostavljeni stresu?</legend>
    							<input type="radio" name="vpr22" value=1 required>Da<br>
                                <input type="radio" name="vpr22" value=0>Ne<br>
                                <br>

    							<input type="submit" name="oddaj2" value="Naslednja Stran"/>   
								';
						}

						//////////////////////////////////////////////
						if (isset($_POST["oddaj2"])) {

							if ($stran == 2) {

								$_SESSION["vpr22"] = $_POST["vpr22"];

								if ($_SESSION["vpr8"]) {
									$_SESSION['stran1'] = !$_POST["vpr9"] + !$_POST["vpr10"] + !$_POST["vpr11"] + !$_POST["vpr12"] + !$_POST["vpr13"] + !$_POST["vpr14"] + !$_POST["vpr15"] + !$_POST["vpr16"] + !$_POST["vpr17"] + $_POST["vpr18"] + !$_POST["vpr19"] + !$_POST["vpr20"] + $_POST["vpr21"];
									$_SESSION['skupaj_tocke'] += $_SESSION['stran1'];
								}

								$_SESSION['skupaj_tocke'] += $_POST["vpr22"];
								unset($_SESSION['stran1']);
							}

							echo "Tocke do sedaj: " . $_SESSION['skupaj_tocke'];
							echo "<br>";

							if ($_SESSION["vpr22"]) {
								echo '	<legend>Kako pogosto ste izpostavljeni stresu?</legend>
										<input type="radio" name="vpr23" value=1 required>Redko (do nekajkrat letno)<br>
                                        <input type="radio" name="vpr23" value=0>Pogosto (do nekajkrat mesečno)<br>
                                        <br> ';
                                        
							}

							echo 	'	<legend>Ali menite, da znate obvladovati stres?</legend>
										<input type="radio" name="vpr24" value=1 required>Da<br>
                                        <input type="radio" name="vpr24" value=0>Ne<br>
                                        <br>

										<legend>Ali trpite za katero od duševnih bolezni (npr. depresija, anksioznost...)?</legend>
										<input type="radio" name="vpr25" value=1 required>Da<br>
                                        <input type="radio" name="vpr25" value=0>Ne<br>
                                        <br>

										<legend>Ste že kdaj obiskali psihiatra ali psihologa?</legend>
										<input type="radio" name="vpr26" value=1 required>Da<br>
                                        <input type="radio" name="vpr26" value=0>Ne<br>
                                        <br>

										<legend>Ste že kdaj razmišljali o samomoru?</legend>
										<input type="radio" name="vpr27" value=1 required>Da<br>
                                        <input type="radio" name="vpr27" value=0>Ne<br>
                                        <br>

										<input type="submit" name="oddaj3" value="Naslednja stran"/>

							';
						}

						//////////////////////////////////////
						if (isset($_POST["oddaj3"])) {

							if ($stran == 3) {
								
								$_SESSION["vpr22"] = $_POST["vpr22"];
								$_SESSION["vpr27"] = $_POST["vpr27"];

								if ($_SESSION["vpr22"]) {
									$_SESSION['stran2'] = !$_POST["vpr23"];
									$_SESSION['skupaj_tocke'] += $_SESSION['stran2'];
								}

								$_SESSION['stran2'] += !$_POST["vpr24"] + $_POST["vpr25"] + $_POST["vpr26"] + $_POST["vpr27"];
								$_SESSION['skupaj_tocke'] += $_SESSION['stran2'];
								unset($_SESSION['stran2']);
							}

							echo "Tocke do sedaj: " . $_SESSION['skupaj_tocke'];
							echo "<br>";

							if ($_SESSION["vpr27"]) {
								echo '	<legend>Ste že kdaj poskusili storiti samomor?</legend>
												<input type="radio" name="vpr28" value=1 required>Da<br>
                                                <input type="radio" name="vpr28" value=0>Ne<br>
                                                <br> ';
							}

							echo 	'	<legend>Poznate koga, ki je storil samomor?</legend>
												<input type="radio" name="vpr29" value=1 required>Da<br>
                                                <input type="radio" name="vpr29" value=0>Ne<br>	
                                                <br>
														
												<input type="submit" name="oddaj4" value="Naslednja stran"/>
		
									';
						}

						///////////////////////////////
						if (isset($_POST["oddaj4"])) {

							if ($stran == 4) {

								$_SESSION["vpr29"] = $_POST["vpr29"];

								if ($_SESSION["vpr27"]) {
									$_SESSION['stran3'] = $_POST["vpr28"];
									$_SESSION['skupaj_tocke'] += $_SESSION['stran3'];
								}

								$_SESSION['stran3'] += $_POST["vpr29"];
								$_SESSION['skupaj_tocke'] += $_SESSION['stran3'];
								unset($_SESSION['stran3']);
							}

							echo "Tocke do sedaj: " . $_SESSION['skupaj_tocke'];
							echo "<br>";

							if ($_SESSION["vpr29"]) {
								echo '	<legend>V kakšnem razmerju ste bili s to osebo?</legend>
												<input type="radio" name="vpr30" value=1 required>Ožji družinski član<br>
                                                <input type="radio" name="vpr30" value=0>Prijatelj/znanec<br>
                                                <br> ';
							}

							echo 	'	<legend>Ali je v družbi dovolj pozornosti namenjene problematiki samomorilnosti?</legend>
												<input type="radio" name="vpr31" value=1 required>Da<br>
                                                <input type="radio" name="vpr31" value=0>Ne<br>	
                                                <br>


										<legend>Ste že bili kdaj žrtev spolnega ali drugega nadlegovanja?</legend>
												<input type="radio" name="vpr32" value=1 required>Da<br>
                                                <input type="radio" name="vpr32" value=0>Ne<br>	
                                                <br>
														
												<input type="submit" name="oddaj5" value="Naslednja stran"/>
		
									';
						}

						///////////////////////////////
						if (isset($_POST["oddaj5"])) {

							if ($stran == 5) {

								$_SESSION["vpr29"] = $_POST["vpr29"];
								$_SESSION["vpr32"] = $_POST["vpr32"];

								if ($_SESSION["vpr29"]) {
									$_SESSION['stran4'] = $_POST["vpr30"];
									$_SESSION['skupaj_tocke'] += $_SESSION['stran4'];
								}

								$_SESSION['stran4'] += !$_POST["vpr31"] + $_POST["vpr32"];
								$_SESSION['skupaj_tocke'] += $_SESSION['stran4'];
								unset($_SESSION['stran4']);
							}

							echo "Tocke do sedaj: " . $_SESSION['skupaj_tocke'];
							echo "<br>";

							if ($_SESSION["vpr32"]) {
								echo '	<legend>Ali ste to komu zaupali?</legend>
												<input type="radio" name="vpr33" value=1 required>Da<br>
                                                <input type="radio" name="vpr33" value=0>Ne<br> 
                                                <br>												

										<legend>Ste kako ukrepali zoper nadlegovanje?</legend>
												<input type="radio" name="vpr34" value=1 required>Da<br>
                                                <input type="radio" name="vpr34" value=0>Ne<br>	
                                                <br>						
						
										<legend>Ste z vašim ukrepanjem uspeli preprečiti nadaljnje nadlegovanje?</legend>
												<input type="radio" name="vpr35" value=1 required>Da<br>
                                                <input type="radio" name="vpr35" value=0>Ne<br>
                                                <br>	';
							}

							echo 	'	<legend>Ste že bili kdaj diskriminirani?</legend>
												<input type="radio" name="vpr36" value=1 required>Da<br>
                                                <input type="radio" name="vpr36" value=0>Ne<br>	
                                                <br>

										<legend>Ali ste proti takšnemu diskriminatornemu ravnanju ukrepali?</legend>
												<input type="radio" name="vpr37" value=1 required>Da<br>
                                                <input type="radio" name="vpr37" value=0>Ne<br>
                                                <br>											

										<legend>Ste z vašim ukrepanjem uspeli preprečiti diskriminacijo?</legend>
												<input type="radio" name="vpr38" value=1 required>Da<br>
                                                <input type="radio" name="vpr38" value=0>Ne<br>
                                                <br>

										<legend>Ali ste že kdaj izgubili službo?</legend>
												<input type="radio" name="vpr39" value=1 required>Da<br>
                                                <input type="radio" name="vpr39" value=0>Ne<br>
                                                <br>												

										<legend>Imate finančne težave?</legend>
												<input type="radio" name="vpr40" value=1 required>Da<br>
                                                <input type="radio" name="vpr40" value=0>Ne<br>
                                                <br>

										<legend>Če ste bili v partnerski zvezi, ste se soočili z razpadom partnerske zveze?</legend>
												<input type="radio" name="vpr41" value=1 required>Da<br>
                                                <input type="radio" name="vpr41" value=0>Ne<br>
                                                <br>

										<legend>Katerega spola ste?</legend>
												<input type="radio" name="vpr42" value=1 required>Moški<br>
                                                <input type="radio" name="vpr42" value=0>Ženski<br>
                                                <br>
										
										<legend>Ali ste kot oseba agresivni?</legend>
												<input type="radio" name="vpr43" value=1 required>Da<br>
                                                <input type="radio" name="vpr43" value=0>Ne<br>
                                                <br>
										
										<legend>Ali v stanovanju živite sami?</legend>
												<input type="radio" name="vpr44" value=1 required>Da<br>
                                                <input type="radio" name="vpr44" value=0>Ne<br>
                                                <br>
																				
												<input type="submit" name="oddaj_konec" value="Zaključi"/>
								
															';
						}

						
						?>

					</form>

				</div>

		</section><!-- End About Us Section -->


	</main><!-- End #main -->

	<div class="skrij">
		<!-- ======= Footer ======= -->
		<footer id="footer">
			<div class="container">
				<div class="copyright">
					&copy; Copyright <strong><span>Amoeba</span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					<!-- All the links in the footer should remain intact. -->
					<!-- You can delete the links only if you purchased the pro version. -->
					<!-- Licensing information: https://bootstrapmade.com/license/ -->
					<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-one-page-bootstrap-template-amoeba/ -->
					Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
				</div>
			</div>
		</footer><!-- End #footer -->
	</div>

	<div class="logotipi">
		<!-- ======= Logotipi ======= -->
		<footer>
			<div>

				<img style="max-width: 90%; max-height: 100%;" src="assets/img/logotipi.png" alt="">

			</div>
		</footer><!-- End #footer -->
	</div>


	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<!-- Vendor JS Files -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="assets/vendor/php-email-form/validate.js"></script>
	<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="assets/vendor/venobox/venobox.min.js"></script>

	<!-- Template Main JS File -->
	<script src="assets/js/main.js"></script>

</body>

</html>