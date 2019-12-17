window.addEventListener('load', function(){
  var avatarImg =document.querySelector(".avatarImg");
  var divWidth = document.querySelector(".divAvatar").clientWidth;
  var avatarWidth= divWidth*0.9

  var divAvatar=document.querySelector(".divAvatar");


  avatarImg.setAttribute('height',avatarWidth+"px");
  avatarImg.setAttribute('width',avatarWidth+"px");
    var btnEnviar1 =document.querySelector(".btnEnviar1");


    var input = document.querySelector('input[type="file"]')

    var data = new FormData()
    data.append('file', input.files[0])
    data.append('user', 'hubot')

    fetch('/formProfile', {
      method: 'POST',
      body: data
    })






  var campoPaises=document.querySelector('select[name=paises]');
  fetch('https://restcountries.eu/rest/v2/all')
  .then(function(response){
    return response.json();
  })
  .then(function(paises){
    for(pais of paises){
      var option  = document.createElement('option');
      var optionText= document.createTextNode(pais["translations"]["es"]);
      option.append(optionText);
      campoPaises.append(option);
    }
  })
  .catch(function (error){
    console.error(error);
  });



});
