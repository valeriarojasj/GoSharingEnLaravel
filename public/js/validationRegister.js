
window.onload = function(){
  console.log('estoy en validationRegister.js')
var email = document.querySelector('input[name = email]');
var password = document.querySelector('input[name = password]');
var theForm = document.querySelector('.theForm');
var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var name = document.querySelector('input[name = first_name]');
var avatar = document.querySelector('input[name = avatar]');
var lastName = document.querySelector('input[name = last_name]');
console.log()

email.onblur = validarEmail(email,regexEmail);
password.onblur = validarPassword(password);
name.onblur = validarName();
lastName.onblur = validarLastName();
avatar.onchange = validarAvatar();
theForm.onsubmit = submit();


}
