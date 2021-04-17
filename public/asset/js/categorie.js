var $grid = $('.grid').masonry({
  // set itemSelector so .grid-sizer is not used in layout
  itemSelector: '.card',
  percentPosition: true,
});

// layout Masonry after each image loads
$grid.imagesLoaded().progress(function () {
  $grid.masonry();
});

