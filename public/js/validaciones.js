window.onload = function() {

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



};
