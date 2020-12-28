<?php error_reporting(E_ERROR | E_PARSE);?>
<!DOCTYPE html>
<html lang="">
<head>
<title>universite udl</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<center>
<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "vous devez vous connecter";
	header('location: login.php');
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
      <h3 class="heading">universite djilali liabes</h3>
	  <p>vue d'ensemble sure l'universite</p>
    </article>
    <!-- ################################################################################################ -->
  </div>
  <!-- ######################
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
    <div class="content"> 
      <!-- ################################################################################################ -->
	     <center>
		 <h6 class="heading">-HSTORIQUE DE L'UNIVERSITE-</h6>
		 </center>
		  <br>
		  <br>
		  <div class="sectiontitle">
		<br>
      <h6 class="heading">-HOMMAGE-</h6>
    </div>
	   <article class="group">
      <div class="one_half first">
        <h6 class="heading">DJILALI LIABES</h6>
       Djilali Liabès, né en 1948 à Sidi Bel Abbès (Algérie) et décédé en 1993 à la suite d'un attentat, est un chercheur en sciences humaines algérien. Il fut ministre des Universités en Algérie dans les années 1990. Djilali Liabès a publié plusieurs livres.

Djilali Liabès était diplômé de l'université d'Alger.

Né en 1948 à Sidi Bel Abbés, Djilali Liabes a fait ses études primaires et secondaires dans sa ville natale, notamment au lycée Azza Abdelkader (ex- lycée El Djala) où il a obtenu son baccalauréat en série Lettres en 1967.

Ses études supérieures à l’université d’Alger lui ont permis d’obtenir une licence en philosophie et en sciences sociales, puis de décrocher un doctorat 3e cycle et un doctorat d’État en littérature et sciences humaines. Il a été désigné ministre des Universités en 1991, puis ministre des Universités et de la recherche scientifique en 1992. Le défunt a occupé, par ailleurs, le poste de ministre de l’Éducation nationale par intérim de juin à octobre 1992.

Nommé, en octobre 1992, directeur de l’Institut des Hautes Études Stratégiques Globales, il a notamment présenté un rapport d’analyse sur les « Perspectives de développement de la société algérienne ». Cet institut fut sa « dernière halte professionnelle ». Ses travaux se sont intéressés, en particulier, à l’aspect économique, précisément au secteur privé et aux entreprises publiques à la fin des années 1960 pour diriger, ensuite, et pendant quelques années, plusieurs études au niveau du CREAD.

À son actif de nombreuses productions littéraires, Djilali Liabès a été l’auteur, entre autres, de « Les pays du Tiers Monde et la nouvelle organisation mondiale », « La quête de la rigueur » et « Capital privé et patrons d’industrie en Algérie (1962-1982): propositions pour l’analyse de couches sociales en formation ». L’université de Sidi Bel Abbès a, précisons-le, acquis son statut d’université en 1989 après qu’elle fut un centre universitaire dont l’activité a débuté en 1978. </p>
        
   
      </div>
	  <br>
	  <br><br>
      <div class="one_half"><a class="fl_right" href="#"><img  img src="images/djilali.gif" alt=""></a></div>
    </article>
	   
	   
	   <div class="sectiontitle">
		<br>
		<br>
		<br>
      <h6 class="heading">-HISTORIQUE DE L'Université-</h6>
    </div>
    <article class="group">
      <div class="one_half first">
        <h6 class="heading">Université de Sidi Bel Abbès</h6>
        L’université Djillali Liabés est une université algérienne située à Sidi Bel Abbès.
          Elle est classée par le U.S. News & World Report au 62e rang du classement régional 2016 des universités arabes</p>
        <p class="btmspace-30">Iaculis vehicula tristique ut gravida scelerisque mattis non erat a lectus tincidunt maximus aliquam sed ex quis nec maximus urna integer nec est sapien quisque pulvinar bibendum interdum donec a lacus diam cras sem ipsum finibus non volutpat nec&hellip;</p>
   
      </div>
      <div class="one_half"><a class="imgover" href="#"><img  img src="images/img1.jpg" alt=""></a></div>
    </article>
	<br>
	<br>

		  <h6>CREATION</h6>
          <p>L’université Djillali Liabés a été créée le 1er août 1989. Elle est le résultat d'une évolution d’une vingtaine d’années au cours desquelles elle n’a cessé de prendre de l'extension. Avant d'être université, plusieurs statuts ont régi cet établissement:
             Le statut de centre universitaire : Depuis l'ouverture des portes de l'établissement en septembre 1978 jusqu'à août 1984.
             Le statut des instituts nationaux d'Enseignement Supérieur (INES): D'août 1984 jusqu'à juillet 1989.</p>
		  <br>
		  <div class="sectiontitle">
		 <br>
         <h6 class="heading"></h6>
         </div>
         <article class="group">
         <div class="one_half first">
		  <h6>Présentation</h6>
          <p>L'université de Sidi Bel Abbés a acquis son statut d’université en 1989 après qu’elle fut un centre universitaire dont l’activité a débuté en 1978. Université dispose de différents campus répartis en anneau au tour de la ville. Cette dernière est composée de Six (06) Facultés : ( Sciences, Droit, Sciences de l’ingénieur, Médecine, Sciences Economique et Sciences Humaines ) réparties sur 09 sites. L’université a compté 15000 étudiants pour l’année 2000/2001 ainsi que 22000 étudiants pour l'année 2005.</p>
          <br><br>
		  </div>
		   <div class="one_half"><a class="fl_right" href="#"><br><img  img src="images/udl.png" alt=""></a></div>
		  </article>
		  <br>
		   <div class="scrollable">
		   <h6>L'université en chiffres</h6>
        <table>
          <thead>
            <tr>
              <th>Désignation</th>
              <th>Nombre</th>
              <th>Observation</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Facultés</td>
              <td>06</td>
              <td>//</td>
            </tr>
            <tr>
              <td>Sites Universitaires</td>
              <td>10 (23 700 PP)</td>
              <td>06 Facultés, 01 Siège du rectorat, un campus, 01 centre de recherche, 01 bibliothèque centrale</td>
            </tr>
            <tr>
              <td>Étudiants</td>
              <td>33069</td>
              <td>Dont 5503 étudiants en système LMD et 1977 en post graduation</td>
            </tr>
            <tr>
              <td>Étudiants Diplômés</td>
              <td>4089</td>
              <td>Dont 3699 en système Classique, 117 en LMD et 273 en post graduation</td>
            </tr>
			 <tr>
              <td>Enseignants Permanents</td>
              <td>959</td>
              <td>Dont 244 enseignants de rang magistral</td>
            </tr>
			 <tr>
              <td>Fonctionnaires ATS</td>
              <td>729</td>
              <td>Dont 310 de personnel d'encadrement</td>
            </tr>
			 <tr>
              <td>Cités Universitaires</td>
              <td>14 (14 700 Lits)</td>
              <td>19358 résidents dont 9182 filles</td>
            </tr>
          </tbody>
        </table>
		<br><br>
		   <div class="scrollable">
		   <h6>Développement de l'université de 1998 à 2008</h6>
        <table>
          <thead>
            <tr>
              <th></th>
              <th>1999</th>
              <th>2004</th>
			  <th>2008</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Capacité en Places Pédagogiques</td>
              <td>6260</td>
              <td>16300	</td>
			  <td>23700</td>
            </tr>
            <tr>
              <td>Capacité d'Hébergement	</td>
              <td>6000</td>
              <td>9424</td>
			  <td>14700</td>
            </tr>
          </tbody>
        </table>
		<br><br>
		   <div class="scrollable">
		   <br><br>
		   <div class="scrollable">
		   <h6>Projection 2009-2014</h6>
        <table>
          <thead>
            <tr>
              <th></th>
              <th>2009</th>
              <th>2014</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Évolution des Effectifs Étudiants</td>
              <td>37069</td>
              <td>52069</td>
            </tr>
            <tr>
              <td>Évolution des Effectifs Enseignants</td>
              <td>1080</td>
              <td>1580</td>
            </tr>
			 <tr>
              <td>Capacité en Place Pédagogique</td>
              <td>30700</td>
              <td>40700</td>
            </tr>
			 <tr>
              <td>Capacités Théoriques d'Hébergemen</td>
              <td>19700</td>
              <td>24700</td>
            </tr>
          </tbody>
        </table>
	<div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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