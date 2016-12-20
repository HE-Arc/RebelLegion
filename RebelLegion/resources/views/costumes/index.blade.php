@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="large-1 large-centered medium-1 medium-centered small-1 small-centered columns">
      <a href="{{ route('costumes.create', [ 'lang' => App::getLocale()] ) }}" class="button">@lang('forms_buttons_common.create')</a>
    </div>
  </div>

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
                @endphp
								<div class="small-4 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="{{$ido}}">
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
                @endphp
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="{{$ido}}">
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
              @endphp
								<div class="column-1of8 column">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="{{$ido}}">

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


  <div id="showcostume_ajax_div">
    @include('costumes.showajax', ['lang' => App::getLocale(), 'costume' => $costumes->get('0')])
  </div>

</div>

<script>

  $(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
  });

	$(document).ready(function(){

		$('.menu_link_members').parent().addClass('active');
		//console.log(Foundation.MediaQuery.atLeast('large'));
		//Pour savoir si on est au minimum en large

    $(function () {
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

	});
</script>

@endsection
