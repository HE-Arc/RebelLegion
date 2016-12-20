<!-- off-canvas left menu -->

<div class="rl-ofc off-canvas position-left" id="offCanvas" data-off-canvas="yzidu3-off-canvas" aria-hidden="true">
  <button class="close-button" aria-label="Close menu" type="button" data-close="">
     <span aria-hidden="true">×</span>
   </button>
   <ul class="rl-mobile-ofc vertical menu" data-accordion-menu>
     <li class="topbar-title">
       <a class="menu_link_home" href="{{url('/')}}">
         <i class="fi-home"></i>
         @lang('menus.home')
       </a>
     </li>
     <li>
       <a class="menu_link_costums" href="{{ route('costumes.index', App::getLocale() ) }}">
         <i class="fi-book"></i>
         @lang('menus.costumes')
       </a>
     </li>
     <li>
       <a class="menu_link_members" href="{{ route('users.index', App::getLocale() ) }}">
         <i class="fi-torsos-all"></i>
         @lang('menus.members')
       </a>
     </li>
     <li>
       <a class="menu_link_us" href="{{ route('aboutus', App::getLocale() ) }}">
         <i class="fi-arrows-in"></i>
         @lang('menus.aboutUs')
       </a>
     </li>

     <li>
        <a href="">{{ $lang }}</a>
        <ul class="menu vertical nested">
          @foreach(['fr','de','en'] as $langchoice)
           @if($langchoice != $lang)
           <li>
             <a href="{{ route('index', ['lang' => $langchoice]) }}">
               {{ $langchoice }}
             </a>
           </li>
           @endif
          @endforeach
        </ul>
      </li>

      @if (Auth::guest())
      <li><a class="menu_link_login" href="{{ route('login', ['lang' => App::getLocale() ] ) }}"><i class="fi-torso"></i> <span>{{ trans('auth.login') }}</span></a></li>
      <li><a class="menu_link_register" href="{{ route('register', ['lang' => App::getLocale() ] ) }}">{{ trans('auth.register') }}</a></li>
      @else
      <li role="menu">
        <a >
            {{ Auth::user()->name }}
        </a>
        <ul class="menu vertical nested" >
          <li role="menuitem">
            <a href="{{url('/account/tab1')}}">Mon compte</a>
          </li>
          <li role="menuitem">
            <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                {{ trans('auth.logout') }}
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
             <a class="menu_link_home" href="{{url('/')}}">
               <i class="fi-home"></i>
               @lang('menus.home')
             </a>
           </li>
           <li role="menuitem">
             <a class="menu_link_costums" href="{{ route('costumes.index', App::getLocale() ) }}">
               <i class="fi-book"></i>
               @lang('menus.costumes')
             </a>
           </li>
           <li role="menuitem">
             <a class="menu_link_members" href="{{ route('users.index', App::getLocale() ) }}">
               <i class="fi-torsos-all"></i>
               @lang('menus.members')
             </a>
           </li>
           <li role="menuitem">
             <a class="menu_link_us" href="{{ route('aboutus', App::getLocale() ) }}">
               <i class="fi-arrows-in"></i>
               @lang('menus.aboutUs')
             </a>
           </li>

         </ul>



         <ul class="dropdown menu" data-dropdown-menu="lpdqu6-dropdown-menu" data-click-open="false" role="menubar">
           <li class="is-dropdown-submenu-parent opens-right" role="menuitem">
             <a>
               {{ $lang }}
             </a>
             <ul class="submenu menu vertical is-dropdown-submenu first-sub" >
               @foreach(['fr','de','en'] as $langchoice)
                @if($langchoice != $lang)
                <li>
                  @if( isset($user) )
                    <a href="{{ route( Route::currentRouteName(), ['lang' => $langchoice, 'user' => $user->id]) }}">
                  @elseif( isset($costume) )
                    <a href="{{ route( Route::currentRouteName(), ['lang' => $langchoice, 'costume' => $costume->id]) }}">
                  @else
                   <a href="{{ route( Route::currentRouteName(), ['lang' => $langchoice]) }}">
                  @endif
                     {{ $langchoice }}
                   </a>
                </li>
                @endif
               @endforeach

             </ul>
           </li>
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

         </div>
       </div>
     </div>

 <!-- content goes in this container -->

 <div class="off-canvas-content" data-off-canvas-content="">
