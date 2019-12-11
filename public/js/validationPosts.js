window.onload = function(){

var postsForm = document.getElementById('form-post');
var interestArea = document.getElementById('interest_area');
var postType = document.getElementById('post_type');
var textoPost = document.getElementById('.textoPost');
var file = document.getElementById('file-post');


textoPost.onblur = validarTextoPosteo;
file.onchange = validarContenidoPosteo;
postsForm.onsubmit = submitPosteo;



}
