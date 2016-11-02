@extends('app')

@section('content') 

<div class="row">
	<div class="small-12 small-centered medium-8 large-6 columns">

		<form class="log-in-form">
			<div class="row column">

				<h4 class="text-center">Connexion</h4>

				<label>Email</label>
				<input type="email" placeholder="somebody@example.com">        

				<label>Mot de passe </label>
				<div class="row collapse">
					
				</div>
				
				<div class="input-group">
					<input id="password-field" class="input-group-field" type="password">
					<a id="show-password" class="input-group-button" title="Afficher le mot de passe">
						<i class="fi-eye show-password-icon button secondary"></i>
					</a>					
					
				</div>
								

				<p><a type="submit" class="button expanded menu_link">Se connecter</a></p>

				<p class="text-center"><a href="#">Mot de passe oublié?</a></p>     		

			</div>			
		</form>
		
	</div>
</div>

<script>
$(document).ready(function(){
 
			$('#show-password').click(function() {
				if($(this).prev('input').prop('type') == 'password') {
					//Si c'est un input type password
					$(this).prev('input').prop('type','text');
					$(this).prop('title','Cacher le mot de passe');
					$('.show-password-icon').addClass('warning');
				} else {
					//Sinon
					$(this).prev('input').prop('type','password');
					$(this).prop('title','Afficher le mot de passe');
					$('.show-password-icon').removeClass('warning');
				}
			});
			
			
			$('#menu_link_login').parent().addClass('active');
 
		});
</script>

@endsection