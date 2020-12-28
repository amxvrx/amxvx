<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'projet2020');

// variable declaration
$username = "";
$email    = "";
$errors   = array(); 
$image    = "";


// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
	register();
}
if (isset($_POST['register_btn1'])) {
    register1();
}
if (isset($_POST['register_btn2'])) {
	register2();
}
if (isset($_POST['register_btn3'])) {
	register3();
}
if (isset($_POST['register_btn4'])) {
	register4();
}
if (isset($_POST['quiter_btn'])) {
	quiter();
}
if (isset($_POST['cert_btn'])) {
	cert();
}
if (isset($_POST['cert_btn2'])) {
	cert2();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $username, $email, $image  ;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password_1']);
	$password_2  =  e($_POST['password_2']);
	$image       =  base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name'])));
	
	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		array_push($errors, "nom d'utilisateurs requis !");    
	}
	if (checkusername($username)==true) { 
		array_push($errors, "nom d'utilisateurs deja utilisé !");    
	}
	if (empty($email)) { 
		array_push($errors, "Email requis !"); 
	}
	if (empty($password_1)) { 
		array_push($errors, "mot de passe requis !"); 
	}
	if ($password_1 != $password_2) {
		array_push($errors, "les deux mot de passe ne sont pas compatible !");
	}
	if (empty($image)) { 
		array_push($errors, "inserer une photo !");
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database

		if (isset($_POST['user_type'])) {
			$user_type = e($_POST['user_type']);
			$query = "INSERT INTO utilisateurs (username, email, user_type, password, image) 
					  VALUES('$username', '$email', '$user_type', '$password', '$image')";
			mysqli_query($db, $query);
			$_SESSION['success']  = "compte admin creér avec succé";
			header('location: home.php');
		}
		else{
			$query = "INSERT INTO utilisateurs (username, email, user_type, password, image) 
					  VALUES('$username', '$email', 'user', '$password', '$image')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);
			
			// put logged in user in session
			$_SESSION['user'] = getUserById($logged_in_user_id);
			$_SESSION['success']  = "compte creér avec succé";
			header('location: index.php');	
           }			
		}
	}



function register1(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors ;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$id          =  $_SESSION['user']['id'];
	$prenom      =  e($_POST['prenom']);
	$date        =  e($_POST['date']);
	$naissance   =  e($_POST['naissance']);
	$pere        =  e($_POST['pere']);
	$mere        =  e($_POST['mere']);
	$postal      =  e($_POST['postal']);
	$addr        =  e($_POST['addr']);
	$sex         =  e( $_POST['sex']);
	$pays        =  e($_POST['pays']);
	$spe         =  e($_POST['spe']);
	$resid       =  e($_POST['resid']);
	$numetu      =  e($_POST['numetu']);
	$numid       =  e($_POST['numid']);
	$numtel      =  e($_POST['numtel']);
	$scansert    =  base64_encode(file_get_contents(addslashes($_FILES['scansert']['tmp_name'])));
	$scanid      =  base64_encode(file_get_contents(addslashes($_FILES['scanid']['tmp_name'])));
	$scannais    =  base64_encode(file_get_contents(addslashes($_FILES['scannais']['tmp_name'])));
	$scanres     =  base64_encode(file_get_contents(addslashes($_FILES['scanres']['tmp_name'])));
	$scanbac     =  base64_encode(file_get_contents(addslashes($_FILES['scanbac']['tmp_name'])));
	
	// form validation: ensure that the form is correctly filled
	if (checkid($id)==true){ 
		array_push($errors, "vous avez deja envoyer une demande , si vous voulez modifier vos donnes attendez que votre requette soit desaprouver dici 24h"); 
	}
	if (checkid2($id)==true){ 
		array_push($errors, "vous avez deja un  logement  !"); 
	}
	if (empty($prenom)) { 
		array_push($errors, "prenom d'utilisateurs requis !"); 
	}
	if (empty($date)) { 
		array_push($errors, "date de naissance requise !"); 
	}
	if (empty($naissance)) { 
		array_push($errors, "date de naissance requise !"); 
	}
	if (empty($pere)) {
		array_push($errors, "nom du pere requis !");
	}
	if (empty($mere)) {
		array_push($errors, "nom de la mere rquis !");
	}
	if (empty($postal)) {
		array_push($errors, "code postal requis requis !");
	}
	if (empty($addr)) {
		array_push($errors, "adresse requise !");
	}
	if (empty($sex)) {
		array_push($errors, "sex de la personne requis !");
	}
	if (empty($pays)) {
		array_push($errors, "pays requis ");
	}
	if (empty($spe)) {
		array_push($errors, "spetialite requise !");
	}
	if (empty($resid)) { 
		array_push($errors, "residance requise !");
	}
	if (empty($numetu)) { 
		array_push($errors, "numeros de la carte d'etudiant requis !");
	}
	if (empty($numid)) { 
		array_push($errors, "numeros de la carte d'identification requis !");
	}
	if (empty($numtel)) { 
		array_push($errors, "numeros de telephone requis !");
	}
	if (empty($scansert)) { 
		array_push($errors, "scanne du sertificat requis !");
	}
	if (empty($scanid )) { 
		array_push($errors, "scanne des papiers d'identite requis !");
	}
	if (empty($scannais )) { 
		array_push($errors, "scanne ddu sertificat de naissance requis !");
	}
	if (empty($scanres )) { 
		array_push($errors, "scanne du sertificat de residence requis !");
	}
    if (empty($scanbac )) { 
    array_push($errors, "scanne du sertificat de bacaloreat requis !");
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {

			$query = "INSERT INTO `demande_logement`(`id`, `prenom`, `date_naissance`, `lieu_naissance`, `nom_pere`, `nom_mere`, `code_postal`, `addr`, `sex`, `specialite`, `residence`, `num_etudiant`, `num_ident`, `tel`, `scan_sert`, `scan_ident`, `scannais`, `scanres`, `scanbac`)                      
					  VALUES('$id', '$prenom', '$date', '$naissance', '$pere', '$mere', '$postal', '$addr', '$sex', '$spe', '$resid', '$numetu', '$numid', '$numtel', '$scansert', '$scanid', '$scannais', '$scanres', '$scanbac')";
			mysqli_query($db, $query);
			array_push($errors,"votre demande est envoyer avec succé");				
	}
}

function register2(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors ;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$id          =  $_SESSION['user']['id'];
	$pq          =  e($_POST['pq']);
	$res_actu    =  e($_POST['resid1']);
	$res_futu    =  e($_POST['resid2']);
	
	// form validation: ensure that the form is correctly filled
	if (checkid2($id)==false){ 
		array_push($errors, "vous n'avez pas de logement encore !"); 
	}
	if (checkid3($id)==true){ 
		array_push($errors, "vous avez deja fait une demande !"); 
	}
	if (empty($pq)) { 
		array_push($errors, "merci de preciser pourqois vous vouler etre transferer !"); 
	}
	if (empty($res_actu)) { 
		array_push($errors, "preciser votre residence actuel !");
	}
	if (empty($res_futu)) { 
		array_push($errors, "preciser votre future residence !");
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
			$query = "INSERT INTO `demande_transfert`(`id`, `pourqois`, `res_actu`, `res_futu`)                     
					  VALUES('$id', '$pq', '$res_actu', '$res_futu')";
			mysqli_query($db, $query);
			array_push($errors,"votre demande est envoyer avec succé");				
	}
} 

function register3(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors;
	
	$id        =  $_SESSION['user']['id'];
	$newscan   =  base64_encode(file_get_contents(addslashes($_FILES['newscan']['tmp_name'])));
	
	// form validation: ensure that the form is correctly filled
	if (checkid2($id)==false){ 
		array_push($errors, "vous n'avez pas de logement encore !"); 
	}
	if(checkid4($id)==true) { 
		array_push($errors, "vous n'avez pas besoin de mise a jours !");    
	}
	if (empty($newscan)) { 
		array_push($errors, "nouveau scan requis !");    
	}
	if (checkid5($id)==true){ 
		array_push($errors, "vous avez deja fait une demande !"); 
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$query = "INSERT INTO `demande_renouv`(`id`, `scan`)                     
					  VALUES('$id', '$newscan')";
			mysqli_query($db, $query);
			array_push($errors,"votre demande est envoyer avec succé");	
		
	}
}

function register4(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors;
	
	$id        =  $_SESSION['user']['id'];
	
	// form validation: ensure that the form is correctly filled
	if (checkid2($id)==false){ 
		array_push($errors, "vous n'avez pas de logement encore !"); 
	}
	if (checkid6($id)==true){ 
		array_push($errors, "vous avez deja fait une demande !"); 
	}
	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$query = "INSERT INTO `demande_dip`(`id`)                     
					  VALUES('$id')";
			mysqli_query($db, $query);
			array_push($errors,"votre demande est envoyer avec succé");	
		
	}
}

function quiter(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors;
	
	$id = $_SESSION['user']['id'];
	
	// form validation: ensure that the form is correctly filled
	if (checkid2($id)==false){ 
		array_push($errors, "vous n'avez pas de logement encore !"); 
	}
	if (count($errors) == 0) {
		
		$query = "select * from logement where id=" . $id;
		$t = mysqli_fetch_array(mysqli_query($db,$query));
		$n1 = $t['num_chambre'];
		$n2 = $t['residence'];
		$query2 = "select count from chambres where num_chambre = '$n1' and residence = '$n2'";
		$t2 = mysqli_fetch_array(mysqli_query($db,$query2));
		$n = $t2['count']+1;
		$query3 =("UPDATE chambres SET count = '$n' WHERE num_chambre = '$n1' and residence = '$n2'");
		mysqli_query($db,$query3);
		
		$query4 ="DELETE FROM logement  WHERE id = " . $id;
		mysqli_query($db,$query4);
		$query5 ="DELETE FROM info_utilisateur  WHERE id = " . $id;
		mysqli_query($db,$query5);
		nombrech();
		array_push($errors,"vous avez quitter votre logment !"); 
	}
}

function cert(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors;
	
		 $query = "UPDATE info_utilisateur SET  etat = '1' ";
		mysqli_query($db,$query);
		array_push($errors,"operation executé avec succé !"); 
	
}

function cert2(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors;
	
	       $mysqli = NEW MySQLI('localhost','root','','projet2020');
           $resultSet = $mysqli->query("SELECT id FROM info_utilisateur where  etat = '1' ");   
           while($rows=$resultSet->fetch_assoc())
           {
	    $v = $rows['id'];
		$query1 = "select * from logement where id= $v";
		$t = mysqli_fetch_array(mysqli_query($db,$query1));
		$n1 = $t['num_chambre'];
		$n2 = $t['residence'];
		$query2 = "select count from chambres where num_chambre = '$n1' and residence = '$n2'";
		$t2 = mysqli_fetch_array(mysqli_query($db,$query2));
		$n = $t2['count']+1;
		$query3 ="UPDATE chambres SET count = '$n' WHERE num_chambre = '$n1' and residence = '$n2'";
		mysqli_query($db,$query3);
		
		$query4 ="DELETE FROM logement  WHERE id = " . $v;
		mysqli_query($db,$query4);
		$query5 ="DELETE FROM info_utilisateur  WHERE id = " . $v;
		mysqli_query($db,$query5);
		   }
		   nombrech();
		array_push($errors,"operation executé avec succé !"); 
     }


function nombrech(){
	// call these variables with the global keyword to make them available in function
	global $db;
	
	       $mysqli = NEW MySQLI('localhost','root','','projet2020');
           $resultSet = $mysqli->query("SELECT residence FROM chambres where  count = '2' ");   
           while($rows=$resultSet->fetch_assoc())
           {
	    $r = $rows['residence'];
		$query1 = "select num_chambre from resid where nom = '$r'";
		$t = mysqli_fetch_array(mysqli_query($db,$query1));
		$n1 = $t['num_chambre']+1;
		$query3 ="UPDATE resid SET num_chambre = '$n1' WHERE nom = '$r'";
		mysqli_query($db,$query3);
		$query4 ="DELETE FROM chambres  WHERE residence = '$r' and count = '2' ";
		mysqli_query($db,$query4);
		   } 
     }

	
// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM utilisateurs WHERE id=" . $id;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}


// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function checkid($id){
	global $db;
	$query =("SELECT * FROM demande_logement WHERE id=" . $id); 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	}
	else {
		return true;
	}
}

function checkid2($id){
	global $db;
	$query =("SELECT * FROM logement WHERE id=" . $id); 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	}
	else {
		return true;
	}
}

function checkid3($id){
	global $db;
	$query =("SELECT * FROM demande_transfert WHERE id=" . $id); 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	}
	else {
		return true;
	}
}

function checkid4($id){
	global $db;
	$query =("SELECT etat FROM info_utilisateur WHERE id=" . $id); 
	$r=mysqli_fetch_array(mysqli_query($db,$query));
    if ($r['etat']==0){
		return true;
	}
	else {
		return false;
	}
}

function checkid5($id){
	global $db;
	$query =("SELECT * FROM demande_renouv WHERE id=" . $id); 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	}
	else {
		return true;
	}
}

function checkid6($id){
	global $db;
	$query =("SELECT * FROM demande_dip WHERE id=" . $id); 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	}
	else {
		return true;
	}
}

function checkid7($id){
	global $db;
	$query ="SELECT * FROM diplomees WHERE id=" . $id; 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	  }
	else {
	return true;
	}
}


function checkusername($username){
	global $db;
	$query =("SELECT * FROM utilisateurs WHERE username='$username'"); 
	$r=mysqli_query($db,$query);
	if (mysqli_num_rows($r)==0){
		return false;
	}
	else {
		return true;
	}
}


function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

 //photo 
function photo()
{ 
    global $db;
	$query =("SELECT image FROM utilisateurs WHERE id=" . $_SESSION['user']['id']);
	$result = mysqli_fetch_array(mysqli_query($db,$query));
	echo '<img style="border-radius: 50%;height:50px;"  src="data:image/jpeg;base64,'.( $result['image'] ).'" alt="Avatar"  />';
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}
// log user out if logout button clicked
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}
// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $username, $errors;

	// grap form values
	$username = e($_POST['username']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($username)) {
		array_push($errors, "nom d'utilisateurs requis");
	}
	if (empty($password)) {
		array_push($errors, "mot de passe requis");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM utilisateurs WHERE username='$username' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "session admin ouverte";
				header('location: admin/home.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "session ouverte";

				header('location: index.php');
			}
		}else {
			array_push($errors, " nom d'utilisateur ou mot de pass incorrect");
		}
	}
}
// ...
function isAdmin()
{
	if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
		return true;
	}else{
		return false;
	}
}



////////////////////////////////
////////////////////////////////
///////////////////////////////
////////////////////////////////
///////////////////////////////
/////////////////////////////////////////
////////////////////////////////////////
//////////////////////////////////////




    define('DBINFO','mysql:host=localhost;dbname=projet2020');
    define('DBUSER','root');
    define('DBPASS','');
	
	
 function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
 function performQuery($query){
        $con = new PDO(DBINFO,DBUSER,DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
	function ach($residence){
		global $db;
	  $query =("SELECT * FROM chambres WHERE count<>'0' AND residence='$residence'" );
		$r=mysqli_num_rows(mysqli_query($db,$query));
		 if($r > 0){
			$query1 =("SELECT count FROM chambres WHERE count<>'0' AND residence='$residence'" );
			$t = mysqli_fetch_array(mysqli_query($db,$query1));
			$count = $t['count']-1;
			$query2 =("UPDATE chambres SET count = $count WHERE count<>'0' AND residence='$residence'");
		    mysqli_query($db,$query2);
			$query3 =("SELECT MAX(num_chambre) FROM chambres WHERE count='0' AND residence='$residence'" );
			$t = mysqli_fetch_array(mysqli_query($db,$query3));
			$x1 = $t['MAX(num_chambre)'];
			return $x1;
		  }
	 else {
	   $query =("SELECT num_chambre FROM resid WHERE nom='$residence'" );
	   $t = mysqli_fetch_array(mysqli_query($db,$query));
	   $n = $t['num_chambre'];
	   if($n > 0){
		 $query = "INSERT INTO `chambres`(`num_chambre`, `count`, `residence`)                     
					  VALUES('0', '1', '$residence')";
		 if(performQuery($query)){
		 $query1 =("SELECT * FROM chambres WHERE residence='$residence'" );
		 $x2 = mysqli_num_rows(mysqli_query($db,$query1)); 
		 $query2 =("UPDATE chambres SET num_chambre = $x2 WHERE count<>'0' AND residence='$residence'");
		 mysqli_query($db,$query2);
		 $query3=("SELECT * FROM resid WHERE nom='$residence'");
		 $t = mysqli_fetch_array(mysqli_query($db,$query3));
		 $n = $t['num_chambre']-1;
		 $query4 =("UPDATE resid SET num_chambre = $n WHERE nom = '$residence'");
		 mysqli_query($db,$query4);
		 return $x2; 
	   }
	  }
     else{
		return null; 
	  }	  
	 }
	}
	
	function ech($res_actu,$res_futu,$id){
		global $db;
	  $query =("SELECT * FROM demande_transfert WHERE res_actu = '$res_futu' AND res_futu = '$res_actu'" );	      
	  $t = mysqli_fetch_array(mysqli_query($db,$query));
	  if($t > 0){
	    $query1 =("SELECT num_chambre FROM logement WHERE id = '$t[id]'" );
	    $t1 = mysqli_fetch_array(mysqli_query($db,$query1));
		$query2 =("UPDATE logement SET residence = '$res_actu' , num_chambre = '$t1[num_chambre]' WHERE id = '$t[id]'");
		mysqli_query($db,$query2);	
		$query3 =("UPDATE info_utilisateur SET residence = '$res_actu' WHERE id = '$t[id]'");
		mysqli_query($db,$query3);	
        $query4 = "DELETE FROM demande_transfert  WHERE id = '$t[id]'";	
        mysqli_query($db,$query4);		
		return $t1['num_chambre'];  
	   }
	  else{
	    $query =("SELECT * FROM chambres WHERE count<>'0' AND residence='$res_futu'" );
		$r=mysqli_num_rows(mysqli_query($db,$query));
		 if($r > 0){
			 
			$query = "select * from logement where id=" . $id;
		    $t = mysqli_fetch_array(mysqli_query($db,$query));
		    $n1 = $t['num_chambre'];
		    $n2 = $t['residence'];
		    $query2 = "select count from chambres where num_chambre = '$n1' and residence = '$n2'";
		    $t2 = mysqli_fetch_array(mysqli_query($db,$query2));
		    $n = $t2['count']+1;
		    $query3 =("UPDATE chambres SET count = '$n' WHERE num_chambre = '$n1' and residence = '$n2'");
		    mysqli_query($db,$query3);
			nombrech();
			 
			$query1 =("SELECT count FROM chambres WHERE count<>'0' AND residence='$res_futu'" );
			$t = mysqli_fetch_array(mysqli_query($db,$query1));
			$count = $t['count']-1;
			$query2 =("UPDATE chambres SET count = $count WHERE count<>'0' AND residence='$res_futu'");
		    mysqli_query($db,$query2);
			$query3 =("SELECT MAX(num_chambre) FROM chambres WHERE count='0' AND residence='$res_futu'" );
			$t = mysqli_fetch_array(mysqli_query($db,$query3));
			$x1 = $t['MAX(num_chambre)'];
			return $x1;
		  }
	 else {
	   $query =("SELECT num_chambre FROM resid WHERE nom='$res_futu'" );
	   $t = mysqli_fetch_array(mysqli_query($db,$query));
	   $n = $t['num_chambre'];
	   if($n > 0){
		   
		$query = "select * from logement where id=" . $id;
		$t = mysqli_fetch_array(mysqli_query($db,$query));
		$n1 = $t['num_chambre'];
		$n2 = $t['residence'];
		$query2 = "select count from chambres where num_chambre = '$n1' and residence = '$n2'";
		$t2 = mysqli_fetch_array(mysqli_query($db,$query2));
		$n = $t2['count']+1;
		$query3 =("UPDATE chambres SET count = '$n' WHERE num_chambre = '$n1' and residence = '$n2'");
		mysqli_query($db,$query3);
		nombrech();
		   
		 $query = "INSERT INTO `chambres`(`num_chambre`, `count`, `residence`) VALUES('0', '1', '$res_futu')";                     
		 if(performQuery($query)){
		 $query1 =("SELECT * FROM chambres WHERE residence='$res_futu'" );
		 $x2 = mysqli_num_rows(mysqli_query($db,$query1)); 
		 $query2 =("UPDATE chambres SET num_chambre = $x2 WHERE count<>'0' AND residence='$res_futu'");
		 mysqli_query($db,$query2);
		 $query3=("SELECT * FROM resid WHERE nom='$res_futu'");
		 $t = mysqli_fetch_array(mysqli_query($db,$query3));
		 $n = $t['num_chambre']-1;
		 $query4 =("UPDATE resid SET num_chambre = $n WHERE nom = '$res_futu'");
		 mysqli_query($db,$query4);
		 return $x2; 
	   }
	  }
     else{
		return null; 
	  }	  
	 } 
	  }
	}
?>