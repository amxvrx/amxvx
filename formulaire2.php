<?php error_reporting(E_ERROR | E_PARSE);?>
<!DOCTYPE html>
<html lang="">
<head>
<title>formulaire</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<center>
<?php 
include('functions.php');
if (!isLoggedIn()) {
	$_SESSION['msg'] = "vous devez vous connecter";
	header('location: login.php');
	
	if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: ../login.php");
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
      <h3 class="heading">DEMANDE DE TRANSFERT</h3>
	   <p>remplissez votre fomulaire poure initier un transfert de residence</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn inverse" href="infologement.php">plus d'informations</a></li>
        </ul>
      </footer>
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
les <a href="" style="color: red;">REMARQUES </a>s'affichereont ci desous(si elle existes)
<br>
<br>	
<a style="color: red;"> <?php echo display_error(); ?> </a>
  
<form action="formulaire2.php" enctype="multipart/form-data" method="post" onsubmit="return confirm('VOUS CONFIRMEZ VOTRE ACTION?');">

<table cellpadding="2" width="20%" bgcolor="99FFFF" align="center" cellspacing="2">

<tr>

  <td colspan=2>
   <img style="height:70px;"src="images/udl.png" >
  <center><font size=5><b>formulaire de transfert UDL</b></font></center>
  <br>
   <br>

  </td>

  </tr>
 <div class="input-group"> 
 
  <tr>

  <td>pourqois voulez vous fiare se transfert<br></td>

  <td><textarea type=text name=pq rows="8" cols="50"></textarea> <br></td>
 <br>
  </tr>
 </div> 

<div class="input-group"> 
<tr>

  <td>residence actuel<br></td>
<td>
  <select name='resid1'>
<?php
$mysqli = NEW MySQLI('localhost','root','','projet2020');
$resultSet = $mysqli->query("SELECT * FROM resid");   
while($rows=$resultSet->fetch_assoc())
{
	$nom = $rows['nom'];
	echo "<option>$nom</option>\n";
}
?>
</select>
<br></td>
</tr>
</div> 
 

<div class="input-group"> 
<tr>

  <td>future residence<br></td>
<td>
  <select name='resid2'>
<?php
$mysqli = NEW MySQLI('localhost','root','','projet2020');
$resultSet = $mysqli->query("SELECT * FROM resid");   
while($rows=$resultSet->fetch_assoc())
{
	$nom = $rows['nom'];
	echo "<option>$nom</option>\n";
}
?>
</select>
<br></td>
</tr>
</div> 

  
  <tr>

  <td><input type="reset" value="vider formulaire"/><br></td>

  <td><button type="submit" class="btn" name="register_btn2" onclick="myFunction()">valider formulaire</button><br></td>

  </tr>
  
  </table>

  </form>
  </main>
  </div>

    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
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