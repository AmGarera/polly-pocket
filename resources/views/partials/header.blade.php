<header class="banner">
  <div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-success">
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
      </div>
      <div class="list-inline d-xs-none">
        <i class="mx-1 fa fa-facebook-square fa-2x"></i>
        <i class="mx-1 fa fa-twitter-square fa-2x"></i>
        <i class="mx-1 fa fa-youtube-square fa-2x"></i>
        <i class="mx-1 fa fa-google-plus-square fa-2x"></i>
      </div>
    </nav>
  </div>
</header>
