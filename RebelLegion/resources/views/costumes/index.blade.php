@extends('layouts.app')

@section('content')

  @if(Auth::check() && Auth::user()->isAdmin)
    <div class="row">
      <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
        <a href="{{ route('costumes.create', [ 'lang' => App::getLocale()] ) }}" class="button">@lang('forms_buttons_common.create')</a>
      </div>
    </div>
  @endif

  <div class="first-element show-for-small-only row">
		<div class="small-centered small-12 large-10 columns game_info_desc">

			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="autoPlay: false">
				<ul class="orbit-container">

					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

          @php
            $i=0;
          @endphp
						@while ($i < count($costumes))
							@if($i == 0)
								<li class="orbit-slide is-active">
							@else
								<li class="orbit-slide">
							@endif

							<div class="row">

							@for($j = 0; ($j < 3) and ($i < count($costumes)); $j++)
                @php
                  $ido = $costumes[$i]->id;
                  $name = $costumes[$i]->name;
                  $thumb = $costumes[$i]->thumbnailURL;
                @endphp
								<div class="small-4 columns">
                  <a href="{{route('costumes.show', ['lang' => App::getLocale(), 'costume' => $ido] )}}">
                    @if( $thumb != null)
                      <img class="thumbnail" src="{{ asset($thumb) }}" alt="{{ $name }}'s thumbnail">
                    @else
                      <img class="thumbnail" src="{{ asset('img/costume.jpg') }}" alt="{{ $name }}'s thumbnail'">
                    @endif
                  <a>
								</div>

								@php
									$i++;
								@endphp

							@endfor

							</div>
						</li>

					@endwhile
					@php
						$i=0;
					@endphp

				</ul>
			</div>
		</div>
	</div>

	<div class="first-element show-for-medium-only row">
		<div class="small-centered small-12 large-10 columns game_info_desc">

			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="autoPlay: false">
				<ul class="orbit-container">

					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

						@while ($i < count($costumes))
							@if($i == 0)
								<li class="orbit-slide is-active">
							@else
								<li class="orbit-slide">
							@endif

							<div class="row">

							@for($j = 0; ($j < 6) and ($i < count($costumes)); $j++)
                @php
                  $ido = $costumes[$i]->id;
                  $name = $costumes[$i]->name;
                  $thumb = $costumes[$i]->thumbnailURL;
                @endphp
								<div class="medium-2 columns">
                  <a href="{{route('costumes.show', ['lang' => App::getLocale(), 'costume' => $ido] )}}">
                    @if( $thumb != null)
                      <img class="thumbnail" src="{{ asset($thumb) }}" alt="{{ $name }}'s thumbnail">
                    @else
                      <img class="thumbnail" src="{{ asset('img/costume.jpg') }}" alt="{{ $name }}'s thumbnail'">
                    @endif
                  </a>
								</div>

								@php
									$i++;
								@endphp

							@endfor

							</div>
						</li>

					@endwhile
					@php
						$i=0;
					@endphp

				</ul>
			</div>

		</div>
	</div>

	<div class="first-element show-for-large row">
		<div class="small-centered small-12 large-10 columns game_info_desc">

			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="autoPlay: false">

				<ul class="orbit-container">

					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

						@while ($i < count($costumes))
							@if($i == 0)
								<li class="orbit-slide is-active">
							@else
								<li class="orbit-slide">
							@endif

							<div class="row">

							@for($j = 0; ($j < 8) and ($i < count($costumes)); $j++)
              @php
                $ido = $costumes[$i]->id;
                $name = $costumes[$i]->name;
                $thumb = $costumes[$i]->thumbnailURL;
              @endphp
								<div class="column-1of8 column">
                  <a href="{{route('costumes.show', ['lang' => App::getLocale(), 'costume' => $ido] )}}">
                    @if( $thumb != null)
                      <img class="thumbnail" src="{{ asset($thumb) }}" alt="{{ $name }}'s thumbnail">
                    @else
                      <img class="thumbnail" src="{{ asset('img/costume.jpg') }}" alt="{{ $name }}'s thumbnail'">
                    @endif
                  </a>

								</div>

								@php
									$i++;
								@endphp

							@endfor

							</div>
						</li>

					@endwhile

				</ul>
			</div>

		</div>
	</div>


  <div id="showcostume_ajax_div" >

  </div>
  {{ Form::hidden('invisible', $costumes['0']->id, array('id' => 'invisible_id')) }}



<script>

  $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  });

	$(document).ready(function(){

		$('.menu_link_costums').parent().addClass('active');
		//console.log(Foundation.MediaQuery.atLeast('large'));
		//Pour savoir si on est au minimum en large

    var imgTags = $( "img.remove_link_if_js" );

    if ( imgTags.parent().is( "a" ) ) {
      imgTags.unwrap();
    }

    var first_costume_id = $('#invisible_id').attr('value');


    /*le numéro de l'url : 1 = l'index de la 1ère image, il faudrait récupérer l'info dans un champ caché de la page
    pour éviter les mauvaises surprises*/
    $.ajax({
        url: 'costumes/updateindex/1',
        type: 'POST'
    })
    .done(function (data) {
        $('#showcostume_ajax_div').html(data.html);
    })
    .fail(function () {
        $('#showcostume_ajax_div').html("FAIL");
    });

    $('img').click(function () {
        $.ajax({
            url: 'costumes/updateindex/' + this.alt,
            type: 'POST'
        })
        .done(function (data) {
            $('#showcostume_ajax_div').html(data.html);
        })
        .fail(function () {
            $('#showcostume_ajax_div').html("FAIL");
        });
    });

	});
</script>

@endsection
