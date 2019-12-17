window.addEventListener('load', function(){

console.log('estoy aqui en searchFriends');
  var btnSearch= document.querySelector('.btnSearchPeople');
  var string = document.querySelector('inputSearchPeople').value


    btnSearch.onclick= function(event){
      event.preventDefault();


      fetch('findFriends/'+string,{
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

      data.search;


      });



    }


var btnAcceptFriend = document.querySelectorAll('.btnAcceptFriend');
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



});
