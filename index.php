
		<?php
			session_start();
			include('contact.php');
		?>
			<div id = "contact">			
				<center><p>
				<?php
					if(isset($message)) echo $message;
				?>
				</p></center>
				<table id = "page_contact">
					<tr>
						
						<td>	
							<h1>Contactez nous</h1>
							<form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
								<input type = "text" name = "nom" placeholder = "Nom & Prénom" size = "30" class = "input" value = "<?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])) echo $_SESSION['nom'].' '.$_SESSION['prenom'];?>"required/>
								<br />
								<br />
								<br />
								<input type = "email" name = "mail" placeholder = "Email" size = "30" class = "input" value = "<?php if(isset($_SESSION['mail'])) echo $_SESSION['mail'];?>" required/>
								<br />
								<br />
								<br />
								<textarea cols="40" rows="5" name="demande" placeholder = "Votre demande ici" class = "input" required></textarea>
								<br />
								<br />
								<br />
								<input type = "submit" value = "Envoyer" id = "envoyer_btn" />
							</form>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>