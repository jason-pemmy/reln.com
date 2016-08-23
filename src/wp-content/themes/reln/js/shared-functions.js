// https://remysharp.com/2010/07/21/throttling-function-calls
function debounce(fn, delay) {
	var timer = null;
	return function () {
		var context = this, args = arguments;
		clearTimeout(timer);
		timer = setTimeout(function () {
			fn.apply(context, args);
		}, delay);
	};
}

function debug_message(message) {
	if (location.hostname === 'localhost') console.log(message);
}

function toggle_slideout() {
	var $ = jQuery;
	//var $body = $('body');
	var $mobileMenu = $("#mobile-menu");
	var $slideout = $('.slideout');
	//var slideout_scroll = $slideout.getNiceScroll();

	if ($mobileMenu.hasClass('slideout-active')) {
		$mobileMenu.removeClass('slideout-active');
		//document.activeElement.blur();

		setTimeout(function() {
			$slideout.hide();
			remove_trap_focus($('.slideout'), 'slideoutFocus');
		}, 400);
	} else {
		$slideout.show(0, function() {
			$mobileMenu.addClass('slideout-active');
			setTimeout(function() {
				$slideout.find('input').first().focus();
			}, 200);

			$mobileMenu.click(function() {
				if ($mobileMenu.hasClass('slideout-active')) {
					toggle_slideout();
				}
			});
		});
	}

	//setTimeout(function() {
	//	slideout_scroll.resize();
	//}, 400);
}

function minimum_page_height() {
	var $ = jQuery;
	var $body = $('body');
	var $window = $(window);
	var $main = $('#main');
	var $header = $('.navbar-default');
	var $footer = $('.page-footer');
	var min_height = $window.outerHeight() - $header.outerHeight() - $footer.outerHeight();

	if (! $body.hasClass('home') && min_height > 0) {
		$main.css({
			'min-height': min_height,
		});
	} else {
		$main.css({
			'min-height': '',
		});
	}
}

function trap_focus($container, eventNamespace) {
	var eventName = eventNamespace ? 'focusin.' + eventNamespace : 'focusin';
	var $ = jQuery;
	var eventNameKeyup = eventNamespace ? 'keyup.' + eventNamespace : 'keyup';

	$container.attr('tabindex', '-1').focus();

	$(document).on(eventName, function (evt) {
		if ($container[0] !== evt.target && !$container.has(evt.target).length) {
			$container.focus();
		}
	}).on(eventNameKeyup, function(evt) {
		if (evt.keyCode === 27) {
			remove_trap_focus($container, eventNamespace);
			toggle_slideout();
		}
	});
}

function remove_trap_focus($container, eventNamespace) {
	var eventName = eventNamespace ? 'focusin.' + eventNamespace : 'focusin';
	var $ = jQuery;
	var eventNameKeyup = eventNamespace ? 'keyup.' + eventNamespace : 'keyup';

	$container.removeAttr('tabindex');
	$(document).off(eventName);
	$(document).off(eventNameKeyup);
}
