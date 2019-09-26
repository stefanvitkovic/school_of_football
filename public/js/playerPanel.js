document.addEventListener("DOMContentLoaded", function(event) {
    searchPlayer = document.getElementById('search');

	searchPlayer.onkeyup = function(e){
		term = this.value.toLowerCase();
		
			allTr = document.querySelectorAll('table tbody tr');

			allTr.forEach(function(valTr,i){
				tdList = valTr.querySelectorAll('td');

				tdStr = '';

				tdList.forEach(function(tdVal){
					tdStr += tdVal.innerText.toLowerCase();
			    });
				if(tdStr.indexOf(term) === -1){
					valTr.classList.add('hidden');
			    }else{
					valTr.classList.remove('hidden');
			    }
			});
		

	}
	
	// $('#search').keyup(function(){
	// 	var name = $(this).val();
	// 	$.ajax({
	// 		url:"/igraci_ajax",
	// 		type:"GET",
	// 		dataType:"json",
	// 		data:{name:name},
	// 		success:function(data){
	// 			console.log(data);

	// 			$('table tbody').empty();



	// 		},error:function(err){
	// 			console.log(err);
	// 		}
	// 	});
	// });

	

	// $('#search').keyup(function () {
 //        var term = $(this).val().toLowerCase();

 //        $('.table tbody tr').each(function () {
 //            var search_str = '';
 //            $(this).children('td').each(function () {
 //                search_str += $(this).text().toLowerCase() + ' ';
 //            });
            
 //            if (search_str.indexOf(term) === -1)
 //                $(this).addClass('hidden');
 //            else
 //                $(this).removeClass('hidden');

 //        });
 //    });
});

