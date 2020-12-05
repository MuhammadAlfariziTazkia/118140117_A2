let listBarang = [];
const data = document.getElementById("namaBarang");
const list = document.getElementById("showData");
const byClass = document.getElementsByClassName("manipulasi");
const byTag = document.getElementsByTagName('ul');
const qs = document.querySelector('ul');
const qsa = document.querySelectorAll('ul');

function addData(){
	listBarang.push(data.value);
	data.value = "";
	show();
}

function ubahWarna(by, warna){
	if(by == 'id'){
		list.style.color = warna;
	}else if(by == 'class')	{
		for(var i=0; i<byClass.length ; i++){	
			byClass[i].style.color = warna;
		}
	}
	else if(by == 'tag')	{
		for(var i=0; i<byClass.length ; i++){	
			byTag[i].style.color = warna;
		}
	}
	else if(by == 'query')	{
		qs.style.color = warna;
	}
	else if(by == 'queryall')	{
		for(var i=0; i<byClass.length ; i++){	
			qsa[i].style.color = warna;
		}
	}
}

function editData(index){
	console.log('masuk sini agan');
	var update = prompt('Masukan Nama Baru');
	listBarang[index] = update;
	show();
}

function deleteData(index){
	var yakin = confirm('yakin ingin hapus data?');
	if(yakin){
		console.log('masuk sini agan');
		listBarang.splice(index, 1);
	}
	show();
}

function show(){
	let tampil = [];
	var index = 0;
	listBarang.forEach(unit => {
		tampil += `<li>${unit}  [<a href="#" onclick="editData('${index}')">Edit </a> | <a href="#" onclick="deleteData('${index}')">Hapus</a>] <br></li>`;
		index++;
	});
	list.innerHTML = tampil;
}
