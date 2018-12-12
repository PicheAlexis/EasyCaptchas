<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
		
	
		<?php
			SESSION_START();
			if(isset($_REQUEST['envoyer']))
			{
				$captcha=$_REQUEST['captcha'];
				if($captcha=="")
				{
					echo "Aucun mot de passe saisi";
				}
				else
				{
					if($captcha==$_SESSION['code'])
					{
						echo "OH PUTAIN J'AI REUSSI!!!";
					}
					else
					{
						echo "Mauvais mot de passe";
					}
				}
			}
			else
			{
				echo "<img src='script-captchas.php' alt='captchas' />";
			}
		?>
		<form  method="POST" action="index.php">
			<label for="captcha">Recopiez ce que vous voyez</label><br>
			<input type="text" id="captcha" name="captcha">		
			<br>
			<input type="submit" id="envoyer" name="envoyer">
		</form>
	</body>
</html>