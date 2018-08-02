$(document).ready(function() {
	
	// instagram
	
	 var userFeed = new Instafeed({
        get: 'user',
        userId: '4937064559',
        limit: '7',
        accessToken: '4937064559.1677ed0.f024df80ce4441758db21a4970469d64',
        template: '<div class ="col-md"><a href="{{link}}"><img class="img-fluid insta" src="{{image}}"</a></div>'
    });
    userFeed.run();




});