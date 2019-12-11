window.onload = function() {

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

        return data;


      });

      var promise1 = Promise.resolve(mensaje);

      promise1.then(function(value) {

    span.innerHTML=value.message;

      });

    }

  }




}
