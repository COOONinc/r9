jQuery(function ($) {
  $('.wpcf7-submit').prop("disabled", true);
  $('#confirm_button').on('click', function () {
    var ok = true;
    $('.wpcf7-validates-as-required').each(function () {
      if ($(this).val() == '') {
        ok = false;
      }
    });
    // if (!ok) {
    // 	$('.wpcf7-submit').prop("disabled", true);
    // 	$('.error').removeClass('none');
    // 	$('.error').text('必須項目を記入してください')
    // 	return;
    // }
    // if (!$('.wpcf7-acceptance input').prop("checked")) {
    // 	$('.wpcf7-submit').prop("disabled", true);
    // 	$('.error').removeClass('none');
    // 	$('.error').text('同意は必須です')
    // 	return;
    // }
    if (!ok) {
      $('.wpcf7-not-valid-tip').prop("disabled", true);
      $('.button-none').addClass('button-on')
      return;
    }

    $('.wpcf7-submit').prop("disabled", false);
    $('.error').addClass('none');
    $('.error').text('')
    $('body').addClass('confirm_page');
    $('.wpcf7-form-control:not(.wpcf7-submit)').prop("readonly", true);
    $('.acceptance_wrapper').addClass('none');
  });
  $('#back_button').on('click', function () {
    $('.wpcf7-submit').prop("disabled", true);
    $('body').removeClass('confirm_page');
    $('.wpcf7-form-control:not(.wpcf7-submit)').prop("readonly", false);
    $('.acceptance_wrapper').removeClass('none');
  });
  $(".wpcf7-form-control.wpcf7-acceptance input").on('change', function () {
    window.setTimeout(function () {
      $('.wpcf7-submit').prop("disabled", true);
    }, 500);
  });
})