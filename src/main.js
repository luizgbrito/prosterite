$('body').on("click","a.cta",function(e) {
	e.preventDefault();
	if(!SA==1){
		var id = $(this).attr('href')
		if (id.indexOf('#') > -1) {
			id = '#'+id.split("#")[1]
			if(id=='#inicio'){
				if(ROTA){
					location.href = sURL;
				}else{
					var to = 0;					
				}
			}else{
				var to = parseInt($(id).offset().top) - 80;
			}
			if($(id).is(":visible")){
				$('html, body').animate({
					scrollTop: to+'px'
				}, 500);
				window.history.pushState("object or string", "Title", "./");
			}else{
				location.href = sURL+'/'+id;
			}
		}else{
			location.href = $(this).attr('href')		
		}
	}
});

$("#quizz").on("click","input.uk-radio",function(){
	$(this).parent().parent().slideUp(100)
	$(this).parent().parent().next().fadeIn(100)
});
