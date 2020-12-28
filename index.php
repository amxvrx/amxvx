<!DOCTYPE html>
 <!-- aff image -->
<html lang="">
<head>
<title>logment univ sba</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css"  rel="stylesheet" type="text/css" media="all">
<center>
<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "vous devez vous connecter";
	header('location: login.php');
	
	if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
}
?>
</head>
<body id="top">
<div class="content">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
		<!-- logged in user information -->
	</div>
	</center>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
    <div class="bgded overlay light" style="background-image:url('images/background2.jpg');"> 
<!-- ################################################################################################ -->
    <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
<!-- ################################################################################################ -->
     <center>
	 <ul class="nospace">
     <div class="profile_info" >
	 <div id="logo" align="right" >
	  <br>
		<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
					<small>
			        <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
		            </small>
		<?php endif ?>
		<br>
		<li><a href="index.php?logout='1'" style="color: red;">deconnexion</a></li>
		</div>
      </ul>
	   <div id="logo" align="right" >
	     <?php  photo();?> 
	     </div>
		 </center>
	</div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
	   <img style="height:70px;"src="images/udl.png" >
	   <div id="logo" class="fl_right">
		<h1><a href="index.html">UDL logement</a></h1>
		 <br>
		  <br>
      </div>
	  </div>
	   <br>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a class="drop" >INSCRIPTIONS</a>
            <ul>
              <li><a href="infodossier.php">dossier a fournir</a></li>
              <li><a href="formulaire.php">demande logement</a></li>
              <li><a class="drop">post inscription</a>
			   <ul>
                  <li><a href="formulaire2.php">demande transfert</a></li>
				  <li><a href="formulaire3.php">demande renouvellement</a></li>
				  <li><a href="formulaire4.php">demande certfifcat de sortie (poure diplome)</a></li>
				  <li><a href="quitter.php">quitter logement</a></li>
                </ul>
            </ul>
          </li>
          <li><a class="drop" >INFORMATIONS</a>
            <ul>
              <li><a href="info-udl.php">notre universite </a></li>
              <li><a class="drop" >services</a>
                <ul>
                  <li><a href="logement.php">Logement</a></li>
                  <li><a href="restoration.php">restoration</a></li>
                  <li><a href="transport.php">transport</a></li>
                </ul>
              </li>
              <li><a href="info.php">nous contacter</a></li>
            </ul>
          </li>
		  <li><a href="infologement">votre compte</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Universite djilali liabes</p>
      <h3 class="heading">Oeuvrs universitaires</h3>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="formulaire.php">s'inscrire</a></li>
          <li><a class="btn inverse" href="infodossier.php">plus d'informations</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Une vue d'ensemble</h6>
      <p>poure mieux connaitre l'universite de Sidi Bel Abbes</p>
    </div>
    <article class="group">
      <div class="one_half first">
        <h6 class="heading">Université de Sidi Bel Abbès</h6>
         L’université Djillali Liabés est une université algérienne située à Sidi Bel Abbès.
          Elle est classée par le U.S. News & World Report au 62e rang du classement régional 2016 des universités arabes</p>
        <p class="btmspace-30">Iaculis vehicula tristique ut gravida scelerisque mattis non erat a lectus tincidunt maximus aliquam sed ex quis nec maximus urna integer nec est sapien quisque pulvinar bibendum interdum donec a lacus diam cras sem ipsum finibus non volutpat nec&hellip;</p>
   
      
        <footer><a class="btn" href="info-udl.php">en savoire plus ! &raquo;</a></footer>
      </div>
      <div class="one_half"><a class="imgover" href="info-udl.php"><img src="images/img1.jpg" alt=""></a></div>
    </article>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/02.png');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">avantages</h6>
      <p>notre universites est classe parmis les leader au niveaux des services quelle aportes</p>
    </div>
    <ul class="nospace group services">
      <li class="one_quarter first"><i class="fa fa-4x fa-chain-broken btmspace-30"></i>
        <h6 class="heading font-x1">interactions</h6>
        <ul class="nospace">
          <li><i class="fa fa-link"></i> <a href="#">Sed consectetur efficitur</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Nam rhoncus quam enim</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Ut eleifend felis scelerisque</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Nullam euismod elementum</a></li>
        </ul>
      </li>
      <li class="one_quarter"><i class="fa fa-4x fa-expeditedssl btmspace-30"></i>
        <h6 class="heading font-x1">securite</h6>
        <ul class="nospace">
          <li><i class="fa fa-link"></i> <a href="#">Mi a commodo velit suscipit</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Eu nulla ex massa aliquam</a></li>
          <li><i class="fa fa-link"></i> <a href="#">At dictum in malesuada</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Sit amet tortor vestibulum</a></li>
        </ul>
      </li>
      <li class="one_quarter"><i class="fa fa-4x fa-hourglass-2 btmspace-30"></i>
        <h6 class="heading font-x1">gains de temps</h6>
        <ul class="nospace">
          <li><i class="fa fa-link"></i> <a href="#">Vulputate orci quis velit</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Mollis in vehicula arcu</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Malesuada mauris ac</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Condimentum tortor ac</a></li>
        </ul>
      </li>
      <li class="one_quarter"><i class="fa fa-4x fa-snowflake-o btmspace-30"></i>
        <h6 class="heading font-x1">confort</h6>
        <ul class="nospace">
          <li><i class="fa fa-link"></i> <a href="#">Fermentum diam sed lacinia</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Sit amet ipsum ac rutrum</a></li>
          <li><i class="fa fa-link"></i> <a href="#">In a iaculis orci quis</a></li>
          <li><i class="fa fa-link"></i> <a href="#">Vehicula nibh nulla vel</a></li>
        </ul>
      </li>
    </ul>
    <footer class="center"><a class="btn" href="#">aprendre plus &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <figure class="hoc container clear clients"> 
    <!-- ################################################################################################ -->
    <ul class="nospace group">
      <li class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
      <li class="one_quarter"><a class="imgover" href="#"><img src="images/demo/222x100.png" alt=""></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </figure>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2 bgded overlay" style="background-image:url('images/demo/backgrounds/03.png');">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">tetes d'affiches de notr universite</h6>
      <p>exemple de reussite de l'universite de sidi bel abbbes</p>
    </div>
    <div class="group team">
      <figure class="one_quarter first"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">A. Doe</h6>
          <em>Director</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">B. Doe</h6>
          <em>Chairman</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">C. Doe</h6>
          <em>Head of Design</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
      <figure class="one_quarter"><a class="imgover" href="#"><img src="images/demo/320x320.png" alt=""></a>
        <figcaption>
          <h6 class="heading">D. Doe</h6>
          <em>Head of Marketing</em>
          <footer>
            <ul class="faico clear">
              <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
            </ul>
          </footer>
        </figcaption>
      </figure>
    </div>
    <footer class="center"><a class="btn" href="#">plus &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">personelle en ligne</h6>
      <p>nos services en ligne sont dirige par un personelle hautement qualifiée</p>
    </div>
    <div class="group latest">
      <article class="one_third first"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x240.png" alt=""></a>
        <ul class="nospace meta">
          <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
        </ul>
        <h6 class="heading font-x1">Leo fermentum risus nec</h6>
        <p>Aliquet erat nisi in nisi in vel porttitor leo proin eget volutpat lorem donec a ipsum nunc dui enim sollicitudin eget&hellip;</p>
        <footer><a href="#">Read More</a></footer>
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x240.png" alt=""></a>
        <ul class="nospace meta">
          <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
        </ul>
        <h6 class="heading font-x1">Faucibus vitae dignissim</h6>
        <p>Sit amet libero nam gravida eros eget quam porttitor iaculis phasellus ultrices turpis sapien mauris tortor pulvinar&hellip;</p>
        <footer><a href="#">Read More</a></footer>
      </article>
      <article class="one_third"><a class="imgover btmspace-30" href="#"><img src="images/demo/320x240.png" alt=""></a>
        <ul class="nospace meta">
          <li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
          <li><i class="fa fa-tag"></i> <a href="#">Tag Name</a></li>
        </ul>
        <h6 class="heading font-x1">Pretium molestie pretium</h6>
        <p>Consequat ante duis non lobortis urna integer vehicula ex non ante ultricies maximus sed tempus felis non enim&hellip;</p>
        <footer><a href="#">Read More</a></footer>
      </article>
    </div>
    <footer class="center"><a class="btn" href="#">plus &raquo;</a></footer>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="one_quarter first">
      <h6 class="heading">historique sur l'universite</h6>
      <p>  Djilali Liabès, né en 1948 à Sidi Bel Abbès (Algérie) et décédé en 1993 à la suite d'un attentat, est un chercheur en sciences humaines algérien. Il fut ministre des Universités en Algérie dans les années 1990. Djilali Liabès a publié plusieurs livres.
&hellip;</p>
      <p class="nospace"><a href="info-udl.php">plus</a></p>
    </article>
    <div class="one_quarter">
      <h6 class="heading">nous contacter</h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          avenue mohammed khemisti ; N:55, sidi bel abbes, 22000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +213 048 45 67 89</li>
        <li><i class="fa fa-envelope-o"></i> logement@udl.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">facultés udl </h6>
      <ul class="nospace linklist">
        <li><a href="#">langues</a></li>
        <li><a href="#">science exacte</a></li>
        <li><a href="#">arts</a></li>
        <li><a href="#">droit</a></li>
        <li><a href="#">genie civil</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">services</h6>
      <ul class="nospace linklist">
        <li><a href="#">transport</a></li>
        <li><a href="#">logement</a></li>
        <li><a href="#">restoration</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="index.php">www.logementUDL.com</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>