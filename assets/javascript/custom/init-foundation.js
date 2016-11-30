jQuery(document).foundation();

(function ($) {

  //Preloader
  $('body').jpreLoader({
      loaderVPos: '41.5%',
      //splashID: '#logo-footer',
      autoClose:true,
      showPercentage: false,
      closeBtnText: ''
    },function() {
      //new WOW().init();
      $('#jpreBar, .slider-loader').addClass('vhs');
      $('#slider-content').removeClass('vhs');
  });

  //Menu mobile
  $('ul','#menu-principal').clone().prependTo('#mo-menu').addClass('vertical').removeClass('v-center');
  $('*[data-open-menu]').on('click',function (e) {
    e.preventDefault();
    $('#mo-menu,.close-menu').toggleClass('active');
  });

  $('ul','#menu-principal').clone().prependTo('.get-menu').removeClass('v-center');

  //go top
  $('.go-top').on('click',function (e) {
    e.preventDefault();
    $('body,html').animate({scrollTop: 0},500);
  });

  //scroll
  $(window).on('scroll',function (e) {
    var pos = $(this).scrollTop();
    if(pos > 300)
      $('.go-top,#scroll-menu').addClass('active');
    else
      $('.go-top,#scroll-menu').removeClass('active');
  });

  //share post
  $('a','.post-share').on('click',function (e) {
    e.preventDefault();
  });

  $( '.cycle-slideshow' ).on( 'cycle-after', function( event, opts ) {
    $('.slider-thumb, .slider-text').addClass('show');
  });
  $( '.cycle-slideshow' ).on( 'cycle-initialized', function( event, opts ) {
    $('.slider-thumb, .slider-text').addClass('show');
  });
  $( '.cycle-slideshow' ).on( 'cycle-before', function( event, opts ) {
    $('.slider-thumb, .slider-text').removeClass('show');
  });

})(jQuery);
