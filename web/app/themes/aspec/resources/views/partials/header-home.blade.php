<div class="slideshow-header">
  <div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">


      @foreach($header_banner_images as $url)
        @php($classes = 'carousel-item')

          @if($loop->first)
            @php($classes .= ' active')
              @endif
              <div class="parallaxContent {{$classes}}" style="background-image: url({{$url}})">

              </div>
              @endforeach
    </div>

  </div>
  <div class="colour-overlay"></div>
  <div class="content-overlay">
    <div class="container heading">
      <div class="title">
        <h1>Engineering for ports, mines & infrastructure</h1>
      </div>
    </div>
    <div class="container about">
      <div class="about-links">
        @foreach($header_links as $link)
          <div>
            <a href="/about#{{$link['anchor']}}">
              <div>
                <div class="thumbnail-container">
                  <div class="thumbnail" style="background-image: url({{$link['thumbnail_url']}})"></div>
                </div>
                <span class="info">
                    <h2>{{$link['heading']}}</h2>
                    <span>{{$link['subheading']}}</span>
                  </span>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
