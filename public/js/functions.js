
var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

function validarName(firstName){
  if(this.value == '')
  {
    alert('El nombre no puede estar vacío');
  }
}
function validarLastName(lastName){
  if(this.value == '')
  {
    alert('El apellido no puede estar vacío');
  }
}
function validarEmail(email){

  if(this.value == '')
  {
    alert('El email no puede estar vacío');
  } else if (!regexEmail.test(this.value))
    {
      alert('El email ingresado tiene un formato inválido');
  }
}
function validarPassword(password){
  if(this.value == '')
  {
    alert('La contraseña no puede estar vacía');
  }else if (this.value.length < 8){
    alert ('La contraseña no puede tener menos de 8 caracteres')
  }
}


function validarAvatar(avatar){
  var avatarPath = this.value;
  var allowedExtensions = /(.jpeg|.jpg|.bmp|.gif|.svg|.png)$/i;
  if(!allowedExtensions.exec(avatarPath)){
      alert('El archivo subido no corresponde a las extensiones permitidas: .jpeg/.jpg/.bmp/.gif/.svg/.png');
      event.preventDefault();
      this.value = '';
      return false;
  }else{
      //Image preview
      if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
          };
          reader.readAsDataURL(this.files[0]);
      }
  }
}
function validarTextoPosteo(textoPosteo){
  if(this.value.length == 0){
    alert('El posteo está vacío')
  } return false;
}
function validarContenidoPosteo(media){
  var contenidoPath = this.value;
  var allowedExtensions = /(.jpeg|.jpg|.bmp|.gif|.svg|.png|.doc|.docx|.ppt|.xls|.xlsx|.pptx|.pdf|.mp4|.vga)$/i;
  if(!allowedExtensions.exec(contenidoPath)){
      alert('El archivo subido no corresponde a las extensiones permitidas: .jpeg/.jpg/.bmp/.gif/.svg/.png/.doc/.docx/.ppt/.xls/.xlsx/.pptx/.pdf/.mp4/.vga');
      event.preventDefault();
      this.value = '';
      return false;
  }else{
      //Image preview
      if (this.files && this.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
              document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
          };
          reader.readAsDataURL(this.files[0]);
      }
  }
}



function submitPosteo(interestArea, postType, textoPosteo, contenidoPosteo){
console.log(interestArea)
    if(interestArea.getAtributte('value') == 0){
      alert('No has elegido el area de interés');
      event.preventDefault();
    }
    else if(postType.getAtributte('value') == 0){
      alert('No has elegido el tipo de posteo');
      event.preventDefault();
    }


    if(textoPosteo.value== ''){
      alert('El posteo está vacío.');
      event.preventDefault();
    }

}

function submit(email, password){

    if(email.value.trim() =='' || regexEmail.test(email.value)){
      alert('Un email correcto es obligatorio');
      event.preventDefault();
    } else if (password.value.trim() ==''){
      alert('La contraseña es obligatoria');
      event.preventDefault();
  }
}
