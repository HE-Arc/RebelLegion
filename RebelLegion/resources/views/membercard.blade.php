@extends('layouts.app')

@section('content')


<div class="row">
	<div class="small-12 medium-12 large-10 large-offset-1 columns game_info_desc">


		<div class="callout-header-line">
			<div class="callout-header">
				<span></span>Détails du membre
			</div>
		</div>
			<div class="callout">

				<div class="media-object stack-for-small">
					<div class="media-object-section">
						<img class="thumbnail" src="{{asset("img/joconde.jpg")}}" alt="Photo of Uranus.">

						<p>Date d'inscription : </p>
						<P>Id : {{$id}}</p>
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
				</div>
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
