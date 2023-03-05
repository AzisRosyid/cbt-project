$('.pslide1').on('click', function(e) {
	$('.about1').addClass('hilangki');
	$('.pslide1').addClass('panahHilang');
	$('.pslide2').removeClass('panahHilang');
	$('.qslide2').removeClass('panahHilang');	
	$('.about2').removeClass('hilangka');

		e.preventDefault();
});

$('.qslide2').on('click', function(e) {
	$('.about1').removeClass('hilangki');
	$('.pslide1').removeClass('panahHilang');
	$('.pslide2').addClass('panahHilang');
	$('.qslide2').addClass('panahHilang');
	$('.about2').addClass('hilangka');	


		e.preventDefault();
});

$('.pslide2').on('click', function(e) {
	$('.about2').addClass('hilangki');
	$('.pslide2').addClass('panahHilang');
	$('.pslide3').removeClass('panahHilang');
	$('.qslide3').removeClass('panahHilang');	
	$('.about3').removeClass('hilangka');

		e.preventDefault();
});

$('.qslide3').on('click', function(e) {
	$('.about2').removeClass('hilangki');
	$('.pslide2').removeClass('panahHilang');
	$('.pslide3').addClass('panahHilang');
	$('.qslide3').addClass('panahHilang');
	$('.about3').addClass('hilangka');	


		e.preventDefault();
});

$('.tombolSub1').on('click', function(e) {
	$('.sub1').addClass('esub');
	$('.sub1').removeClass('subHilang');
	$('.sub2').addClass('subHilang');
	$('.sub3').addClass('subHilang');
	$('.sub4').addClass('subHilang');

	$('.sub2').removeClass('esub');
	$('.sub3').removeClass('esub');
	$('.sub4').removeClass('esub');



		e.preventDefault();
});

$('.tombolSub2').on('click', function(e) {
	$('.sub2').addClass('esub');
	$('.sub2').removeClass('subHilang');
	$('.sub1').addClass('subHilang');
	$('.sub3').addClass('subHilang');
	$('.sub4').addClass('subHilang');

	$('.sub1').removeClass('esub');
	$('.sub3').removeClass('esub');
	$('.sub4').removeClass('esub');



		e.preventDefault();
});

$('.tombolSub3').on('click', function(e) {
	$('.sub3').addClass('esub');
	$('.sub3').removeClass('subHilang');
	$('.sub1').addClass('subHilang');
	$('.sub2').addClass('subHilang');
	$('.sub4').addClass('subHilang');

	$('.sub1').removeClass('esub');
	$('.sub2').removeClass('esub');
	$('.sub4').removeClass('esub');



		e.preventDefault();
});

$('.tombolSub4').on('click', function(e) {
	$('.sub4').addClass('esub');
	$('.sub4').removeClass('subHilang');
	$('.sub1').addClass('subHilang');
	$('.sub3').addClass('subHilang');
	$('.sub2').addClass('subHilang');

	$('.sub1').removeClass('esub');
	$('.sub3').removeClass('esub');
	$('.sub2').removeClass('esub');



		e.preventDefault();
});