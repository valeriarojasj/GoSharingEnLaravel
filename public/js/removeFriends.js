window.addEventListener('load', function(){

  var btnRemoveFriend= document.querySelectorAll('.btnRemoveFriend');

  for(var amigo of btnRemoveFriend){
    amigo.onclick= function(event){
      var r = confirm('Seguro quieres borrar este amigo?');
      if (r == false) {

} else {


      event.preventDefault();

      var amigoId = this.getAttribute('id');
      var padre = this.parentElement;



      var span = padre.querySelector('.borrar');
        console.log(span);

      var mensaje = fetch('removeFriend/'+amigoId,{
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




});
