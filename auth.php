
<?php
function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
    	header('Location: ' . $url, true);
    }

    exit();
}

$status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}else
if($status == PHP_SESSION_DISABLED){
    //Sessions are not available
}else
if($status == PHP_SESSION_ACTIVE){
    //Destroy current and start new one
    session_destroy();
    session_start();
}

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "cheapomail");


$_SESSION['username']="";
$_SESSION['login']="login";
$status = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$_SESSION['username']=$_REQUEST['username'];

	mysql_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_DATABASE) or die (mysql_error ());

	mysql_select_db(DB_DATABASE) or die(mysql_error());

	$strSQL = "SELECT * FROM User";

	$rs = mysql_query($strSQL);
	
	while($row = mysql_fetch_array($rs)) {
	  if($_POST['username']==$row['username'] && password_verify($_POST['password'],$row['password'])){
		  if($_SESSION['username'] == 'admin'){
		  	$_SESSION['register']="Registration";
		  	$_SESSION['login']="logout";
		  }
	  
	  	Redirect('index.php', false);
	  }else{
	  	$status="Login Failed";
	  }
	}
	// Close the database connection
	mysql_close(); 

}

$_SESSION['index']="Home.html";
$_SESSION['login']="logout";
