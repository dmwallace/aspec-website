<header class="banner">
  @if (is_home())
    @include('partials/header-home')
  @else
    @include('partials/header-default')
  @endif

</header>
