<div id="bot">
  <div class="row">
    <div class="medium-6 large-4 columns">
      <h6 class="bot_title">Rebel Legion Related</h6>
      <ul class="bot_menu">
        <li>
          <a href="http://www.rebellegion.com">Rebel Legion World</a>
        </li>
        <li>
          <a href="http://www.501st.com">501st Legion World</a>
        </li>
      </ul>
    </div>
    <div class="medium-6 large-4 columns">
      <h6 class="bot_title">Contact Swiss Outpost</h6>
      <ul class="bot_menu">
        <li><a href="{{ route('contact', App::getLocale() ) }}">WebMaster</a></li>
        <li><a href="{{ route('contact', App::getLocale() ) }}">Commanding Officier</a></li>
        <li><a href="{{ route('contact', App::getLocale() ) }}">Executive Officier</a></li>
      </ul>
    </div>
    
  </div>
  <div class="row small-centered small-12 medium-7 large-4 anim-star-wars" >
    <div class=" columns anim-star-wars-child">
      <p class="text-center">
          The Rebel Legion is a worldwide Star Wars costuming organization comprised of and operated by Star Wars fans.
          While it is not sponsored by Lucasfilm LLC, Lucasfilm recognizes the Rebel Legion as a premier volunteer Rebel costuming group.
          Star Wars, its characters, costumes, and all associated items are the intellectual property of Lucasfilm. © 2015 Lucasfilm LLC and ™ All rights reserved. Used under authorization.
      </p>
    </div>
  </div>
</div>
<div class="js-off-canvas-exit"></div>


<script src={{asset('js/foundation.js')}}></script>
<script>
$(document).foundation();

function sticky_footer(){
var footer = $("#bot");
var pos = footer.position();
var height = $(window).height();
height = height - pos.top;
height = height - footer.height();

/* 40 == padding top + bottom du div avec id="bot" */
if (height-40 > 0) {
    footer.css({
        'margin-top': height-40 + 'px'
    });
}
}
$(window).bind("load", sticky_footer);
$(window).bind("resize", sticky_footer);

</script>
