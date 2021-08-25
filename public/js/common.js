 $(document).ready(function() {

	$('.menu-header').click(function(){
		if($('#header').hasClass('activat')){
			$(this).removeClass('open');
			$('.menu-container').css('opacity','0');
			$('.menu-container').css('display','none');
			$('#header').removeClass('activat');
			$('.menu-container').css('display','none');
		$('#header').removeClass('meniu-activat');
		}else{
			$('#header').addClass('meniu-activat');
			$('.menu-container').css('display','flex');
			$('.menu-container').css('opacity','1');
			$('#header').addClass('activat');
			$('.menu-container').css('display','flex');
			
			$(this).toggleClass('open');
		}
	});
	$('.menu-header-mobile').click(function(){
		if($('#header').hasClass('activat')){
			$(this).removeClass('open');
			$('.menu-container').css('display','none');
			$('.menu-container').css('opacity','0');
			$('#header').removeClass('activat');
			$('.menu-container').css('display','none');
		$('#header').removeClass('meniu-activat');
		}else{
			$('#header').addClass('meniu-activat');
			$('.menu-container').css('opacity','1');
			$('#header').addClass('activat');
			$('.menu-container').css('display','flex');
			$('.menu-container').css('display','flex');
			
			$(this).toggleClass('open');
		}
	});
	$('.search-container').click(function(){
		$(this).addClass('search-active');
		$('.search-header').css('opacity',0);
		$('.search-header-black').css('opacity',1);
		$('.search-input').css('display','block');
		$('.header-left').css('width','auto');
	});
	$(window).scroll(function() {
		$('.search-container').removeClass('search-active');
		$('.search-header').css('opacity',1);
		$('.search-header-black').css('opacity',0);
		$('.search-input').css('display','none');
	});
	$('.search-header-black').click(function(){
		if($('.search-input').val()){
			$search = $('.search-input').val();
			$search  = $search.replace(/\s+/g, '+');
			window.location.replace('cauta?q='+$search);
		}
	});
	$('.search-mobile-image').click(function(){
		if($('.search-input-mobile').val()){
			$search = $('.search-input-mobile').val();
			$search  = $search.replace(/\s+/g, '+');
			window.location.replace('cauta?q='+$search);
		}
	});
	$('.search-input').keypress(function (e) {
		var key = e.which;
		if(key == 13){
			$('.search-header-black').trigger('click');
		 }
	   });

	$(".popcorn-image").click(function() {
		$("html, body").animate({ scrollTop: 0 }, "slow");
		return false;
	});
})