jQuery(document).ready(function($) {
	
	/**
     * Smooth scroll
     * https://github.com/cferdinandi/smooth-scroll
     */
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 300,
        speedAsDuration: true
    });
    
    console.log('Plugin boilerplate loaded...');
    
    jQuery.ajax({
        type: "POST",
        url: init_ajax.url,
        data: { 
          action: 'hello_world_ajax'
        },
        dataType: "json"
    })
    .done(function(response) {
        console.log(response);
    })
    .fail(function(){
        console.log('failed');
    });
});