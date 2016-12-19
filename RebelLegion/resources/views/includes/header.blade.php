<!-- off-canvas left menu -->
<div class="rl-ofc off-canvas position-left" id="offCanvas" data-off-canvas="yzidu3-off-canvas" aria-hidden="true">
  <button class="close-button" aria-label="Close menu" type="button" data-close="">
     <span aria-hidden="true">×</span>
   </button>
   <ul class="rl-mobile-ofc vertical menu">
     <li class="topbar-title">
       <a id="menu_link_home" href="{{url('/')}}">
         <i class="fi-home"></i>
         @lang('menus.home')
       </a>
     </li>
     <li role="menuitem">
       <a id="menu_link_costums" href="{{ route('costumes.index', App::getLocale() ) }}">
         <i class="fi-book"></i>
         @lang('menus.costumes')
       </a>
     </li>
     <li role="menuitem">
       <a id="menu_link_users" href="{{ route('users.index', App::getLocale() ) }}">
         <i class="fi-torsos-all"></i>
         @lang('menus.members')
       </a>
     </li>
     <li role="menuitem">
       <a id="menu_link_us" href="{{ route('aboutus', App::getLocale() ) }}">
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
             <a id="menu_link_home" href="{{url('/')}}">
               <i class="fi-home"></i>
               @lang('menus.home')
             </a>
           </li>
           <li role="menuitem">
             <a id="menu_link_costums" href="{{ route('costumes.index', App::getLocale() ) }}">
               <i class="fi-book"></i>
               @lang('menus.costumes')
             </a>
           </li>
           <li role="menuitem">
             <a id="menu_link_members" href="{{ route('users.index', App::getLocale() ) }}">
               <i class="fi-torsos-all"></i>
               @lang('menus.members')
             </a>
           </li>
           <li role="menuitem">
             <a id="menu_link_us" href="{{ route('aboutus', App::getLocale() ) }}">
               <i class="fi-arrows-in"></i>
               @lang('menus.aboutUs')
             </a>
           </li>
         </ul>


         <ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">
           <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
             <a href="#">
               {{ trans('menus.chooseLanguage') }}
             </a>
             <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
               <li>
                @if( isset($user) )
                  <a href="{{ route( Route::currentRouteName(), ['lang' => 'fr', 'user' => $user->id]) }}">
                @elseif( isset($costume) )
                  <a href="{{ route( Route::currentRouteName(), ['lang' => 'fr', 'costume' => $costume->id]) }}">
                @else
                 <a href="{{ route( Route::currentRouteName(), ['lang' => 'fr']) }}">
                @endif
                   {{ trans('menus.fr') }}
                 </a>
               </li>
               <li>
                 @if( isset($user) )
                   <a href="{{ route( Route::currentRouteName(), ['lang' => 'de', 'user' => $user->id]) }}">
                     @elseif( isset($costume) )
                       <a href="{{ route( Route::currentRouteName(), ['lang' => 'de', 'costume' => $costume->id]) }}">
                 @else
                  <a href="{{ route( Route::currentRouteName(), ['lang' => 'de']) }}">
                 @endif
                   {{ trans('menus.de') }}
                 </a>
               </li>
               <li>
                 @if( isset($user) )
                   <a href="{{ route( Route::currentRouteName(), ['lang' => 'en', 'user' => $user->id]) }}">
                     @elseif( isset($costume) )
                       <a href="{{ route( Route::currentRouteName(), ['lang' => 'en', 'costume' => $costume->id]) }}">
                 @else
                  <a href="{{ route( Route::currentRouteName(), ['lang' => 'en']) }}">
                 @endif
                   {{ trans('menus.en') }}
                 </a>
               </li>

             </ul>
             @if (Auth::guest())
             <li><a class="menu_link_login" href="{{ route('login', ['lang' => App::getLocale() ] ) }}"><i class="fi-torso"></i> <span>{{ trans('auth.login') }}</span></a></li>
             <li><a class="menu_link_register" href="{{ route('register', ['lang' => App::getLocale() ] ) }}">{{ trans('auth.register') }}</a></li>
             @else
             <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
               <a >
                 {{ Auth::user()->userName }}
               </a>
               <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
                 <li>
                   <a href="{{ route('users.show', ['lang' => App::getLocale(), 'user' => Auth::user()->id]) }}">Mon compte</a>
                 </li>
                 <li>
                   <a href="{{ route('logout', ['lang' => App::getLocale()]) }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                     {{ trans('auth.logout') }}
                   </a>
                 </li>
                 <form id="logout-form" action="{{ route('logout', ['lang' => App::getLocale()] ) }}" method="POST" style="display: none;">
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
             <a href="{{ route('index', ['lang' => 'fr']) }}">
               {{ trans('menus.fr') }}
             </a>
             <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
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
               <a >
                   {{ Auth::user()->name }}
               </a>
               <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
                 <li>
                   <a href="{{url('/account/tab1')}}">Mon compte</a>
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
