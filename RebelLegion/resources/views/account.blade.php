@extends('layouts.app')

@section('content')
<script>
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          var img;
          if(input.name == "image_upload"){
            img = $('#image_upload_display_id_1');
          }
          else{
            img = $('#image_upload_display_id_2');
          }
          img.attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
  }
</script>

  <div id="tabs_id" class="row collapse">
    <div class="callout-header-line">
      <div class="callout-header">
        <span></span>Mon compte
      </div>
    </div>
        <div class="medium-3 columns">
          <ul class="tabs vertical" id="example-vert-tabs" data-tabs>
            <li class="tabs-title @if($tab_id == 1) is-active @endif"><a href="#panel1v" aria-selected="true">Mes costumes</a></li>
            <li class="tabs-title @if($tab_id == 2) is-active @endif"><a href="#panel2v">Ajouter un costume</a></li>
            <li class="tabs-title @if($tab_id == 3) is-active @endif"><a href="#panel3v">Modifier mot de passe</a></li>
          </ul>
        </div>
        <div class="medium-9 columns">
          <div class="tabs-content vertical" data-tabs-content="example-vert-tabs">


            <div class="tabs-panel @if($tab_id == 1) is-active @endif" id="panel1v">

              <div class="show-for-small-only row">
            		<div class="small-centered small-12 large-10 columns game_info_desc">

            			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="autoPlay: false">
            				<ul class="orbit-container">

            					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>

            					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

                        @php
                          $i=0;
                        @endphp
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


            <div class="tabs-panel @if($tab_id == 2) is-active @endif" id="panel2v">

              <div class="callout form">
                <h4>Ajouter un costume</h4>

                  <form class="log-in-form" role="form" method="POST" files="true" action="{{ url('/apply/upload') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <label>Titre *
          		        <input id="title_imageupload" type="text" name="title" placeholder="DarkVador" value="{{ old('title') }}" required="required" aria-describedby="exampleHelpText">

          						@if ($errors->has('title'))
                        <label class="is-invalid-label">
                          {{ $errors->first('title') }}
                        </label>
          						@endif
          		      </label>

                    <label>Description *
          		        <textarea rows="4" id="description_imageupload" name="description" placeholder="Beautiful costum." value="{{ old('description') }}" required="required" aria-describedby="exampleHelpText" />

                      </textarea>
          						@if ($errors->has('description'))
                        <label class="is-invalid-label">
                          {{ $errors->first('description') }}
                        </label>
          						@endif
          		      </label>

                    <div class="row">
                      <div class="columns small-12 medium-6">
                        <label>Image principale *
                          <input name="image_upload" type='file' onchange="readURL(this);"></input>

                          <img id="image_upload_display_id_1" class="thumbnail" src="#" alt="your image" />

                          @if ($errors->has('image_upload'))
                            <label class="is-invalid-label">
                              {{ $errors->first('image_upload') }}
                            </label>
                          @endif
                        </label>
                      </div>

                      <div class="columns small-12 medium-6">
                        <label>Image secondaire
                          <input name="image_upload_secondary" type='file' onchange="readURL(this);"></input>

                          <img id="image_upload_display_id_2" class="thumbnail" src="#" alt="your image" />

                          @if ($errors->has('image_upload_secondary'))
                            <label class="is-invalid-label">
                              {{ $errors->first('image_upload_secondary') }}
                            </label>
                          @endif
                        </label>
                      </div>

                      <div class="columns">
                        <p class="help-text" id="helpText">Les champs indiqués par une * sont obligatoires</p>

                      </div>

                    </div>


                    <button type="submit" class="button expanded">
                        Ajouter le costume
                    </button>

                    @if(Session::has('error'))
                     <label class="is-invalid-label">{{ Session::get('error') }}</label>
                    @endif

                    @if(Session::has('success'))

                      <label class="is-valid-label">{!! Session::get('success') !!}</label>

                    @endif
                  </form>
                </div>
            </div>


            <div class="tabs-panel  @if($tab_id == 3) is-active @endif" id="panel3v">
              <p>En cours de développement @lang('menus.members')</p>
            </div>


          </div>
        </div>

  </div>

</div>

<script>
	$(document).ready(function(){
		$('.menu_link_account').parent().addClass('active');
    $(".tabs-title > a").on("click",
      function(){

        var href = $(this).attr("href");
        var tab_nb = 1;
        if(href == "#panel2v"){
          tab_nb = 2;
        }
        else if(href == "#panel3v"){
          tab_nb = 3;
        }

        window.history.replaceState('', 'account-tab'+tab_nb, '/'+'{{$lang}}'+'/account/tab'+tab_nb);

      });


		//console.log(Foundation.MediaQuery.atLeast('large'));
		//Pour savoir si on est au minimum en large

	});
</script>

@endsection
