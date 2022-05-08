var $grid = $('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.card',
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress(function () {
  $grid.masonry();
});



