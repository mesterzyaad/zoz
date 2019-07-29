<? session_start();
?>

<!DOCTYPE html PUBLIC -//W3C//DTD XHTML 1.0 Strict//EN http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd>
 <html lang="en">
 <head>
	 <title></title>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <link rel="stylesheet" href="" type="text/css"/>
 </head>
	 <body>
	 <?
	 if(isset($_SESSION['AdminId'])){
	 echo"<script type= "text/javascript">
	 location.href= "mysql_index.php"
	 </script>
	 ";
	 }else{
	 $email=trim(strtolower($_POST['email']
	 ))
	 $password=addslashes($_POST['password']
	 );
	 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	 echo'invalid email adress';
	 }else{
	 require_once('mysql_connect.php');
	 $command="select * from admins where email=' ".$_POST["email"]." ' and password=' ".$_POST["password"]." ' limit 1";
	 if($get_admin=mysqli_query($conn_link,$command)){
	 if(mysqli_num_rows($get_admin)<=0)
	 {
	 echo"<center><h2>
	 wrong email or password !
	 </h2>
	 <input type= "button" value= "back" onclick= "window.history.back()"/>
	 </center>
	 }else{
	 $AdminInf=mysqli_fetch_assoc($get_admin);
	 $_SESSION['AdminId']=$AdminInf['id'];
	 echo"<center><h2>
	 welcome '.$AdminInf['name'].' :)
	 </h2>
	 <a href= "mysql_index.php" target= "_self">Home page</a>
	 </center>";
	 
	 }
	 
	 }else{
	 echo"mysqli_error($conn_link);
	 
	 }
	 
	 
	 }
	 
	 }
	 
	 
	 ?>
	
	 </body>
 </html>