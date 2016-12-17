@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
      <a href="{{ route('users.create', [ 'lang' => App::getLocale()] ) }}" class="button">@lang('forms_buttons_common.create')</a>
    </div>
  </div>

	<div class="first-element row">
		<div class="small-centered small-12 large-10 columns game_info_desc">

					<!-- small -->
					<div>
						{{$usersSmall->render()}}
						<div class="row small-up-3">
							@foreach ($usersSmall as $user)
									<div class="small-4 columns">
										<a href="{{ route('users.show', ['lang' => App::getLocale(), 'user' => $user->id] ) }}">
							      	<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
											<p class="text-center">{{ $user->userName }}</p>
										</a>
							    </div>
					    @endforeach
					  </div>
						{{$usersSmall->render()}}
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
