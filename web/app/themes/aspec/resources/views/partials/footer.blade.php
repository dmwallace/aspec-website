<footer class="footer">
  <div class="container">
    @php(dynamic_sidebar('sidebar-footer'))
      <div class="row">
        <div class="social">
          <h3 class="heading">Follow Us</h3>
            <div class="icons">
              <a href="{{get_field('facebook_url', 'option')}}"><i class="facebook"></i></a>
              <a href="{{get_field('linkedin_url', 'option')}}"><i class="linkedin"></i></a>
            </div>
        </div>
        <div class="footer-menu">
          Menu goes here
        </div>
        <div class="business-info">
          <ul class="no-style">
            <li>© Aspec Engineering Pty Ltd 2017</li>
            <li>ABN - 22 105 267 016</li>
          </ul>
          <img class="logo" width="100px" src="{{$csa_logo}}" alt="compliance australia certification logo">

        </div>
      </div>
  </div>

</footer>
{{--@debug('hierarchy')--}}
