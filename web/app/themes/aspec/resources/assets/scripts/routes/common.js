import parallaxHeader from '../parallaxHeader';


export default {
  init() {
    // JavaScript to be fired on all pages
    handleMenuToggle();
    handleMenuShowHide();
    handleSignUp();

    parallaxHeader('.parallaxContent')
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};

let handleSignUp = () => {
  $('#signup').submit(function () {
    $("#message").html("Adding your email address...");
    $('#signUpModal #message').removeClass('hidden alert-success alert-danger').addClass('alert-info');
    $.ajax({
      url: 'mailchimp_subscribe.php', // proper url to your "store-address.php" file
      type: 'POST', // <- IMPORTANT
      data: $('#signup').serialize() + '&ajax=true',
      success: function (msg) {
        var message = $.parseJSON(msg),
          result = '';
        console.log("message", message);

        if (message.status === 'subscribed') { // success
          result = 'Success!';
          $('#signUpModal #message').removeClass('hidden alert-info alert-danger').addClass('alert-success');
        } else { // error
          result = 'Error: ' + message.detail;
          $('#signUpModal #message').removeClass('hidden alert-info alert-success').addClass('alert-danger');
        }
        $('#message').html(result); // display the message
      },
    });
    return false;
  });
};

let handleMenuToggle = () => {
  $("body").removeClass("preload");

  $('#mainMenuToggle').on({
    'click': (e) => {
      $(e.currentTarget).toggleClass('close');
      $('#menuDrawer').toggleClass('open');
      $('body').toggleClass('noscroll');
    },
    'mousedown': (e) => {
      $(e.currentTarget).addClass('down');
    },
    'mouseout': () => {
      $('#mainMenuToggle').removeClass('down');
    },
  });

  $(document).on("mouseup", () => {
    $('#mainMenuToggle').removeClass('down');
  });
};

let handleMenuShowHide = () => {
  // Hide Header on on scroll down
  let didScroll;
  let lastScrollTop = 0;
  let delta = 5;
  let target = $('.nav-primary-mobile');
  let navbarHeight = target.outerHeight();

  $(window).scroll(() => {
    didScroll = true;
  });

  setInterval(() => {
    if (didScroll) {
      hasScrolled();
      didScroll = false;
    }
  }, 250);

  function hasScrolled() {
    let st = $(window).scrollTop();

    // Make sure they scroll more than delta
    if (Math.abs(lastScrollTop - st) <= delta)
      return;

    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight) {
      // Scroll Down
      target.removeClass('nav-down').addClass('nav-up');
    } else {
      // Scroll Up
      if (st + $(window).height() < $(document).height()) {
        target.removeClass('nav-up').addClass('nav-down');
      }
    }

    lastScrollTop = st;
  }
};


