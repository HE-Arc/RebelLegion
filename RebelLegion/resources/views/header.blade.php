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

    		<link rel="stylesheet" href="/css/foundation-icons.css" />
    		<link rel="stylesheet" href="/css/app.css" />
    		<link rel="stylesheet" href="/css/custom.css" />

        <!-- les 2 css ci-dessous sont les même, (on utilise le 1er pour développer en local)-->
        <link rel="stylesheet" href="/css/motion-ui.css" />
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.2/motion-ui.min.css" />
        -->

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    		<script src="/js/jquery.js"></script>

    </head>
    <body>


        <div class="off-canvas-wrapper">
			     <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">
				       <!-- off-canvas title bar for 'small' screen -->


               <!--
               <div class="top-comment">
                  projet laravel / he-arc / dev version
               </div>
               -->


               <!-- off-canvas left menu -->
               <div class="rl-ofc off-canvas position-left" id="offCanvas" data-off-canvas="yzidu3-off-canvas" aria-hidden="true">
                  <button class="close-button" aria-label="Close menu" type="button" data-close="">
                		<span aria-hidden="true">×</span>
                	</button>
                	<ul class="rl-mobile-ofc vertical menu">
                    <li class="topbar-title">
                      <a id="menu_link_home" href="/">
      <i class="fi-home"></i>
      @lang('menus.home')
    </a>
                    </li>
                    <li role="menuitem">
                      <a id="menu_link_costums" href="">
              <i class="fi-book"></i>
              @lang('menus.costumes')
            </a>
                    </li>
                    <li role="menuitem">
                      <a id="menu_link_members" href="">
              <i class="fi-torsos-all"></i>
              @lang('menus.members')
            </a>
                    </li>
                    <li role="menuitem">
                      <a id="menu_link_us" href="">
              <i class="fi-arrows-in"></i>
              @lang('menus.aboutUs')
            </a>
                    </li>
                	</ul>
                </div>

                <!-- "wider" top-bar menu for 'large' and up -->
                <div class="rl-header">
                  <a href="{{url('/')}}">
                  <div class="rl-header-content show-for-medium" id="rl-topbar-anchor">
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
                		<!--<div class="top-comment">
                			projet laravel / he-arc / dev version
                    </div>-->
                	</div>
                  </a>
                	<div class="show-for-large sticky-container" data-sticky-container="">
                		<div class="rl-topbar-container sticky" data-sticky data-top-anchor="rl-topbar-anchor:bottom" data-margin-top="0" data-resize="380f41-sticky" data-events="resize">
                			<nav class="rl-topbar">
                				<ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">
                					<li class="topbar-title">
                						<a id="menu_link_home" href="/">
      <i class="fi-home"></i>
      @lang('menus.home')
    </a>
                					</li>
                          <li role="menuitem">
                            <a id="menu_link_costums" href="">
              <i class="fi-book"></i>
              @lang('menus.costumes')
            </a>
                          </li>
                          <li role="menuitem">
                            <a id="menu_link_members" href="">
              <i class="fi-torsos-all"></i>
              @lang('menus.members')
            </a>
                          </li>
                          <li role="menuitem">
                            <a id="menu_link_us" href="">
              <i class="fi-arrows-in"></i>
              @lang('menus.aboutUs')
            </a>
                          </li>
                				</ul>


                        <ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">




                          <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
                            <a tabindex="0" href="{{ route('index', ['lang' => 'fr']) }}">
                {{ trans('menus.fr') }}
            </a>
            <ul class="submenu menu vertical is-dropdown-submenu first-sub no-min-width" >
              <li>
                <a href="{{ route('index', ['lang' => 'de']) }}">
                  {{ trans('menus.de') }}
                </a>
              </li>
              <li>
                <a href="{{ route('index', ['lang' => 'en']) }}">
                  {{ trans('menus.en') }}
                </a>
              </li>

                            </ul>
                          @if (Auth::guest())
              <li><a class="menu_link_login" href="{{ url('/login') }}"><i class="fi-torso"></i> <span>{{ trans('menus.login') }}</span></a></li>
              <li><a class="menu_link_register" href="{{ url('/register') }}">{{ trans('menus.register') }}</a></li>
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
                        {{ trans('menus.logout') }}
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
                  <div class="title-bar" data-responsive-toggle="widemenu" data-hide-for="large">
                  	<div class="title-bar-left">
                  		<button class="menu-icon" type="button" data-open="offCanvas" aria-expanded="false" aria-controls="offCanvas"></button>
                  		<span class="title-bar-title">Rebel Legion — Swiss Outpost</span>
                  	</div>
                    <div class="title-bar-right">
                      <ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">




                        <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
                          <a tabindex="0" href="{{ route('index', ['lang' => 'fr']) }}">
                {{ trans('menus.fr') }}
            </a>
            <ul class="submenu menu vertical is-dropdown-submenu first-sub no-min-width" >
              <li>
                <a href="{{ route('index', ['lang' => 'de']) }}">
                  {{ trans('menus.de') }}
                </a>
              </li>
              <li>
                <a href="{{ route('index', ['lang' => 'en']) }}">
                  {{ trans('menus.en') }}
                </a>
              </li>

                          </ul>
                        @if (Auth::guest())
              <li><a class="menu_link_login" href="{{ url('/login') }}"><i class="fi-torso"></i> <span>{{ trans('menus.login') }}</span></a></li>
              <li><a class="menu_link_register" href="{{ url('/register') }}">{{ trans('menus.register') }}</a></li>
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
                        {{ trans('menus.logout') }}
                    </a>
                  </li>


                                  <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>

                              </ul>
                            </li>
                        @endif
                      </ul>
                    </div>
                  </div>
                </div>

                <!-- content goes in this container -->

                <div class="off-canvas-content" data-off-canvas-content="">
