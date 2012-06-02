(function($) {
  
	$.fn.StageForm = function(options) {
		
		return this.each(function() {
			
			if (options) { $.extend( settings, options )};

			var obj = this, curStage;
			obj.find('fieldset').not(':first').hide().css('visibility','hidden').append('<button class="go-back">Previous Stage</button>');
			obj.find('fieldset').last().append('<button class="display-all">Display All Sections');
			obj.find('fieldset').not(':last').append('<button class="move-on">Next Stage</button>');

			curStage = this.find('fieldset:visible');

			this.find('.move-on').click(function() {
				curStage.hide().next('fieldset').show();
				curStage = this.find('fieldset:visible');
			});

			this.find('.go-back').click(function() {
				curStage.hide().previous('fieldset').show();
				curStage = this.find('fieldset:visible');
			});

			this.find('.display-all').click(function() {
				obj.find('fieldset').show();
			});

		})

	})

})(jQuery);