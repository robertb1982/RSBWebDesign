$(function () {
		
	var filterList = {
	
		init: function () {
		
			// MixItUp plugin
			// http://mixitup.io
			$('#portfoliolist').mixItUp({
				selectors: {
  			  target: '.portfolio',
  			  filter: '.filter'	
  		  },
  		  load: {
    		  filter: '.projects, .work, .risd, .other' // show all tabs on load
    		}     
			});								
		
		}

	};
	
	// Run the show!
	filterList.init();
	
});		