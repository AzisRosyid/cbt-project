// const tanggaltujuan = new Date('Feb 23, 2023 17:45:00').getTime();


// const hitungmundur = setInterval(function() {

// 	const sekarang = new Date().getTime();
// 	const selisih = tanggaltujuan - sekarang;

// 	const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
// 	const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
// 	const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
// 	const detik = Math.floor(selisih % (1000 * 60) / 1000);

// 	const teks = document.getElementById('ha');
// 	teks.innerHTML = (jam<10 ? '0': '')+(jam)+':' + (menit<10 ? '0': '')+(menit) + ':' + (detik<10 ? '0': '')+(detik); 

// }, 1000);



const timeH = document.getElementById('kodomo');
let timeSecond = 10;

displayTime(timeSecond);

const countDown = setInterval (()=>{
	timeSecond--;
	displayTime(timeSecond)
	if (timeSecond <= 0 || timeSecond < 1) {
		finish()
		end();
		clearInterval(countDown);
	}
},1000);

function displayTime(second) {
	const min = Math.floor(second / 60);
	const sec = Math.floor(second % 60);
	timeH.innerHTML= (min<10 ? '0': '')+(min)+':'+(sec<10 ? '0': '')+(sec);
};

function end(){
	timeH.innerHTML= 'time out'
};




const timeI = document.getElementById('demo');
let Second = 10;

display(Second);

const Down = setInterval (()=>{
	Second--;
	display(Second)
	if (Second <= 0 || Second < 1) {
		finish()
		endTime();
		clearInterval(Down);
	}
},1000);

function display(second) {
	const min = Math.floor(second / 60);
	const sec = Math.floor(second % 60);
	timeI.innerHTML= (min<10 ? '0': '')+(min)+':'+(sec<10 ? '0': '')+(sec);
};




function finish(){
		window.location="latihan.html";
		console.log("ok")
	}

function endTime(){
	timeI.innerHTML= 'time out'
};


	setTimeout("fun()",10000);









function endTime(){
	$('.halang').removeClass('hilang');
	$('.wadahsoal').addClass('hilang');

};


$('.nomor1').on('click', function(e) {
	$('.mt-4').addClass('hilang');
	$('.col-12').addClass('hilang');
	$('.hal1').removeClass('hilang');
	


		e.preventDefault();
});

$('.nomor2').on('click', function(e) {
	$('.mt-4').addClass('hilang');
	$('.col-12').addClass('hilang');
	$('.hal2').removeClass('hilang');
	


		e.preventDefault();
});

$('.nomor3').on('click', function(e) {
	$('.mt-4').addClass('hilang');
	$('.col-12').addClass('hilang');
	$('.hal3').removeClass('hilang');
	


		e.preventDefault();
});

$('.nomor4').on('click', function(e) {
	$('.mt-4').addClass('hilang');
	$('.col-12').addClass('hilang');
	$('.hal4').removeClass('hilang');
	


		e.preventDefault();
});

$('.nomor5').on('click', function(e) {
	$('.mt-4').addClass('hilang');
	$('.col-12').addClass('hilang');
	$('.hal5').removeClass('hilang');
	


		e.preventDefault();
});

$('.selesai').on('click', function(e) {
	$('.rampung').removeClass('hilang');
	


		e.preventDefault();
});

$('.tidak').on('click', function(e) {
	$('.rampung').addClass('hilang');
	


		e.preventDefault();
});



// function reset() {
// 	document.getElementById('mefo').reset();
// }


$('.clear1').on('click', function(e) {
	document.getElementById('mefo1').reset();

e.preventDefault();
});

$('.clear2').on('click', function(e) {
	document.getElementById('mefo2').reset();

e.preventDefault();
});

$('.clear3').on('click', function(e) {
	document.getElementById('mefo3').reset();

e.preventDefault();
});

$('.clear4').on('click', function(e) {
	document.getElementById('mefo4').reset();

e.preventDefault();
});

$('.clear5').on('click', function(e) {
	document.getElementById('mefo5').reset();

e.preventDefault();
});
