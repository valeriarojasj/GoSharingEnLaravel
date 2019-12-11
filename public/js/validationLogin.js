window.onload = function(){
var email = document.querySelector('input[name = email]');
var password = document.querySelector('input[name = password]');
var theForm = document.querySelector('.theForm');
var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;


email.onblur = validarEmail(email,regexEmail);
password.onblur = validarPassword();
theForm.onsubmit = submit();


}
