/* validación formulario de login */
window.onload = function(){
  
  console.log('EStoy en Js')
var email = document.querySelector('input[name = email]');
var password = document.querySelector('input[name = password]');
var theForm = document.querySelector('.theForm');
var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var name = document.querySelector('input[name = first_name]');
var avatar = document.querySelector('input[name = avatar]');
var lastName = document.querySelector('input[name = last_name]');


email.onblur = validarEmail(email,regexEmail);
password.onblur = function(){
  if(this.value == '')
  {
    alert('La contraseña no puede estar vacía');
  }else if (this.value.length < 8){
    alert ('La contraseña no puede tener menos de 8 caracteres')
  }
}
name.onblur = function(){
  if(this.value == '')
  {
    alert('El nombre no puede estar vacío');
  }
}
lastName.onblur = function(){
  if(this.value == '')
  {
    alert('El apellido no puede estar vacío');
  }
}
avatar.onchange = function(){
  console.log(avatar.value);
  var avatarPath = avatar.value;
  var allowedExtensions = /(.jpeg|.bmp|.gif|.svg|.png)$/i;
  if(!allowedExtensions.exec(avatarPath)){
      alert('El archivo subido no corresponde a las extensiones permitidas: .jpeg/.bmp/.gif/.svg/.png');
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



theForm.onsubmit = function(event){
  console.log(email.value);
  if(email.value.trim() =='' || regexEmail.test(this.value)){
    alert('Un email correcto es obligatorio');
    event.preventDefault();
  } else if (password.value.trim() ==''){
    alert('La contraseña es obligatoria');
    event.preventDefault();
}
}

/* validación formulario de registro */






}
