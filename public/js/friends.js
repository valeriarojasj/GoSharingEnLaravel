window.addEventListener('load', function(){

  var btnAddFriend= document.querySelectorAll('.btnAddFriend');

  for(var noAmigo of btnAddFriend){
    noAmigo.onclick= function(event){
      event.preventDefault();
      var noAmigoId = this.getAttribute('id');
      var padre = this.parentElement;



      var span = padre.querySelector('.solicitud');
        console.log(span);

      var mensaje = fetch('addFriend/'+noAmigoId,{
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

        span.innerHTML=data.message;


      });



    }

  }
var btnAcceptFriend = document.querySelectorAll('.btnAcceptFriend');
var btnRejectFriend = document.querySelectorAll('.btnRejectFriend');
for(var pending of btnAcceptFriend){

  pending.onclick= function(event){
    event.preventDefault();
    var pendingId = this.getAttribute('id');
    var padre = this.parentElement;



    var span = padre.querySelector('.invitacion');
      console.log(span);

    var mensaje = fetch('acceptFriend/'+pendingId,{
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

      span.innerHTML=data.message;


    });



  }

}

for(var reject of btnRejectFriend){

  reject.onclick= function(event){
    event.preventDefault();

    var padre = this.parentElement;
    var rejectId = padre.querySelector('.btnAcceptFriend').getAttribute('id');
console.log(rejectId);

    var span = padre.querySelector('.invitacion');


    var mensaje = fetch('rejectFriend/'+rejectId,{
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

      span.innerHTML=data.message;


    });



  }

}




});
