$(document).ready( function(){
	    window.percent = 0;
	    window.progressInterval = window.setInterval( function(){
			vrednost = "{{$full_info->speed * 5}}";
			id = '#prvi';
	        if(window.percent < vrednost) {
	            window.percent++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ('progress-bar-danger') ;
	            $(id +' .progress-bar:first').width(window.percent+'%');
	            $(id +' .progress-bar:first').text("speed");
	        } else {
	            window.clearInterval(window.progressInterval);
	        }
	    } , 100 );
		
		window.progressInterval2 = window.setInterval( function(){
			vrednost = "{{$full_info->power *5}}";
			id = '#drugi';
	        if(window.percent < vrednost) {
	            window.percent++;
	            $(id).addClass('progress-striped').addClass('active');
	            $(id +' .progress-bar:first').removeClass().addClass('progress-bar')
	            .addClass ( (percent < 40) ? 'progress-bar-danger' : ( (percent < 80) ? 'progress-bar-warning' : 'progress-bar-success' ) ) ;
	            $(id +' .progress-bar:first').width(window.percent+'%');
	            $(id +' .progress-bar:first').text("power");
	        } else {
	            window.clearInterval(window.progressInterval2);
	        }
	    } , 100 );
	});
	// ORIGINAL
	// $(document).ready( function(){
	//     window.percent = 0;
	//     window.progressInterval = window.setInterval( function(){
	//         if(window.percent < 75) {
	//             window.percent++;
	//             $('.progress').addClass('progress-striped').addClass('active');
	//             $('.progress .progress-bar:first').removeClass().addClass('progress-bar')
	//             .addClass ( (percent < 40) ? 'progress-bar-danger' : ( (percent < 80) ? 'progress-bar-warning' : 'progress-bar-success' ) ) ;
	//             $('.progress .progress-bar:first').width(window.percent+'%');
	//             $('.progress .progress-bar:first').text(window.percent+'%');
	//         } else {
	//             window.clearInterval(window.progressInterval);
	//             // jQuery('.progress').removeClass('progress-striped').removeClass('active');
	//             // jQuery('.progress .progress-bar:first').text('Done!');
	//         }
	//     }, 100 );
	// });