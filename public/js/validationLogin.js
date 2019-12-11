window.onload = function(){
  var email = document.querySelector('input[name = email]');
  var password = document.querySelector('input[name = password]');
  var theForm = document.querySelector('.theForm');


  email.onblur = validarEmail;
  password.onblur = validarPassword;
  theForm.onsubmit = submit;


}
