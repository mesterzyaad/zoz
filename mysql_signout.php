<?php
	session_start();
	//unset($SESSION['AdminId']);
	session_destroy();
	echo'<script type='text/javascript>
	location.href="mysql_signin_form.php";
	</script>';
 ?>