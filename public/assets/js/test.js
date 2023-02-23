// const tanggaltujuan = new Date('Mar 1, 2023 16:00:00').getTime();


// const hitungmundur = setInterval(function() {

// 	const sekarang = new Date().getTime();
// 	const selisih = tanggaltujuan - sekarang;

// 	const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
// 	const jam = Math.floor(selisih % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
// 	const menit = Math.floor(selisih % (1000 * 60 * 60) / (1000 * 60));
// 	const detik = Math.floor(selisih % (1000 * 60) / 1000);

// 	const teks = document.getElementById('demo');
// 	teks.innerHTML = hari + ':' + jam + ':' + menit + ':' + detik; 

// }, 1000);



const timeH = document.getElementById('kodomo');
let timeSecond = timeH.innerHTML <= 3600 ? timeH.innerHTML : 3600;

displayTime(timeSecond);

const countDown = setInterval (()=>{
	timeSecond--;
	displayTime(timeSecond)
	if (timeSecond <= 0 || timeSecond < 1) {
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
let Second = timeI.innerHTML <= 3600 ? timeI.innerHTML : 3600;

display(Second);

const Down = setInterval (()=>{
	Second--;
	display(Second)
	if (Second <= 0 || Second < 1) {
		endTime();
		clearInterval(Down);
	}
},1000);

function display(second) {
	const min = Math.floor(second / 60);
	const sec = Math.floor(second % 60);
	timeI.innerHTML= (min<10 ? '0': '')+(min)+':'+(sec<10 ? '0': '')+(sec);
};

function endTime(){
	timeI.innerHTML= 'time out'
};
