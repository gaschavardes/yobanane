<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Banane !</title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" type="text/css" href="styles/jquery.fullPage.css" />
</head>
<body>
<?php 

 ?>

<div id="fullpage">	

	<div class="section main">

		<div class="formulaire">
			<div class="button unclicked">
				<form  class="info" action="form.php" method="post">
					<ul>
						<li>
							<input type="text" name="destinataire" placeholder="Destinataire" >
						</li>
						<li>
							<input type="text" name="adresse_dest" placeholder="Adresse du destinataire">
						 </li>
						<li>
							<input type="text" name="email_client" placeholder="Votre e-mail">
						</li>
						<li>
						<!-- <textarea name="comment" placeholder="Go crazy"></textarea> -->
							<textarea class="message" name="message" placeholder="Votre message"></textarea>
						</li>
						<li>
							<SELECT class="mood" name="bananamood" size="1">
							<option value="" disabled selected>BANANA MOOD</option>
							<OPTION value='happy' >Happy </OPTION>
							<OPTION>WTF
							<OPTION>Sad
							<OPTION>Wonderfull
							<OPTION>Sexy
							</SELECT>
						</li>
						<li>
						<input type="submit">
						</li>
						<a href="#" class="paiment">Passage en caisse </a>
					</ul>
				</form>
				
				<form action="form.php" method="POST" id="payment-form">
				  <span class="payment-errors"></span>

				  <div class="form-row">
				    <label>
				      <span>Card Number</span>
				      <input type="text" size="20" data-stripe="number"/>
				    </label>
				  </div>

				  <div class="form-row">
				    <label>
				      <span>CVC</span>
				      <input type="text" size="4" data-stripe="cvc"/>
				    </label>
				  </div>

				  <div class="form-row">
				    <label>
				      <span>Expiration (MM/YYYY)</span>
				      <input type="text" size="2" data-stripe="exp-month"/>
				    </label>
				    <span> / </span>
				    <input type="text" size="4" data-stripe="exp-year"/>
				  </div>

				  <button type="submit">Submit Payment</button>
				</form>
				
			</div>
		</div>
		<div class="more_info"><a href="#information">?</a></div>
	</div>
	<div class="section information" id="information">
		
	</div>
</div>	


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
	<script type="text/javascript" src="script/jquery.fullPage.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	<script type="text/javascript" src="script/mystripe.js"></script>
	<script src="script/script.js"></script>
</body>
</html>