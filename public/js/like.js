window.onload = function() {
  var btnLike = document.querySelector('#meGustaButton');
  btnLike.onclick = function(){
    var imgLike = document.querySelector('#meGustaButton i');
    var color;
    if(btnLike.style.color == "blue"){
      color = "";
    }else{
      color = "blue";
    }
    btnLike.style.color = color;
    imgLike.style.color = color;

  }
}
