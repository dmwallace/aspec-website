<nav class="nav-primary">
  <div class="mainBar">
    <div class="container">

      <div class="logoContainer">
        <a href="/">
          <img class="logo" src="@php(print wp_get_attachment_image_src($aspec_logo_id, array(64, 64))[0])"
               alt="ASPEC logo">
        </a>
      </div>
      <div class="toolBar">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif

        <i id="signUpButton" class="signUp" data-toggle="modal" data-target="#signUpModal"><span class="badge">1</span></i>
        <form class="searchBar" action="/" method="get">
          <input type="text" name="s" id="search" value="<?php the_search_query(); ?>"/>
          <button><i class="search"></i></button>
        </form>
      </div>
    </div>
  </div>
</nav>


<nav class="nav-primary-mobile">
  <div class="mainBar">
    <button id="mainMenuToggle" class="menuToggle"><i class="menu"></i></button>
    <div class="logoContainer">
      <a href="/">
        <img class="logo" src="@php(print wp_get_attachment_image_src($aspec_logo_id, array(32, 32))[0])"
             alt="ASPEC logo">
      </a>
    </div>
  </div>
  <div id="menuDrawer" class="drawer">
    <form class="searchBar" action="/" method="get">
      <input type="text" name="s" id="search" value="<?php the_search_query(); ?>"/>
      <button><i class="search"></i></button>
    </form>
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signUpModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><strong>From:</strong> Aspec</p>
        <p><strong>Subject:</strong> Join our network</p>
        <p>Would you like to keep up with our post updates? We will let you know from time to time when we post new,
          useful and engaging resources on our website – many of our readers come back for ASPEC technical papers,
          videos and articles as
          we include lots of original content and provide expert knowledge on engineering projects, materials handling
          and asset longevity.</p>
        <p>Join our network and keep up to date with developments. You can unsubscribe at any time.</p>
        <p>- ASPEC</p>

      </div>
      <div class="modal-footer">
        <form id="signup" action="index.html" method="get">
          <input class="form-control" placeholder="Your email address" type="email" name="email" id="email"/>
          <input class="btn btn-primary" type="submit" id="subscribeButton" name="submit" value="Subscribe"/>
        </form>
        <div id="message" class="alert alert-info hidden"></div>

      </div>
    </div>
  </div>
</div>
