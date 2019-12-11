window.onload = function(){
  var firstName = document.getElementById('first_name');
  var lastName = document.querySelector('input[name = last_name]');
  var email = document.querySelector('input[name = email]');
  var password = document.querySelector('input[name = password]');
  var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  var avatar = document.querySelector('input[name = avatar]');
  var theForm = document.querySelector('.theForm');

firstName.onblur = validarName;
lastName.onblur = validarLastName;
email.onblur = validarEmail;
password.onblur = validarPassword;
avatar.onchange = validarAvatar;
theForm.onsubmit = submit;

}
