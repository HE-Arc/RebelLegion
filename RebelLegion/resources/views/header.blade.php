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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />

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
  								<a id="menu_link_home" href="/">
                    <i class="fi-home"></i>
                    @lang('menus.home')
                  </a>
							  </li>
							  <li>
  								<a id="menu_link_costums" href="">
                    <i class="fi-book"></i>
                    @lang('menus.costumes')
                  </a>
							  </li>
							  <li>
								  <a id="menu_link_members" href="">
                    <i class="fi-torsos-all"></i>
                    @lang('menus.members')
                  </a>
							  </li>
							  <li>
								  <a id="menu_link_us" href="">
                    <i class="fi-arrows-in"></i>
                    @lang('menus.aboutUs')
                  </a>
							  </li>
							</ul>
						</div>


						<div class="top-bar-right">
							<ul class="dropdown menu" data-dropdown-menu>
                @foreach (['en', 'fr', 'de'] as $ln)
                  <li>
                    <a href="{{ route('index', ['lang' => $ln]) }}">
                      {{ trans('menus.' . $ln) }}
                    </a>
                  </li>
                @endforeach

                @if (Auth::guest())
                    <li>
                      <a id="menu_link_login" href="{{ url('/login') }}">
                        <i class="fi-torso"></i>
                        {{ trans('menus.login') }}
                      </a>
                    </li>
                    <li>
                      <a id="menu_link_register" href="{{ url('/register') }}">
                        @lang('menus.register')
                      </a>
                    </li>
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
                              @lang('menus.logout')
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
      <div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
				<!-- off-canvas title bar for 'small' screen -->

<!--	position: relative;
	top: 0;
	width: 100%;
	z-index: 9010;
	height: 18px;
	line-height: 18px;
	background: rgba(50,50,50,0.8);
	box-shadow: 0 7px 7px rgba(50,50,50,0.8);
	color: gray;
	padding: 0 5px;
	font-size: 12px;
	font-weight: bold;
	text-transform: uppercase;">
	projet laravel / he-arc / dev version</div>-->
<!-- off-canvas left menu -->
<div class="rl-ofc off-canvas position-left" id="offCanvas" data-off-canvas="yzidu3-off-canvas" aria-hidden="true">
	<button class="close-button" aria-label="Close menu" type="button" data-close="">
		<span aria-hidden="true">×</span>
	</button>
	<ul class="rl-mobile-ofc vertical menu">
    <li class="topbar-title">
      <a class="menu_link_home" href="{{url('/')}}">Home</a>
    </li>
    <li role="menuitem">
      <a href="">Costumes</a>
    </li>
    <li role="menuitem">
      <a href="">Membres</a>
    </li>
    <li role="menuitem">
      <a href="">A propos de nous</a>
    </li>
	</ul>
</div>
<!-- "wider" top-bar menu for 'large' and up -->
<div class="rl-header">
  <a href="{{url('/')}}">
  <div class="rl-header-content show-for-medium" id="rl-topbar-anchor" style="background-image: url('{{asset("img/bg-header.png")}}');">
    <div class="row">
      <div class="medium-12 columns">
        <div class="rl-header-RL">
          <img src="{{asset("img/baniereSWI.png")}}">
        </div>
        <div class="rl-header-SO">
          <img src="{{asset("img/baniereSO.png")}}">
        </div>
      </div>
    </div>
		<!--<div style="
			position: absolute;
			top: 0;
			width: 100%;
			z-index: 9010;
			height: 18px;
			line-height: 18px;
			background: rgba(50,50,50,0.8);
			box-shadow: 0 4px 7px rgba(50,50,50,0.8);
			color: gray;
			padding: 0 5px;
			font-size: 12px;
			font-weight: bold;
			text-transform: uppercase;">
			projet laravel / he-arc / dev version
    </div>-->
	</div>
  </a>
	<div class="rl-header-navbar show-for-large sticky-container" data-sticky-container="" style="height: 45px;">
		<div class="rl-topbar-container sticky" data-sticky="mxnz3e-sticky" data-top-anchor="rl-topbar-anchor:bottom" data-margin-top="0" data-resize="380f41-sticky" style="max-width: 1054.4px;" data-events="resize">
			<nav class="rl-topbar">
				<ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">
					<li class="topbar-title">
						<a class="menu_link_home" href="{{url('/')}}">Home</a>
					</li>
          <li role="menuitem">
            <a href="">Costumes</a>
          </li>
          <li role="menuitem">
            <a href="">Membres</a>
          </li>
          <li role="menuitem">
            <a href="">A propos de nous</a>
          </li>
				</ul>

        <ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">


          <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
            <a tabindex="0">
                fr
            </a>
            <ul class="submenu menu vertical is-dropdown-submenu first-sub no-min-width" >
              <li>
                <a href="">
                  de
                </a>
              </li>
              <li>
                <a href="">
                  en
                </a>
              </li>

            </ul>
          @if (Auth::guest())
              <li><a class="menu_link_login" href="{{ url('/login') }}"><i class="fi-torso"></i> <span>Login</span></a></li>
              <li><a class="menu_link_register" href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
                <a tabindex="0">
                    {{ Auth::user()->name }}
                </a>
                <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
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
                </ul>
              </li>
          @endif
        </ul>
			</nav>
		</div>
	</div>
  <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="large" style="display: none;">
  	<div class="title-bar-left">
  		<button class="menu-icon" type="button" data-open="offCanvas" aria-expanded="false" aria-controls="offCanvas"></button>
  		<span class="title-bar-title" style="text-transform: uppercase;">Rebel Legion — Swiss Outpost</span>
  	</div>
    <div class="title-bar-right">
      <ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">


        <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
          <a tabindex="0">
              fr
          </a>
          <ul class="submenu menu vertical is-dropdown-submenu first-sub no-min-width" >
            <li>
              <a href="">
                de
              </a>
            </li>
            <li>
              <a href="">
                en
              </a>
            </li>

          </ul>
        @if (Auth::guest())
            <li><a class="menu_link_login" href="{{ url('/login') }}"><i class="fi-torso"></i> <span>Login</span></a></li>
            <li><a class="menu_link_register" href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
              <a tabindex="0">
                  {{ Auth::user()->name }}
              </a>
              <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
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
</div>				<!-- original content goes in this container -->

<div class="off-canvas-content" data-off-canvas-content="">
