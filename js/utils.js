function iniciarSesion(){
  var tipoUsuario = $('#tipoUsuario').val();
  var usuario = $('#usuario').val();
  var contrasena = $('#contraseña').val();
  if (usuario != "" && contrasena != ""){
    $.ajax( {
      url: 'codigo/session_iniciar.php',
      type: "POST",
      dataType: 'JSON',
      data: {'tipoUsuario':tipoUsuario,'usuario':usuario,'contrasena':contrasena},
      async: true,
      success: function (result) {
        console.log('RESULT : ' +JSON.stringify(result['session_id']));
        if (result['session_id'] >= 0){
            $('#usuario').focus();
            $('#usuario').val('');
            $('#contraseña').val('');
           console.log('sesion iniciada');
        } else {
          console.log('Usuario no existe');
        }
      },
      error: function () {
        console.log( "Error: AJax dead :(" );
      }
    } );
  } else {
    if (usuario == ""){
      $('#usuario').focus();
    } else {
      $('#contraseña').focus();
    }
  }
}

function newsletter_crear(){
  var nombre = $('#nombre').val();
  var email = $('#email').val()
  if (nombre != "" && email != ""){
    $.ajax( {
      url: 'codigo/newsletter_crear.php',
      type: "POST",
      dataType: 'JSON',
      data: {'nombre':nombre,'email':email},
      async: true,
      success: function (result) {
        if (result.success){
          $('#nombre').val('');
          $('#email').val('');
        }
      },
      error: function () {
        console.log( "Error: AJax dead :(" );
      }
    } );
  } else {
    if (nombre == ""){
      //Agregar a input nombre clase de error
      $('#nombre').focus();
    } else {
      //Agregar a input email clase de error
      $('#email').focus();
    }
  }
}

function registrarUsuario(){
  var terminos = $('#terminos').is(':checked');
  var nombre = $('#nombre').val();
  var apellidos = $('#apellidos').val();
  var correoReg = $('#correoReg').val();
  var passReg = $('#passReg').val();
  var estado = $('#estado').val();
  var ciudad = $('#ciudad').val();
  var especialidad = $('#especialidad').val();
  var subespecialidad = $('#subespecialidad').val();
  var tipoUsuario = $('#tipoUsuario').val();

  if (nombre != "" && correoReg != "" && passReg != ""){
    var data = {
      terminos: terminos,
      nombre: nombre,
      tipoUsuario: tipoUsuario,
      apellidos: apellidos,
      correoReg: correoReg,
      passReg: passReg,
      ciudad: ciudad,
      estado: estado,
      especialidad: especialidad,
      subespecialidad: subespecialidad
    };

    var tipoUsuario = $('#tipoUsuario').val();
      $.ajax( {
        url: 'codigo/usuario_crear.php',
        type: "POST",
        dataType: 'JSON',
        data: data,
        async: true,
        success: function (result) {
          if (result.success){
            $('#terminos').is(':checked');
            $('#nombre').val('');
            $('#apellidos').val('');
            $('#correoReg').val('');
            $('#passReg').val('');
            $('#estado').val('');
            $('#ciudad').val('');
            $('#especialidad').val('');
            $('#subespecialidad').val('');
            document.getElementById("terminos").checked = false;
          }
        },
        error: function () {
          console.log( "Error: AJax dead :(" );
        }
      } );
  } else {
    if (nombre == ""){
      $('#nombre').focus();
    } else if (correoReg == ""){
      $('#correoReg').focus();
    } else {
      $('#passReg').focus();
    }
  }
}
function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('.sticky').addClass('stick');
    } else {
        $('.sticky').removeClass('stick');
    }
}
$(function () {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
});

$(document).ready(function(){
  $("#listaEspecialidades a").on('click', function(event) {
    event.preventDefault();
  });
})
