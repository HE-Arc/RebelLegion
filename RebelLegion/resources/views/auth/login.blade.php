@extends('layouts.app')

@section('content')


<div class="row">
	<div class="small-12 small-centered medium-8 large-6 columns">
		<div class="callout-header">@lang('auth.login')</div>
		<div class="callout form">

			<form class="log-in-form" role="form" method="POST" action="{{ route('login', ['lang' =>App::getLocale()] ) }}">
				{{ csrf_field() }}

		      <label>@lang('users.email')
		        <input id="email" type="email" name="email" placeholder="monmail@exemple.com" value="{{ old('email') }}" required="required" aria-describedby="exampleHelpText">

						@if ($errors->has('email'))
								<label class="is-invalid-label">
									{{ $errors->first('email') }}
								</label>
						@endif
		      </label>

					<label for="password">@lang('users.password')</label>

					<div class="input-group">
						<input id="password" class="input-group-field" type="password" name="password" required="required">
						<a id="show-password" class="input-group-button" title="Afficher le mot de passe">
							<i id="show-password-icon" class="fi-eye button secondary"></i>
						</a>

						@if ($errors->has('password'))
								<label class="is-invalid-label">
									{{ $errors->first('password') }}
								</label>
						@endif
					</div>

					<label>
							<input type="checkbox" name="remember">@lang('users.rememberMe')</input>
					</label>

					<p>
						<button type="submit" class="button expanded">
								@lang('auth.login')
						</button>
					</p>

					<p class="text-center">
						<a class="menu_link" href="{{ route('passwordReset', ['lang' => App::getLocale() ])  }}">
							@lang('auth.forgotPassword')
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
