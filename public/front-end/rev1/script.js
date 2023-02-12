// $('.felix').on('click', function(e){

// 	console.log('ok');



// 	e.preventDefault();
// });

$('.felix').on('click', function(e) {
	$('.epo').removeClass('hilang');
	$('.epo').addClass('muncul');	

		e.preventDefault();
});

$('.kembali').on('click', function(e) {
	$('.epo').addClass('hilang');
	$('.epo').removeClass('muncul');


	e.preventDefault();
})


$('.word').on('click', function(e) {
	$('.ewo').removeClass('hilang');
	$('.ewo').addClass('muncul');	

		e.preventDefault();
});

$('.kembali').on('click', function(e) {
	$('.ewo').addClass('hilang');
	$('.ewo').removeClass('muncul');


	e.preventDefault();
})