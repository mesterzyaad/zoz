<?php
if(!$conn_link = mysqli_connect('localhost','root','1234567')){
echo('error can not connect to database');
exit;
}else{
mysqli_select_db($conn_link,'test');
}
	
 ?>