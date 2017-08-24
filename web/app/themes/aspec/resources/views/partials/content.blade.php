<article @php(post_class())>
  @include('partials/entry-meta')
  <a href="{{ get_permalink() }}">
    <div class="excerptThumbnail"
         style="background-image: url({{ get_the_post_thumbnail_url(null, array(400, 225, true))}})"></div>
    <header>
      <h2 class="entry-title">{{ get_the_title() }}</h2>
    </header>
    <div class="entry-summary">
      @php(the_excerpt())
    </div>
  </a>
</article>
