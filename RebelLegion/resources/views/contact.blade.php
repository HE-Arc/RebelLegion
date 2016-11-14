@extends('app')

@section('content')
<div class="row">
			<div class="medium-12 columns">
				<div class="callout-header">Formulaire de contact</div>
				<div class="callout form">
														<form action="contact.php" method="post">
						<input name="form_confirm" value="true" type="hidden"> <!-- VERY IMPORTANT /!\ -->
						<div class="row">
							<div class="medium-12 columns">
								<label for="contact_input_subject">Sujet
									<select name="subject" id="contact_input_subject">
										<option value="game" selected="selected">Le jeu</option>
										<option value="website">Le site</option>
										<option value="dead link">Lien mort</option>
									</select>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-6 columns">
								<label for="contact_input_prenom">Prénom
									<input name="prenom" id="contact_input_prenom" required="required" placeholder="Prénom" type="text">
								</label>
							</div>
							<div class="medium-6 columns">
								<label for="contact_input_nom">Nom
									<input name="nom" id="contact_input_nom" required="required" placeholder="Nom de famille" type="text">
								</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-12 columns">
								<label for="contact_input_email">E-mail
									<div class="input-group">
										<span class="input-group-label" style="font-size: 1.3rem;"><i class="fi-at-sign"></i></span>
										<input class="input-group-field" name="email" id="contact_input_email" required="required" placeholder="Adresse e-mail" type="email">
									</div>
								</label>
							</div>
						</div>
						<div class="row">
							<div class="medium-12 columns">
								<label for="contact_input_message">Message
									<textarea rows="5" name="message" id="contact_input_message" required="required" maxlength="1000"></textarea>
								</label>
							</div>
						</div>
						<!-- CAPTCHA -->
						<div class="row">
							<div class="medium-12 columns">
								<p>
									</p><div class="g-recaptcha" data-sitekey="6LfdqwgUAAAAAFNaCQqGfjADiNqqI20EtqN4MVet"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LfdqwgUAAAAAFNaCQqGfjADiNqqI20EtqN4MVet&amp;co=aHR0cHM6Ly9tZXJjYXJpb25saW5lLmNvbTo0NDM.&amp;hl=fr&amp;v=r20161028135114&amp;size=normal&amp;cb=s8xwj6v94x3o" title="widget recaptcha" role="presentation" scrolling="no" name="undefined" width="304" height="78" frameborder="0"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
								<p></p>
							</div>
						</div>
						<!-- BOUTONS -->
						<div class="row">
							<div class="medium-12 columns">
								<p>
									<button type="reset" class="button secondary">Annuler</button>
									<button type="submit" class="button mercari">Envoyer</button>
								</p>
							</div>
						</div>
					</form>
				</div>
		  </div>
</div>

@endsection
