<?php include_once 'hasAccess.php';

if (isset($_POST['logout']) && !empty($_POST['logout']) ) {
	if ($_POST['logout'] == 1) {
		include_once('logout.php');
		$have_access = FALSE;
	}
}
?>
<!DOCTYPE html>



<html >
  <head>
    <meta charset="UTF-8">


    <title>Defender</title>
    
        <link rel="stylesheet" href="css/style.css">
    
    	<script src='js/jquery-2.1.3.min.js'></script>

        <script src="js/index.js"></script>
  </head>



  <body>

<?php
if(  $have_access === TRUE){
?>
  <div>
  <diV align="left">
<a href="http://127.0.0.1/defender/files/personal.pdf"    style="display: block;
  width: 115px;
  height: 70px;
  background: #75AF4E;
  padding: 10px;
  text-align: center;
  border-radius: 5px;
  color: white;
  font-weight: bold;" target="_blank">
  Secrete Documents
</a>
</div>
<div align="right">

<a href="http://127.0.0.1/defender/files/fb_pic.jpg"    style="display: block;
  width: 115px;
  height: 50px;
  background: #75AF4E;
  padding: 10px;
  text-align: center;
  border-radius: 5px;
  color: white;
  font-weight: bold;" target="_blank">
  Secrete Photo
</a>
</div>
</diV>
<?php } ?>

    <div class="wrapper">
	<div class="container">
		<h1>Defender</h1>
		<?php
if(  $have_access === TRUE){

	?>

<form method="post" action="#" class="form">
			<input type="hidden" name="logout" value="1">
			<button type="submit" id="login-button">Logout</button>
		</form>

<?php	
}

if(  $have_access === FALSE){

?>
		<form method="post" action="#" class="form">
			<input type="text" placeholder="Username" value="user">
			<input type="hidden" name="log" value="1">
			<input type="password" placeholder="Password" value="1234">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>


	<?php
}


if (isset($_POST['log']) && !empty($_POST['log']) ) {
	if ($_POST['log'] == 1) {
		include_once('login.php');
		?>
<script type="text/javascript">
	$('form').fadeOut(1);
	 $('.wrapper').addClass('form-success');
	 $.ajax("./login.php");
	 window.location.href = "http://127.0.0.1/defender/";
</script>

		<?php
	}
}

?>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    

    
    
    
  </body>
</html>
