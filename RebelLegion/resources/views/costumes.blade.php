@extends('app')

@section('content')


	<div id="image-slider-costumes" class="row">
		<div class="small-centered small-12 large-10 columns game_info_desc">
			@while ($iii <= 20)
				<li class="orbit-slide">


					<div class="row">

					@while( (($iii%4) != 0) )

					{{($iii%4)}}
						<div class="small-4 columns">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
							@php
								$iii++;
							@endphp
					@endwhile
					</div>
				</li>


			@endwhile
				<div class="orbit show-for-small-only" role="region" aria-label="Favorite Space Pictures" data-orbit>
					<ul class="orbit-container">


						<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

						<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>














					</ul>



					</div>



				<div class="orbit show-for-medium-only" role="region" aria-label="Favorite Space Pictures" data-orbit>
					<ul class="orbit-container">


						<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

						<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
						<li class="is-active orbit-slide">

							<div class="row">
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
							</div>

						</li>

						<li class="orbit-slide">

							<div class="row">
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
								<div class="medium-2 columns">
									<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
								</div>
							</div>

						</li>
					</ul>



				</div>




		<ul class="pagination text-center" role="navigation" aria-label="Pagination">
			<li class="pagination-previous disabled">Previous</li>
			<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
			<li><a href="#" aria-label="Page 2">2</a></li>
			<li><a href="#" aria-label="Page 3">3</a></li>
			<li><a href="#" aria-label="Page 4">4</a></li>
			<li class="ellipsis"></li>
			<li><a href="#" aria-label="Page 12">12</a></li>
			<li><a href="#" aria-label="Page 13">13</a></li>
			<li class="pagination-next"><a href="#" aria-label="Next page">Next</a></li>
		</ul>

		<div class="orbit show-for-large" role="region" aria-label="Favorite Space Pictures" data-orbit>
			<ul class="orbit-container">


				<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

				<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
				<li class="is-active orbit-slide">

					<div class="row">
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>

					</div>



				</li>

				<li class="orbit-slide">

					<div class="row">
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>
						<div class="column-1of8 column">
							<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">
						</div>

					</div>

				</li>
			</ul>



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
	$(document).ready(function(){
		$('.menu_link_costumes').parent().addClass('active');
		//console.log(Foundation.MediaQuery.atLeast('large'));
		//Pour savoir si on est au minimum en large

	});
</script>

@endsection
