
function validarEmail(email,regexEmail){
  if(email.value == '')
  {
    alert('El email no puede estar vacío');
  } else if (!regexEmail.test(email.value))
    {
      alert('El email ingresado tiene un formato inválido');
  }
}
