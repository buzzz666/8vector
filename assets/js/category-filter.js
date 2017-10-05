window.onload=function(){
	var options = {
	   animationDuration: 0.5,
	   filter: 'all',
	   callbacks: { 
	      onFilteringStart: function() { },
	      onFilteringEnd: function() { },
	      onShufflingStart: function() { },
	      onShufflingEnd: function() { },
	      onSortingStart: function() { },
	      onSortingEnd: function() { }
	   },
	   delay: 0,
	   delayMode: 'progressive',
	   easing: 'ease',
	   filterOutCss: {
	      opacity: 0
	   },
	   filterInCss: {
	      opacity: 1
	   },
	   layout: 'sameSize',
	   selector: '.filtr-container',
	   setupControls: true 
	} 

	var filterizd = $('.filtr-container').filterizr(options);
	filterizd.filterizr('setOptions', options);
}