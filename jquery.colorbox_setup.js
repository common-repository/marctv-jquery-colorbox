(function ($) {
  var getYouTubeMediaID	= function (url){
    var regex = new RegExp(/^[^v]+v.(.{11}).*/);
    return url.replace(regex,"$1");
  };
    
  $(document).ready(function($) {
        
    $('a[data|=lightbox]').colorbox();

    $('a[rel=lightbox]').colorbox();

    $('a.lightbox').colorbox();
         
  });
})(jQuery);

