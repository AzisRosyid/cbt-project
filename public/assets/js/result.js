$('.download').on('click', function() {
	$('.hilang').addClass('phasil');
	$('.hilang').addClass('phasil');
	$('.bgb').removeClass('bgbody');

	// $('.score').addClass('mt-4');
	// $('.score').addClass('col-lg-9');
	// $('.score').removeClass('col-lg-5');

},);






window.onload= function function_name() {
	document.getElementById("download")
	.addEventListener("click",()=>{
		const hasil= this.document.getElementById("home");
		var opt = {
			margin: 0,
			filename: 'myfile.pdf',
			image: {type:'jpeg', quality: 0.98},
			html2canvas: {scale: 2},
			jsPDF: {unit:'in', format:'letter', orientation:'landscape'}
		}
		html2pdf().from(hasil).set(opt).save();
	})
}


$('.download').on('click', function() {
	const countDown = setInterval (()=>{
		$('.hilang').removeClass('phasil');
		$('.hilang').removeClass('phasil');
		$('.bgb').addClass('bgbody');

		// $('.score').removeClass('mt-4');
		// $('.score').removeClass('col-lg-9');
		// $('.score').addClass('col-lg-5');
	},100);
		
},);