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
      <h3 class="heading">INFORMATION SUR VOTRE compte</h3>
	   <p>services administratives</p>
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
<br>
<br>
<center><h6 class="heading">information profile</h6></center>
  <main class="hoc container clear"> 
    <!-- main body -->
  
        <center>
		
           <table cellpadding="2" width="10%" bgcolor="99FFFF" align="center" cellspacing="2">
            <?php
			    $id = $_SESSION['user']['id'];
                $query = "select * FROM utilisateurs WHERE id = '$id'";
                if(count(fetchAll($query))>0){
                    foreach(fetchAll($query) as $row){
                        ?> 
                <?php echo '<img style="border-radius: 20%;height:150px;"  src="data:image/jpeg;base64,'.( $row['image'] ).'" alt="Avatar"  />';?>					
                <br>
                <br>
				<br>
                 <tr>
                  <td>			 
                logement:
				<?php  
				if(checkid($id)==true) { 
		        ?>
              	<a style="color: blue;">demande en cours de traitement</a>			
	            <?php 
				}
				else{
				if(checkid2($id)==true) { 
				?>	
				<a style="color: green;">vous avez un logement !</a>
                <?php				
				}
				else{
				?>
				<a style="color: yello;">pas encore fait de demande ou demande rejeté</a>
				<?php	
				}
				}
				?>	
				
				 </td>
				 </tr>
			       <tr>
                   <td>				   
				transfert:
				<?php  
				if(checkid3($id)==true) { 
		        ?>
              	<a style="color: blue;">demande en cours de traitement</a>			
	            <?php 
				}
				else{
				?>	
				<a style="color: yello;">aucun demande ou (demande deja traité)</a>
                <?php				
				}
				?>	
				
				<br>
				 </td>
				 </tr>
			      <tr>
			       <td>   
				etat de vos informations:
				<?php  
				if(checkid4($id)==true) { 
		        ?>
              	<a style="color: green;">vos informations sont a jours !</a>			
	            <?php 
				}
				else{
				?>	
				<a style="color: red;">mise a jours du scan du sertificat de scholarite est requis</a>
                <?php				
				}
				?>	
				</td>
				 </tr> <tr>
			       <td>   
				demande certificat de sortie(poure diplomées uniquament):
				<?php  
				if((checkid6($id)==true) or (checkid6($id)==true and checkid7($id)==true)){ 
		        ?>
              	<a style="color: blue;">demande en cours de traitement</a>			
	            <?php 
				}
				else if(checkid7($id)==true){
				?>	
				<a style="color: green;">certificat admis(dirigez vous vers votre residance pour recuperer votre certificat)</a>
                <?php				
				}
				else{
                ?>	
				<a style="color: yello;">aucune demande</a>
                <?php	
				}
				?>	
				</td>
				 </tr>
				 </table>
				 <br>
				 <center><h6 class="heading">vos informations</h6></center>
			     <table cellpadding="2" width="10%" bgcolor="99FFFF" align="center" cellspacing="2">   
				</a>
				<br>
				<tr>
			          <td colspan=2>ID : <?php echo $row['id'] ?></td>
				
					  <td>email : <?php echo $row['email'] ?></td>
					  
					  <td>type : <?php echo $row['user_type'] ?></td>
				     
                </tr>
				<?php 
				$query = "select * FROM info_utilisateur WHERE id = '$id'";
				foreach(fetchAll($query) as $row){
					?> 
                <tr>
			          <td colspan=2>prenom : <?php echo $row['prenom'] ?></td>
				
					  <td>adresse : <?php echo $row['addr'] ?></td>
					  
					  <td>filier : <?php echo $row['specialite'] ?></td>
				     
                </tr>
				<tr>
			          <td colspan=2>date naissance : <?php echo $row['date_naissance'] ?></td>
				
					  <td>lieu naissance : <?php echo $row['lieu_naissance'] ?></td>
					  
					  <td>code postal : <?php echo $row['code_postal'] ?></td>
				     
                </tr>
				<tr>
			          <td colspan=2>residence : <?php echo $row['residence'] ?></td>
				
					  <td>num carte etu : <?php echo $row['num_etudiant'] ?></td>
					  
					  <td>num carte nat: <?php echo $row['num_ident'] ?></td>
				     
                </tr>
				<tr>
			          <td colspan=2>tel : <?php echo $row['tel'] ?></td>
				
					  <td>nom pere : <?php echo $row['nom_pere'] ?></td>
					  
					  <td>nom mere : <?php echo $row['nom_mere'] ?></td>
				     
                </tr>
				</table>
				</table>
				<br>
				<center><h6 class="heading">chambre</h6></center>
				<table cellpadding="2" width="10%" bgcolor="99FFFF" align="center" cellspacing="2">
				<br>
				<?php 
				$query = "select * FROM logement WHERE id = ".$id;
				foreach(fetchAll($query) as $row){
					?> 
					  <tr>
			          <td colspan=2>logé dans la chambre : <?php echo $row['num_chambre'] ?></td>
				     
                </tr>
				</table>
				<br>
				<center><h6 class="heading">liste de vos documents</h6></center>
				<table cellpadding="2" width="10%" bgcolor="99FFFF" align="center" cellspacing="2">
				<br>
				<?php 
				$query = "select * FROM info_utilisateur WHERE id = '$id'";
				foreach(fetchAll($query) as $row){
					?>
				<tr>
			          <td colspan=2>sertificat de scholarite : <?php echo '<img  src="data:image/jpeg;base64,'.( $row['scan_sert'] ).'" alt="Avatar"  />'; ?></td>
				 </tr>
				<tr>
					  <td>papier d'identite : <?php echo '<img  src="data:image/jpeg;base64,'.( $row['scan_ident'] ).'" alt="Avatar"  />'; ?></td>
				 </tr>
				<tr>	  
					  <td>sertificat de naissance : <?php echo '<img   src="data:image/jpeg;base64,'.( $row['scannais'] ).'" alt="Avatar"  />'; ?></td>
				     
                </tr>
				<tr>
			          <td colspan=2>residence : <?php echo '<img   src="data:image/jpeg;base64,'.( $row['scanres'] ).'" alt="Avatar"  />'; ?></td>
				 </tr>
				<tr>
					  <td>diplome du bacalaureat : <?php echo '<img src="data:image/jpeg;base64,'.( $row['scanbac'] ).'" alt="Avatar"  />'; ?></td>
				     
                </tr>
		
            <?php
                }
				}
                }
				}
				}
				else{
                    echo "ETUDIANS NON EXUSTANT.";
				}	
            ?>
          </table>
		       
	</center>

		  </main>
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