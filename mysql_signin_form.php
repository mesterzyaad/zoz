<? session_start() ?>
<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.0 Strict//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
 <html lang="en">
 <head>
	 <title></title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" href="" type="text/css"/>
 </head>
	 <body>
	<?
	function SignInForm(){
	?>
	<form method= "post" action= "mysql_signin.php">
	<center>
	<input type= "text" placeholder= "email"name= "email"/></br>
	
	 <input type= "password" placeholder= "password"name= "password"/></br></br>
	 <input type= "submit" value= "sign in"/></br>
	 </center>
	</form>
	?>
	}
	include_once('mysql_head.php');
	if(isset($_SESSION['AdminId'])){
	require_once('mysql_connect.php');
	$command= "select name from admins where id= ".$_SESSION['AdminId']."limit 1";
	if($admin= mysqli_query($conn_link,$command)){
	$AdminInf=mysqli_fetch_assoc('$admin';
	echo"<center><h2>welcome '.$AdminInf['name'].'
	</br></br>
	<a href= "mysql_signout.php" target= "_self">signout</a>
	</h2>
	</center>";
	}else{
	echo"error";
	}
	mysqli_close($conn_link);
	
	
	
	
	
	}else{
	SignInForm();
	}
	 include_once('mysql_foot.php');
	?>
	
	          
	
	 </body>
 </html>