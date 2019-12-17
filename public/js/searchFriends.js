window.addEventListener('load', function(){


  var btnSearch= document.querySelector('.btnSearchPeople');
  var inputSearch = document.querySelector('.inputSearchPeople');



    btnSearch.onclick= function(event){
    string = inputSearch.value;
    event.preventDefault();
    var ruta = '/findFriends/'+string;
    console.log(ruta);



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

      return response.json();


    })
    .then(function(data){
      console.log(data.search)
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
