		<?php
			if(isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['demande']))
			{
				$to = "moustou1993@gmail.com";
				$subject = 'Demande';
				$msg = $_POST['demande'];
				$from = $_POST['mail'];
				// $headers = 'From:' . $from;
				mail($to,$subject,$msg);
				$message = "Votre demande a été réceptionner par notre WEBMASTER, vous allez recevoir la réponse une fois votre demande traité.<br />Merci de nous avoir choisi";
			}
		?>
		