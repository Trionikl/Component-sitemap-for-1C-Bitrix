$( document ).ready(function() {
	var arrUl = ["nen"]; 
	
	// нажимаем кнопку
	$('.map-level-btn').on('click', function(){		
		// код обработчика события нажатия кнопки
		attr = $(this).attr('id');
		arr_num = attr.split('_');
		
		switch (arr_num[0]) {
			case 'btn-map':
			ul_id='#level-ul-2-map-' + arr_num[1];
			break;
			case 'btn-2-map':
			ul_id='#level-ul-3-map-' + arr_num[1];			
			fun_height(arrUl, ul_id);
			break;
		}
		
		plus_minus = $(ul_id).css('display');
		$(ul_id).toggle(fun_plus_minus(this, plus_minus));		
	});	
});	

// функции
function fun_plus_minus(arg_this, plus_minus) {
	
	if (plus_minus == "none") {
		$( arg_this ).find('.plus-solid').addClass('visible-none-svg'); 
		$( arg_this ).find('.minus-solid').removeClass('visible-none-svg'); 
	}
	
	if (plus_minus == "block") {
		$( arg_this ).find('.minus-solid').addClass('visible-none-svg'); 
		$( arg_this ).find('.plus-solid').removeClass('visible-none-svg'); 		
	}
}


// подрезать размер
function fun_height(arrUl, ul_id) {	
	search_results = $.inArray( ul_id, arrUl ); 
	arrUl.push(ul_id);	
	
	if (search_results === -1) {
		indx = $(ul_id).height();
		indx=indx-28;
		$(ul_id).height(indx);	
	}
}