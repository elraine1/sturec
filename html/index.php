<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>

<head>
	<title>Hello, Sturec!</title>
	<link rel="stylesheet" type="text/css" href="/style/css/mystyle.css">
</head>
<body>  

	<div class="wrap">
	<?php 
		require_once("/template/loginbar.php"); 
		require_once("/template/header.php");
	?>
		
		<div class="content_wrap">		
		<?php 
			require_once("/template/menu.php");
		?>		
			
			<div id="content">
				<h1> 내용 </h1><br>
				여기다 뭐 넣을까.
			</div>
			
		</div>
		
	<?php
		require_once("/template/footer.php");
	?>		
	</div>
</body>

  
</html>
