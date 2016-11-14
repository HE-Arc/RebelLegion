@extends('app')

@section('content')


<div class="row">
	<div class="small-12 small-centered medium-8 large-6 columns">
		<div class="callout-header">Login</div>
		<div class="callout form">

			<form class="log-in-form" role="form" method="POST" action="{{ url('/login') }}">
				{{ csrf_field() }}

		      <label>Adresse e-mail *
		        <input id="email" type="email" name="email" placeholder="monmail@exemple.com" value="{{ old('email') }}" required="required" aria-describedby="exampleHelpText">

						@if ($errors->has('email'))
								<span>
				          <strong>{{ $errors->first('email') }}</strong>
				        </span>
						@endif
		      </label>

					<label for="password">Mot de passe * </label>

					<div class="input-group">
						<input id="password" class="input-group-field" type="password" name="password" required="required">
						<a id="show-password" class="input-group-button" title="Afficher le mot de passe">
							<i id="show-password-icon" class="fi-eye button secondary"></i>
						</a>

						@if ($errors->has('password'))
								<span>
										<strong>{{ $errors->first('password') }}</strong>
								</span>
						@endif
					</div>
					<p class="help-text" id="helpText">Les champs indiqués par une * sont obligatoires</p>

					<label>
							<input type="checkbox" name="remember"> Se souvenir de moi</input>
					</label>

					<p>
						<button type="submit" class="button expanded">
								Se connecter
						</button>
					</p>

					<p class="text-center">
						<a class="menu_link" href="{{ url('/password/reset') }}">
							Mot de passe oublié?
						</a>
					</p>

			</form>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){

			$('#show-password').click(function() {
				if($(this).prev('input').prop('type') == 'password') {
					//Si c'est un input type password
					$(this).prev('input').prop('type','text');
					$(this).prop('title','Cacher le mot de passe');
					$('#show-password-icon').addClass('warning');
				} else {
					//Sinon
					$(this).prev('input').prop('type','password');
					$(this).prop('title','Afficher le mot de passe');
					$('#show-password-icon').removeClass('warning');
				}
			});


			$('.menu_link_login').parent().addClass('active');

		});
</script>

<!--<script src="js/foundation.core.js"></script>
-->


@endsection
