/**
 * Extending functionalities of the gallery slider.
 */

/**
 * Image Caption
 */
$(function () {
  var gallerySliderItem = $('.field-mg-images .owl-item');

  if(gallerySliderItem.length) {
    $.each(gallerySliderItem, function () {
      var imageCaption = $(this).find('img').attr('title');
      if (imageCaption !== '') {
        $(this).append('<div class="caption">' + $(this).find('img').attr('title') + '</div>');
      }
    });
  }
});
