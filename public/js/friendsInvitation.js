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
var btnAcceptInvitation = document.querySelectorAll('.btnAcceptInvitation');
var btnRejectInvitation = document.querySelectorAll('.btnRejectInvitation');
for(var pending of btnAcceptInvitation){
  pending.onclick= function(event){
    event.preventDefault();
    var pendingId = this.getAttribute('id');

    var padre = this.parentElement;



    var span = padre.querySelector('.invitacion');
      console.log(span);

    var mensaje = fetch('acceptInvitation/'+pendingId,{
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
for(var reject of btnRejectInvitation){

  reject.onclick= function(event){
    event.preventDefault();

    var padre = this.parentElement;
    var rejectId = padre.querySelector('.btnAcceptInvitation').getAttribute('id');


    var span = padre.querySelector('.invitacion');


    var mensaje = fetch('rejectInvitation/'+rejectId,{
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
