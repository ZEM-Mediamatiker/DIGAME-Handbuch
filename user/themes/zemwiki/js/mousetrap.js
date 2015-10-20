Mousetrap.bind('m', function(e){
  $('#page').addClass('fixbody');
  $('#menu-overlay').addClass('open-overlay');
  $('#navbtn').prop('checked', true);
});
Mousetrap.bind('p', function(e){
  window.print();
});
Mousetrap.bind('right', function(e){
  window.location.href = "{{ progress.prevSibling(page.path).url }}";
});
Mousetrap.bind('left', function(e){
  window.location.href = "{{ progress.nextSibling(page.path).url }}";
});
Mousetrap.bind('esc', function(e){
  $('#page').removeClass('fixbody');
  $('#menu-overlay').removeClass('open-overlay');
  $('#navbtn').prop('checked', false);
  $('#search-overlay').removeClass('open-searchoverlay');
