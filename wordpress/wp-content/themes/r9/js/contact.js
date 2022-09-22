jQuery(function ($) {
	$('.wpcf7-submit').prop("disabled", true);
	$('#confirm_button').on('click', function () {
		var ok = true;
		$('.wpcf7-validates-as-required').each(function () {
			if ($(this).val() == '') {
				ok = false;
			}
		});
		if (!ok) {
			$('.wpcf7-submit').prop("disabled", true);
			$('.error').removeClass('none');
			$('.error').text('必須項目を記入してください')
			return;
		}
		if (!$('.wpcf7-acceptance input').prop("checked")) {
			$('.wpcf7-submit').prop("disabled", true);
			$('.error').removeClass('none');
			$('.error').text('同意は必須です')
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

var $ = jQuery.noConflict(); // $の衝突回避
var formTop = $('#form').offset().top;
console.log("hoge")

// ajax後にエラーがある場合のイベントを引き当てる
$('.wpcf7').on('wpcf7:invalid', function () {
	// スクロール位置をフォームトップに移動する
	$('html, body').animate({
		scrollTop: formTop - headerHeight
	}, 700);
});