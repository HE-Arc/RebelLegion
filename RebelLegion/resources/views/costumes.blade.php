@extends('app')

@section('content')

	<div class="first-element show-for-small-only row">
		<div class="small-centered small-12 large-10 columns game_info_desc">

			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="autoPlay: false">
				<ul class="orbit-container">

					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

						@while ($i <= 20)
							@if($i == 0)
								<li class="orbit-slide is-active">
							@else
								<li class="orbit-slide">
							@endif

							<div class="row">

							@for($j = 0; ($j < 3) and ($i <= 20); $j++)

								<div class="small-4 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
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

						@while ($i <= 20)
							@if($i == 0)
								<li class="orbit-slide is-active">
							@else
								<li class="orbit-slide">
							@endif

							<div class="row">

							@for($j = 0; ($j < 6) and ($i <= 20); $j++)

								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
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

						@while ($i <= 20)
							@if($i == 0)
								<li class="orbit-slide is-active">
							@else
								<li class="orbit-slide">
							@endif

							<div class="row">

							@for($j = 0; ($j < 8) and ($i <= 20); $j++)
								<div class="column-1of8 column">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
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






	<div class="row">
		<div class="small-12 medium-12 large-10 large-offset-1 columns game_info_desc">

			<div class="callout-header-line">
				<div class="callout-header">
					<span></span>Détails du costume
				</div>
			</div>
				<div class="callout">

					<div class="media-object stack-for-small">
						<div class="media-object-section">
							<img src= "http://placeimg.com/200/200/people">
						</div>
						<div class="media-object-section">
							<h4>Dreams feel real while we're in them.</h4>
							<blockquote>
								Déjà plus de vingt ans que l'Europe est en conflit. Marlgé les difficultés encontrées par la régence, la France enchaîne les succès sur terre comme en mer.<br>
								Tandis que l'Ancien Monde est en guerre, colons, explorateurs et commerçants parcourent le globe en quête de richesses et de gloire.
								<cite>Historien anglais, 1'644</cite>
							</blockquote>
							<p>I'm going to improvise. Listen, there's something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
						</div>
						<div class="media-object-section">
							<img src= "http://placeimg.com/200/400/people">
						</div>
					</div>
				</div>
			</div>
		</div>



</div>

<script>
	$(document).ready(function() {
		$('.menu_link_costumes').parent().addClass('active');

		//console.log(Foundation.MediaQuery.atLeast('large'));


		// Ci dessous, solution temporaire car la hauteur du slider "orbit"
		// n'est pas recalculé dans la version 6.2.4 de Foundation
		// Cela sera probablement corrigé dans la version 6.3
		// En retestant sans la fonction ci-dessous, ça marche. Je
		// la commente au cas ou
		/*$(window).on('changed.zf.mediaquery', function () {
				setTimeout("location.reload(true);",50);
				//car avec un simple reload ça ne fonctionne pas
		});*/

	});
</script>




@endsection
