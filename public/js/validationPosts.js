window.addEventListener('load', function(){

var postsForm = document.getElementById('form-post');
var interestArea = document.getElementById('interest_area');
var postType = document.getElementById('post_type');
var textoPost = document.querySelector('.textoPost');
var file = document.getElementById('file-post');


postsForm.onsubmit = submitPosteo;
//file.onchange = validarContenidoPosteo;




});
