document.addEventListener('DOMContentLoaded', function () {

	if (typeof jQuery === 'undefined') {
	  // jQuery is NOT available
	  alert('Readable requires jQuery');
	} else {
	  // jQuery is available
	  ! function($) {
			function t() {
				$("p").each(function() {
					var t = $(this),
						n = $(this).html();
					$(this).data("ocontent", n), t.html(e)
				})
			}
		
			function e() {
				var t = $(this).text(),
					e = t.substring(0, 45),
					n = t.substring(45, 75),
					o = t.substring(75, t.length),
					i = e + "<span class='readable'>" + n + "</span>" + o;
				return i
			}
		
			function n() {
				c === !0 ? ($("p").html(function() {
					var t = $(this).data("ocontent");
					return t
				}), c = !1) : (t(), c = !0)
			}
		
			function o() {
				$(".toggle").removeAttr("disabled"), s === !0 && ($(".toggle").prop("checked", !0), c = !0, t(), setTimeout(n, 2e3), setTimeout(i, 2e3))
			}
		
			function i() {
				$(".toggle").prop("checked", !1)
			}
			var s = !0,
				c = !1;
			$("body").prepend("<div class='switch'><input id='toggle' class='toggle' type='checkbox'><label for='toggle'></label></div>"), $(".toggle").click(function() {
				n()
			}), $(".toggle").attr("disabled", !0), setTimeout(o, 1e3)
		}(jQuery);
	  
	} // EoF jQuery available

});
