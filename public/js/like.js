window.addEventListener('load', function(){
  var btnsLike = document.querySelectorAll('.meGustaButton');
  for(var btnLike of btnsLike ){
    btnLike.onclick = function(){
      var ruta = ''
      var imgLike = this.querySelector('i');
      var color;
      if(this.style.color == "blue"){
        color = "";
        ruta = '/removeLike'
      }else{
        color = "blue";
        ruta = '/addLike'
      }
      fetch(ruta,{
        headers: {
          "Content-Type": "application/json",
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": $('input[name="_token"]').val()
        },
        method: "post",
        credentials: "same-origin"
      })
      .then(function(response){
        return response.json()
      })
      .then(function(data){
        console.log(data.mensaje);
      });
      this.style.color = color;
      imgLike.style.color = color;
    }
  }
})
