$(function() {

	//inview.js
	$(".invew_up").each(function () {
		$(this).addClass('inview');
		$(this).data('offset', 50);
		$(this).on('inview', function (event, isInView, topOrBottomOrBoth) {
		  if (isInView) {
		    $(this).off('inview');
		    $(this).addClass('motion');
		  }
		});
	});


	//scrollFixed
	var scrollFixed = {
    scroll       : 0,
    windowHeight : $(window).height(),
    scrollBottom : 0,
		lastTop      : $("footer").offset().top,
		target       : $(".staff-point"),
    target2      : $(".scroll-top,.bgr-btn"),
		init         : function() {
			if(this.target) {
				$(window).on('scroll',function() {
					scrollFixed.scroll = $(window).scrollTop();
					scrollFixed.scrollBottom = scrollFixed.scroll + scrollFixed.windowHeight + 300;
          scrollFixed.scrollFix();
					scrollFixed.smooScrollFix();
				});
			}
		},
		scrollFix    : function() {
			if(this.scrollBottom >= this.lastTop) {
				this.target.removeClass("none");
			}
			else {
				if(this.scroll >= this.windowHeight/5) {
					this.target.addClass("none");
				} else {
					this.target.removeClass("none");
				}
			}
		},
		smooScrollFix: function() {
      if(this.scroll >= this.windowHeight/5) {
        this.target2.addClass("fixed");
      } else {
        this.target2.removeClass("fixed");
      }
		}
	}
	scrollFixed.init();


	//bgrBtn
	var bgrBtn = {
		clkTarget  : $('.bgr-btn'),
		target     : $('.wrap-l,#header'),
		class      : 'active',
		addSpan    : '',
		init       : function() {
			this.apendSpan(),
			this.clkTarget.click(function() {
				bgrBtn.prepend();
			});
		},
		addClass    : function() {
			if (this.clkTarget.hasClass(this.class)) {
				this.target.addClass(this.class);
			} else {
				this.target.removeClass(this.class);
			}
		},
		apendSpan   : function() {
			for (var i=0; i<4; i++) {
				this.addSpan += "<span />";
			}
			this.clkTarget.wrapInner(this.addSpan);
		},
		prepend     : function() {
			this.clkTarget.toggleClass(this.class);
			this.addClass();
		}
	}
	bgrBtn.init();


	//smoothScroll
	var smoothScroll = {
		target     : $('a[href^="#"]'),
		target2    : $("html, body"),
		speed      : 500,
		transition : 'swing',
		init       : function() {
			this.target.on('click',function() {
				href       = $(this).attr('href');
				$target    = $(href == "#" || href == "" ? 'html' : href);
				targetPosition = $target.offset().top;

				smoothScroll.target2.animate({scrollTop:targetPosition}, smoothScroll.speed, smoothScroll.transition);
				return false;
			});
		}
	}
	smoothScroll.init();

});
