<div class="about_post_content">
  @php(the_content())
</div>
  @if(have_rows('about_section'))
    <div class="about_sections">
      @while(have_rows('about_section'))
        @php(the_row())
          @php
            $backgroundImage = wp_get_attachment_image_src(
              get_sub_field('background_image')['id'],
              array(500, 500)
            );
            $url = $backgroundImage[0];
          @endphp
          <div class="section_container">
            <div class="section_container_inner" style="background-image: url(@php(print $url))">
              <div class="section" id="@php(print str_replace(' ', '_', strtolower(get_sub_field('heading'))))">
                <div class="content_box">
                  <div class="inner">
                    <div class="heading">
                      <h2>@php(the_sub_field('heading'))</h2>
                    </div>
                    <div class="content_container">
                      <div class="content">@php(the_sub_field('content'))</div>
                      <div class="download_link_container">
                        <a class="download_link" href="@php(the_sub_field('brochure'))"><i class="icon"></i><span>Download Brochure</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endwhile
    </div>
    <div class="about_sections_mobile">
      @while(have_rows('about_section'))
        @php(the_row())
          @php
            $backgroundImage = wp_get_attachment_image_src(
              get_sub_field('background_image')['id'],
              array(320, 240)
            );
            $url = $backgroundImage[0];
          @endphp

          <div class="section" id="@php(print str_replace(' ', '_', strtolower(get_sub_field('heading'))))">
            <div class="heading" style="background-image: url(@php(print $url))">
              <h2>@php(the_sub_field('heading'))</h2>
            </div>
            <div class="content">@php(the_sub_field('content'))</div>
            <a class="download_link" href="@php(the_sub_field('brochure'))"><i
                class="icon"></i><span>Download Brochure</span></a>
          </div>
          @endwhile
    </div>
  @endif


  {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
