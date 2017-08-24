export default function(content) {
  let initialOffset;

  let doParallaxHeader = () => {
    if(!initialOffset) {
      initialOffset = parseFloat($(content).css('background-position-y'));
      console.log("initialOffset", initialOffset);
    }
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    let offset = initialOffset - (50 * scrollTop / $(content).outerHeight());
    $(content).css("background-position-y", `${offset}%`)
  };

  $(window).on('scroll resize', ()=>{
    window.requestAnimationFrame(doParallaxHeader);
  });

}
