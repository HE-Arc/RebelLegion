@extends('layouts.app')

@section('content')

  <a href="{{ route('users.create', [ 'lang' => App::getLocale()] ) }}" class="button">@lang('forms_buttons_common.create')</a>

	<div class="first-element row">
		<div class="small-centered small-12 large-10 columns game_info_desc">

						<!-- small -->
						<div class="show-for-small-only">
							{{$usersSmall->render()}}
							<div class="row small-up-3">
								@foreach ($usersSmall as $user)
										<div class="small-4 columns">
											<a href="{{ route('users.show', ['lang' => App::getLocale(), 'user' => $user->id] ) }}">
								      	<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
												<p class="text-center">@lang('users.userName') : {{ $user->userName }}</p>
											</a>
								    </div>
						    @endforeach
						  </div>
							{{$usersSmall->render()}}
						</div>

						<!-- medium -->
						<div class="show-for-medium-only">
							{{$usersMedium->render()}}
							<div class="row medium-up-6">
								@foreach ($usersMedium as $user)
								<div class="medium-2 columns">
									<a href="{{ route('users.show', ['lang' => App::getLocale(), 'user' => $user->id]) }}">
										<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
										<p class="text-center">@lang('users.userName') : {{ $user->userName }}</p>
									</a>
								</div>
						    @endforeach
						  </div>
							{{$usersMedium->render()}}
						</div>

						<!-- large -->
						<div class="show-for-large">
							{{$usersLarge->render()}}
							<div class="row large-up-8">
								@foreach ($usersLarge as $user)
								<div class="column-1of8 column">
									<a href="{{ route('users.show', ['lang' => App::getLocale(), 'user' => $user->id]) }}">
										<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
										<p class="text-center">@lang('users.userName') : {{ $user->userName }}</p>
									</a>
								</div>
						    @endforeach
							</div>
							{{$usersLarge->render()}}
						</div>

		</div>
	</div>



</div>

<script>
	$(document).ready(function(){
		$('.menu_link_members').parent().addClass('active');
		//console.log(Foundation.MediaQuery.atLeast('large'));
		//Pour savoir si on est au minimum en large

	});
</script>

@endsection
