<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Foundation Starter Template</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
    		<link rel="stylesheet" href="css/foundation-icons.css" />
    		<link rel="stylesheet" href="css/app.css" />
    		<link rel="stylesheet" href="css/custom.css" />

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    		<script src="js/jquery.js"></script>

    </head>
    <body>

		<div id="page_header_id">
			<img src="{{asset("img/baniere.png")}}" alt="baniere" width="100%" />

			<div data-sticky-container>
				<div class="top-bar sticky" data-sticky data-margin-top="0.5" style="width:100%">
					<div class="top-bar-title">
						<span data-responsive-toggle="responsive-menu" data-hide-for="medium">
							<button class="menu-icon dark" type="button" data-toggle></button>
						</span>
					</div>
					<div id="responsive-menu">

						<div class="top-bar-left">
							<ul class="dropdown menu" data-dropdown-menu>
							  <li>
								<a id="menu_link_home" href="/"><i class="fi-home"></i> <span>Accueil</span></a>
							  </li>
							  <li>
								<a id="menu_link_costums" href=""><i class="fi-book"></i> <span>Costumes</span></a>
							  </li>
							  <li>
								<a id="menu_link_members" href=""><i class="fi-torsos-all"></i> <span>Membres</span></a>
							  </li>
							  <li>
								<a id="menu_link_us" href=""><i class="fi-arrows-in"></i> <span>A propos de nous</span></a>
							  </li>
							</ul>
						</div>


						<div class="top-bar-right">
							<ul class="dropdown menu" data-dropdown-menu>
							  <li class="language active">
								<a href="">fr</a>
							  </li>
							  <li class="language">
								<a href="">de</a>
							  </li>
							  <li class="language">
								<a href="">en</a>
							  </li>
                @if (Auth::guest())
                    <li><a id="menu_link_login" href="{{ url('/login') }}"><i class="fi-torso"></i> <span>Login</span></a></li>
                    <li><a id="menu_link_register" href="{{ url('/register') }}">Register</a></li>
                @else
                    <li>
                      <a href="#">
                          {{ Auth::user()->name }}
                      </a>
                      <ul class="menu">
                        <li>
                          <a href="#">Mon compte</a>
                        </li>
                        <li>
                          <a href="{{ url('/logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>
                        </li>

                          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>

                        <!-- ... -->
                      </ul>
                    </li>
                @endif
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
