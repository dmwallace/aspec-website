export default {
  init() {
    // JavaScript to be fired on the about us page
    $('.section_container').hover(
      ()=>{
        console.log("over");
      },
      ()=>{
        console.log("out");
    }
    )
  },
};
