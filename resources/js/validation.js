/* validación formulario de login */
window.onload = function(){
var email = document.querySelector('imput[name = email]');
var password = document.querySelector('imput[name = password]');
var theForm = document.querySelector('.theForm');
var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var name = document.querySelector('imput[name = name');
var avatar = document.querySelector('imput[name = avatar');
var lastName = document.querySelector('imput[name = lastName');

email.onblur = function(){
if(this.value == ' ')
{
  alert('Este campo no puede estar vacío');
} else if (!regexEmail.test(this.value))
  {
    alert('El email ingresado tiene un formato inválido');
}

password.onblur = function(){
  if(this.value == ' ')
  {
    alert('Este campo no puede estar vacío');
  }
}

theForm.onsubmit = function(event){
  if(email.value.trim() =='' || !regexEmail.test(this.value)){
    alert('Un email correcto es obligatorio');
    event.preventDefault();
  } else if (password.value.trim() ==''){
    alert('La contraseña es obligatoria');
    event.preventDefault();
}

/* validación formulario de registro */

name.onblur = function(){
  if(this.value == ' ')
  {
    alert('Este campo no puede estar vacío');
  }
}

lastName.onblur = function(){
  if(this.value == ' ')
  {
    alert('Este campo no puede estar vacío');
  }
}

function avatarValidation(){
    var avatar = document.querySelector('imput[name = avatar');
    var avatarPath = avatar.value;
    var allowedExtensions = /(.jpg|.jpeg|.png|.gif)$/i;
    if(!allowedExtensions.exec(avatarPath)){
        alert('El archivo subido no corresponde a las extensiones permitidas: .jpeg/.jpg/.png/.gif');
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
}
