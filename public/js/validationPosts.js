window.addEventListener('load', function(){

var botonEnviar = document.querySelector('.btnGuardar');
var interestArea = document.getElementById('interest_area');
var opcionesAreas = interestArea.querySelectorAll('option');
var postType = document.getElementById('post_type');
var opcionesPosteos = postType.querySelectorAll('option');
var textoPosteo = document.getElementById('validationTextarea');
var media = document.querySelector('.media');


textoPosteo.onblur = validarTextoPosteo;
media.onchange = validarContenidoPosteo;
//botonEnviar.onclick = submitPosteo;//esto lo pondremos a funcionar despues. Hay que ver como pasar info de la validacion en javascript a el controlador funcion addPost en php




});
