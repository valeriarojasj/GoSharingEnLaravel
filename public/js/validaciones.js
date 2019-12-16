window.addEventListener('load',function() {



var miFoto = document.querySelector('.fotoUpload input')
var miVideo = document.querySelector('.videoUpload input')
var miDocumento = document.querySelector('.docUpload input')


miFoto.onchange = function(){


  document.getElementById("nombreArchivo").innerHTML=miFoto.files[0].name;
}

miVideo.onchange = function(){


  document.getElementById("nombreArchivo").innerHTML=miVideo.files[0].name;
}

miDocumento.onchange = function(){


  document.getElementById("nombreArchivo").innerHTML=miDocumento.files[0].name;
}

var commentFile = document.querySelectorAll('.commentFiles')

for(var fileType of commentFile){

fileType.onchange = function(){

  this.parentElement.parentElement.parentElement.parentElement.querySelector(".archivoComentario").innerHTML=this.files[0].name;




}
}
});
