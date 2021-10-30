// menuResponsive
var menuResponsive = {
  init: function() {
      this.toggleMenu()
  },
  toggleMenu: function() {
      var button = document.querySelector('.header__menu-bar');
      var menu = document.querySelector('.header__menu-list');
      button.addEventListener('click', function() {
          menu.classList.toggle('show')
      })
  }
}
menuResponsive.init()

new WOW().init();
$('.reset').click(function(){
  new WOW().init();
})