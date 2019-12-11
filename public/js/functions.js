
function validarEmail(email,regexEmail){
  if(email.value == '')
  {
    alert('El email no puede estar vacío');
  } else if (!regexEmail.test(email.value))
    {
      alert('El email ingresado tiene un formato inválido');
  }
}
function validarPassword(password){
  if(password.value == '')
  {
    alert('La contraseña no puede estar vacía');
  }else if (password.value.length < 8){
    alert ('La contraseña no puede tener menos de 8 caracteres')
  }
}

function validarName(first_name){
  if(first_name.value == '')
  {
    alert('El nombre no puede estar vacío');
  }
}
function validarLastName(last_name){
  if(last_name.value == '')
  {
    alert('El apellido no puede estar vacío');
  }
}
function validarAvatar(avatar){
  var avatarPath = avatar.value;
  var allowedExtensions = /(.jpeg|.jpg|.bmp|.gif|.svg|.png)$/i;
  if(!allowedExtensions.exec(avatarPath)){
      alert('El archivo subido no corresponde a las extensiones permitidas: .jpeg/.jpg/.bmp/.gif/.svg/.png');
      event.preventDefault();
      avatar.value = '';
      return false;
  }else{
      //Image preview
      if (avatar.files && avatar.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
          };
          reader.readAsDataURL(avatar.files[0]);
      }
  }
}

function submit(){

    if(email.value.trim() =='' || regexEmail.test(this.value)){
      alert('Un email correcto es obligatorio');
      event.preventDefault();
    } else if (password.value.trim() ==''){
      alert('La contraseña es obligatoria');
      event.preventDefault();
  }
}
