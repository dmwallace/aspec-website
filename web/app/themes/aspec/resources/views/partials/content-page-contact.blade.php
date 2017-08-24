<div class="contactInfo">
  <div class="leftCol">
    <img class="logo" src="@php(print wp_get_attachment_image_src($aspec_logo_id, array(200, 200))[0])"
         alt="ASPEC logo">
    <div class="social">
      <div class="icons">
        <a href="{{get_field('facebook_url', 'option')}}"><i class="facebook"></i></a>
        <a href="{{get_field('linkedin_url', 'option')}}"><i class="linkedin"></i></a>

      </div>
    </div>

  </div>
  <div class="content">
    <div class="postal">
      <div class="icon"><i></i></div>
      <div class="info">
        <h3>Postal Address</h3>
        <p>{{get_field('postal_address')}}</p>
      </div>
    </div>
    <div class="phone">
      <div class="icon"><i></i></div>
      <div class="info">
        <h3>Call Us</h3>
        <p><a href="tel:{{get_field('phone_contact')}}">{{get_field('phone_contact')}}</a></p>
      </div>
    </div>
    <div class="email">
      <div class="icon"><i></i></div>
      <div class="info">
        <h3>Email Us</h3>
        <p><a href="mailto:{{get_field('email_contact')}}">{{get_field('email_contact')}}</a></p>
      </div>
    </div>
  </div>
</div>

<div class="officeLocations">
  <h2 class="sectionHeading">Our Office Locations</h2>
<div class="offices">
  <?php
  foreach (get_field('offices') as $office) {
    $states[$office["state"]][] = $office;
  }
  ?>
  @foreach($states as $key => $state)
    <div class="state count{{count($state)}}">
      <h2>{{$key}}</h2>
      <div class="officeList">
        @foreach($state as $office)
          <div class="office">
            <ul>
              <li><a class="address">{{$office["address_line_1"]}} {{$office["address_line_2"]}}</a></li>
              <li>Ph: <a href="tel:{{$office["phone_number"]}}">{{$office["phone_number"]}}</a></li>
            </ul>
          </div>
        @endforeach
      </div>
    </div>
  @endforeach
</div>

<div class="row">
  <div id="officeLocationsMap" data-mapData="{{json_encode($map_data)}}"></div>
</div>
</div>

<div class="contactForm">
  <h2 class="sectionHeading">Message Us</h2>
  <div class="formContainer">
    {{wpforms_display(146, false, false)}}
    <style type="text/css">
      .wpforms-container::after {
        background-image: url({{wp_get_attachment_image_src($aspec_logo_id, array(100, 100))[0]}});
      }
    </style>

  </div>

</div>

<div class="linksContainer">
  <h2 class="sectionHeading">Links</h2>
  <div class="links">
    @while(have_rows('links'))
      @php(the_row())
        <?php
        $imageUrl = wp_get_attachment_image_src(
          get_sub_field('logo')['id'],
          array(200, 200)
        )[0]
        ?>
        <div class="logo">
          <a href="{{the_sub_field('url')}}">
            <img src="{{$imageUrl}}" alt="">
          </a>
        </div>
        @endwhile
  </div>
</div>

{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
