<div class="column large-12" data-sticky-container>
	<img src="//placehold.it/1000x400" class="thumbnail" alt="" width="100%" height="400px" />
	<div class="top-bar sticky" data-sticky data-margin-top="1" style="width:100%">
		<div class="top-bar-left">
			<ul class="dropdown menu" data-dropdown-menu>
			  <li class="menu-text">Site Title</li>
			  <li>
				<a href="#">One</a>
				<ul class="menu vertical">
				  <li><a href="#">One</a></li>
				  <li><a href="#">Two</a></li>
				  <li><a href="#">Three</a></li>
				</ul>
			  </li>
			  <li><a href="#">Two</a></li>
			  <li><a href="#">Three</a></li>
			</ul>
		</div>
		<div class="top-bar-right">
			<ul class="menu">
			  <li><input type="search" placeholder="Search"></li>
			  <li><button type="button" class="button">Search</button></li>
			  <li><a href="{{ url('/login') }}">Login</a></li>
			</ul>
		</div>
	</div>
	
	@yield('content')
	
</div>