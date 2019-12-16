window.addEventListener('load', function(){

var postsForm = document.getElementById('form-post');
var interestArea = document.getElementById('interest_area');
var opcionesAreas = interestArea.querySelectorAll('option');
var postType = document.getElementById('post_type');
var opcionesPosteos = postType.querySelectorAll('option');
var textoPosteo = document.getElementById('validationTextarea');
var media = document.querySelector('.media');


textoPosteo.onblur = validarTextoPosteo;
media.onchange = validarContenidoPosteo;
postsForm.onclick = submitPosteo;



});
