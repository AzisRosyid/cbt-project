$('.overlay').on('click', function(e) {
	$('.login').removeClass('z-1');	
	$('.pKiri').removeClass('pMuncul');
	$('.pKanan').removeClass('pMuncul');
	$('.qKiri').addClass('qMuncul');
	$('.qKanan').addClass('qMuncul');

	e.preventDefault();
});

$('.over').on('click', function(e) {
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
	$('.login').addClass('z-1');
	$('.qKiri').removeClass('qMuncul');
	$('.qKanan').removeClass('qMuncul');	

	e.preventDefault();
});

$('.daftar').on('click', function(e) {
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
	$('.login').addClass('z-1');
	$('.qKiri').removeClass('qMuncul');
	$('.qKanan').removeClass('qMuncul');	

	e.preventDefault();
});
