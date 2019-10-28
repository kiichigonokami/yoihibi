/**
*===================================================================================
* ebisu_modal
* version : 4.0
* date    : 2017/08/03
*===================================================================================
*/

;(function($){

	var num = 0;

	var defaults = {

		//General
		selector    : "",
		mode        : "absolute",
		closeClass  : "ebisu-modal-close",
		zIndex      : 9999,

		//LoadFile
		loadFile       : "",
		loadFileWidth  : 500,
		loadFileHeight : 500,

		//Contents
		showContentsAnimation        : "fade",
		showContentsAnimationSpeed   : 100,
		closeContentsAnimation       : "fade",
		closeContentsAnimationSpeed  : 100,

		//Overlayer
		color     : "#000000",
		opacity   : 0.9,
        closeOverlayerFlg             : 1,
		showOverlayerAnimation        : "fade",
		showOverlayerAnimationSpeed   : 100,
		closeOverlayerAnimation       : "fade",
		closeOverlayerAnimationSpeed  : 100,

		//CallBackFunction
		onShowStart: function() {},
		onShowEnd: function() {},
		onCloseStart: function() {},
		onCloseEnd: function() {}
	}

	$.fn.ebisu_modal = function(options){

		var el        = this;
		var selector  = $(this);
		var modal     = {};

		/**
		 * ===================================================================================
		 * = PRIVATE FUNCTIONS
		 * ===================================================================================
		 */

		/**
		 * Initializes
		 */
		var init = function(){
			modal.settings      = $.extend({}, defaults, options);
			modal.selector      = modal.settings.selector? modal.settings.selector : selector;
			modal.overlayerName = "ebisu-modal-" + num + "-overlayer";
			modal.contentsName  = "ebisu-modal-" + num + "-contents";
			modal.overlayer     = "#" + modal.overlayerName;
			modal.contents      = "#" + modal.contentsName;
			modal.backPlaceName = "ebisu-modal-back-place-"+num;
			modal.backPlace     = "#" + modal.backPlaceName;

			setElement();
			setEvent();
			num++;
		}

		var setElement = function(){

			$('body').css('position', 'relative').append('<div id="' + modal.overlayerName + '" class="ebisu-modal-overlay"></div><div id="'+ modal.contentsName +'" class="ebisu-modal-contents"></div>');

			if(modal.settings.loadFile) {
				
				var loadFileIdName   = "load_file_" + num;
				var loadFileSelector = "#" + loadFileIdName;
				$('body').append('<iframe id="' + loadFileIdName + '"></iframe>');

				modal.selector = $(loadFileSelector);

				modal.selector.css({
					"background" : "white",
					"width"      : modal.settings.loadFileWidth,
					"height"     : modal.settings.loadFileHeight
				});

				modal.selector.load(modal.settings.loadFile);
				modal.selector.attr({'src' : modal.settings.loadFile});
			}

			modal.selector.after('<div class="ebisu-modal" id="'+modal.backPlaceName+'"></div>');

			modal.selector.appendTo(modal.contents);

			$(modal.overlayer).css({
				'z-index'    : modal.settings.zIndex,
				'background' : modal.settings.color,
				'opacity'    : modal.settings.opacity,
			});

			$(modal.contents).css({
				'z-index'  : modal.settings.zIndex + 1,
				'position' : modal.settings.mode,
			});

			setContentsPosition();
		}

		var setEvent = function(){

			$(window).resize(function(){
                setContentsPosition();
            });

			var closeClass = "." + modal.settings.closeClass;
			modal.selector.parent(modal.contents).find(closeClass).unbind().click(function() {
				el.close();
			});

            if(modal.settings.closeOverlayerFlg) {            
                $(modal.overlayer).click(function() {
                    el.close();
                });
            }
		}

		var setContentsPosition = function(){
			var w  = $(window).width();
			var h  = $(window).height();
			var cw = modal.selector.outerWidth();
			var ch = modal.selector.outerHeight();

			var left = ((w - cw)/2);
			var top  = ((h - ch)/2);

            console.log(w);
            console.log(cw);
            console.log(left);
            
			$(modal.contents).css({
                'width' : cw,
				'left'  : left + 'px',
				'top'   : top + 'px',
			});
		}

		var setShowOverlayerAnimation = function(){

			switch (modal.settings.showOverlayerAnimation) {
				case 'fade':
					$(modal.overlayer).fadeIn(modal.settings.showOverlayerAnimationSpeed);
					break;
				case 'slide':
					$(modal.overlayer).slideDown(modal.settings.showOverlayerAnimationSpeed);
					break;
				default:
					$(modal.overlayer).show(modal.settings.showOverlayerAnimationSpeed);
					break;
			}
		}

		var setShowContentsAnimation = function(){

			switch (modal.settings.showContentsAnimation) {
				case 'fade':
					modal.selector.fadeIn(modal.settings.showContentsAnimationSpeed);
					break;
				case 'slide':
					modal.selector.slideDown(modal.settings.showContentsAnimationSpeed);
					break;
				default:
					modal.selector.show(modal.settings.showContentsAnimationSpeed);
					break;
			}
		}

		var setCloseOverlayerAnimation = function(){

			switch (modal.settings.closeOverlayerAnimation) {
				case 'fade':
					$(modal.overlayer).fadeOut(modal.settings.closeOverlayerAnimationSpeed, function(){
						$(modal.overlayer).remove();
					});
					break;
				case 'slide':
					$(modal.overlayer).slideUp(modal.settings.closeOverlayerAnimationSpeed, function(){
						$(modal.overlayer).remove();
					});
					break;
				default:
					$(modal.overlayer).hide(modal.settings.closeOverlayerAnimationSpeed, function(){
						$(modal.overlayer).remove();
					});
					break;
			}
		}

		var setCloseContentsAnimation = function(){

			switch (modal.settings.closeContentsAnimation) {
				case 'fade':
					modal.selector.fadeOut(modal.settings.closeContentsAnimationSpeed, function(){
						$(modal.backPlace).replaceWith(this);
						$(modal.contents).remove();
					});
					break;
				case 'slide':
					modal.selector.slideUp(modal.settings.closeContentsAnimationSpeed, function(){
						$(modal.backPlace).replaceWith(this);
						$(modal.contents).remove();
					});
					break;
				default:
					modal.selector.hide(modal.settings.closeContentsAnimationSpeed, function(){
						$(modal.backPlace).replaceWith(this);
						$(modal.contents).remove();
					});
					break;
			}
		}

		/**
		 * ===================================================================================
		 * = PUBLIC FUNCTIONS
		 * ===================================================================================
		 */

		el.show = function(){

			if(modal.settings.mode == "fixed") {
				$("body").addClass("ebisu-modal-no-scroll");
			}

			// callback
			modal.settings.onShowStart(modal.settings);

			setShowOverlayerAnimation(),
			setShowContentsAnimation()

			// callback
			modal.settings.onShowEnd(modal.settings);
		}

		el.close = function(){

			if(modal.settings.mode == "fixed") {
				$("body").removeClass("ebisu-modal-no-scroll");
			}

			// callback
			modal.settings.onCloseStart(modal.settings);

			setCloseContentsAnimation();
			setCloseOverlayerAnimation();

			// callback
			modal.settings.onCloseEnd(modal.settings);
		}

		el.getSettings = function(){
			return modal.settings;
		}

		el.getOverlayer = function(){
			return modal.overlayer;
		}

		el.getContents = function(){
			return modal.contents;
		}

		init();

		return this;
	}

})(jQuery);