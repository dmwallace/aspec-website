<div class="pageHeader parallaxContent"
   @if(!empty($header_image))
     style="background-image: url({{$header_image['url']}})"
  @endif
>
  <div class="colour-overlay"></div>
  <div class="container">
    <div class="headerContent">
      <h1 class="headerTitle">@php(the_field('header_title'))</h1>
    </div>
  </div>
</div>
