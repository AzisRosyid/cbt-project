$('.panahka1').on('click', function(e) {
	$('.page2').removeClass('hilang');
	$('.panahka2').removeClass('hilang');
	$('.panahki2').removeClass('hilang');
	$('.panahka1').addClass('hilang');
	$('.page1').addClass('hilang');	


		e.preventDefault();
});

$('.panahki2').on('click', function(e) {
	$('.page2').addClass('hilang');
	$('.panahka2').addClass('hilang');
	$('.panahki2').addClass('hilang');
	$('.panahka1').removeClass('hilang');
	$('.page1').removeClass('hilang');	


		e.preventDefault();
});



$('.panahka2').on('click', function(e) {
	$('.page3').removeClass('hilang');
	$('.panahka3').removeClass('hilang');
	$('.panahki3').removeClass('hilang');
	$('.panahka2').addClass('hilang');
	$('.panahki2').addClass('hilang');
	$('.page2').addClass('hilang');	


		e.preventDefault();
});

$('.panahki3').on('click', function(e) {
	$('.page3').addClass('hilang');
	$('.panahka3').addClass('hilang');
	$('.panahki3').addClass('hilang');
	$('.panahka2').removeClass('hilang');
	$('.panahki2').removeClass('hilang');
	$('.page2').removeClass('hilang');	


		e.preventDefault();
});

$('.panahka3').on('click', function(e) {
	$('.page4').removeClass('hilang');
	$('.mulai').removeClass('hilang');
	$('.panahka3').addClass('hilang');
	$('.panahki3').addClass('hilang');
	$('.page3').addClass('hilang');	


		e.preventDefault();
});

$('.mulai').on('click', function(e) {
	$('.winstruksi').removeClass('hilang');


		e.preventDefault();
});

$('.tidak').on('click', function(e) {
	$('.winstruksi').addClass('hilang');


		e.preventDefault();
});