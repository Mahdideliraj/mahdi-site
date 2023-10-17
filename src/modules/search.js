import $ from "jquery"

class search {
    // describe and create our object
  constructor() {
    this.openButton = $(".js-search-trigger")
    this.closeButton = $(".search-overlay__close")
    this.searchOverlay = $(".search-overlay")
    this.events()
  }
  // event
  events(){
    this.openButton.on("click", this.openOverlay.bind(this)); 
    this.closeButton.on("click", this.closeOverlay.bind(this)); 
    $(document).on("keyup", this.keyPress.bind(this));
  }

  //methods
keyPress (e) {
    if(e.keyCode == 83){
        this.openOverlay();

    }
    if(e.keyCode == 27){
        this.closeOverlay();

    }
}


  openOverlay(){
    this.searchOverlay.addClass("search-overlay--active");
    $('body').addClass("body-no-scroll");
  }
  closeOverlay(){
    this.searchOverlay.removeClass("search-overlay--active");
    $('body').removeClass("body-no-scroll");

  }
}
export default search
