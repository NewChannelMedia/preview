function iniciarSesion(){
  $.ajax( {
    url: 'codigo/session_iniciar.php',
    type: "POST",
    dataType: 'JSON',
    data: {'usuario':$('#usuario').val(),'contrasena':$('#contraseña').val()},
    async: true,
    success: function (result) {
      console.log('RESULT : ' +JSON.stringify(result['session_id']));
      if (result['session_id'] >= 0){
         console.log('sesion iniciada');
      } else {
        console.log('Usuario no existe');
      }
    },
    error: function () {
      console.log( "Error: AJax dead :(" );
    }
  } );
}
